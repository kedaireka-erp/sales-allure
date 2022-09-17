<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $table="activities";
    protected $fillable=[
        "name", 
        "desc" 
    ];
    
    public function approachment()
    {
        return $this->belongsToMany(Approachment::class, 'approachment_activities');
    }


}
