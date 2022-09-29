<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fppp extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="fppps";
    protected $fillable=[
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

    protected $dates = ['created_at'];

    protected function number(): Attribute
    {
        return Attribute::make(
            set: function($value){
                $now_month = Carbon::now()->format('m');
                $last_data_month = Fppp::latest()->first() ? Fppp::latest()->first()->created_at->format('m') : 0;

                if ($now_month == $last_data_month) {
                    $num = Fppp::latest()->first()->number;
                    return $num + 1;
                } 
                return 0;
            },
        );
    }

    public function quotation(){
        return $this->belongsto(Quotation::class);
    }

    public function files(){
        return $this->hasMany(AttachmentFppp::class, "fppp_id", "id");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    


}
