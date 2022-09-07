<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fppp extends Model
{
    use HasFactory;

    protected $table="fppps";
    protected $fillable=[
        "fppp_no", 
        "fppp_type", 
        "production_phase", 
        "order_status", 
        "production_time", 
        "color", 
        "glass", 
        "glass_type", 
        "retrieval_deadline", 
        "box_usage", 
        "sealant_usage", 
        "delivery_to_expedition", 
        "note", 
        "attachment"
    ];

}
