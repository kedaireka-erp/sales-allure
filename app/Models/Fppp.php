<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fppp extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="fppps";
    protected $fillable=[
        "fppp_no", 
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
