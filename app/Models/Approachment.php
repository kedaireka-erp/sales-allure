<?php

namespace App\Models;

use App\Models\Activity;
use Spatie\Activitylog\LogOptions;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Approachment extends Model
{
    use HasFactory;
    use Sortable;
    use LogsActivity;

    protected $table = "approachments";
    protected $fillable = [
        "contact_id",
        "activity_id",
        "user_id",
        "status_id",
        "date",
        "note",
    ];
    protected $date = ['created_at'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                "contact_id",
                "activity_id",
                "user_id",
                "status_id",
                "date",
                "note",
            ])
            ->logOnlyDirty()
            ->useLogName('Quotation');
    }

    public $sortable = ['date'];

    protected $dates = [
        'created_at'
    ];

    public function status()
    {
        return $this->belongsto(Status::class);
    }

    public function contact()
    {
        return $this->belongsto(Contact::class);
    }

    public function activity()
    {
        return $this->belongsto(Activity::class);
    }

    public function scopeFilter($query, $filter)
    {
        if ($filter['status'] != "") {
            $query->where('status_id', '=', $filter['status']);
        }
        if ($filter['contact'] != "") {
            $query->where('contact_id', '=', $filter['contact']);
        }
        return $query;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
