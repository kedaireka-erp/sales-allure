<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Spatie\Activitylog\LogOptions;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Znck\Eloquent\Traits\BelongsToThrough;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fppp extends Model
{
    use HasFactory;
    use BelongsToThrough;
    use SoftDeletes;
    use Sortable;
    use LogsActivity;

    protected $table = "fppps";
    protected $fillable = [
        "fppp_no",
        "number",
        "fppp_type",
        "production_phase",
        "quotation_id",
        "order_status",
        "fppp_revisino",
        "fppp_keterangan",
        "production_time",
        "color",
        "glass",
        "glass_type",
        "retrieval_deadline",
        "box_usage",
        "sealant_usage",
        "delivery_to_expedition",
        "note",
        "attachment",
        "user_id"
    ];

    public $sortable = [
        "fppp_no",
        "fppp_type",
        "production_phase",
        "quotation_id",
    ];

    protected $dates = ['created_at'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                "fppp_no",
                "number",
                "fppp_type",
                "production_phase",
                "quotation_id",
                "order_status",
                "fppp_revisino",
                "fppp_keterangan",
                "production_time",
                "color",
                "glass",
                "glass_type",
                "retrieval_deadline",
                "box_usage",
                "sealant_usage",
                "delivery_to_expedition",
                "note",
                "attachment",
                "user_id"
            ])
            ->logOnlyDirty()
            ->useLogName('Fppp');
    }

    //boot
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            //get current month fppp count
            $fpppCount = Fppp::whereMonth('created_at', Carbon::now()->month)->count();
            $fpppCount++;
            $model->increment('number');
            $model->fppp_no = $fpppCount . "/FPPP/AST/" . Carbon::now()->format("m/Y");
            return true;
        });
    }



    protected function deliveryToExpedition(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if ($value == 0) {
                    return "tidak";
                } else {
                    return "ya";
                }
            }
        );
    }
    protected function sealantUsage(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if ($value == 0) {
                    return "tidak";
                } else {
                    return "ya";
                }
            }
        );
    }

    protected function boxUsage(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if ($value == 0) {
                    return "tidak";
                } else {
                    return "ya";
                }
            }
        );
    }

    protected function orderStatus(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if ($value == 'baru') {
                    return "baru";
                }
                if ($value == 'tambahan') {
                    return "tambahan";
                }
                if ($value == 'revisino') {
                    return "revisi";
                }
                if ($value == 'lainlain') {
                    return "lain-lain";
                }
            }
        );
    }

    protected function glass(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if ($value == 'included') {
                    return "included";
                }
                if ($value == 'excluded') {
                    return "excluded";
                }
                if ($value == 'included_excluded') {
                    return "included & excluded";
                }
            }
        );
    }

    public function quotation()
    {
        return $this->belongsto(ProyekQuotation::class);
    }

    public function files()
    {
        return $this->hasMany(AttachmentFppp::class, "fppp_id", "id");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function dataQuotation()
    // {
    //     return $this->belongsToThrough(ProyekQuotation::class, Quotation::class);
    // }
}
