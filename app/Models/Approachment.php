<?php

namespace App\Models;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Approachment extends Model
{
    use HasFactory;

    protected $table="approachments";
    protected $fillable=[
        "contact_id",
        "status_id",
        "date",
        "note", 
    ];

    public function status(){
        return $this->belongsto(Status::class);
    }

    public function contact(){
        return $this->belongsto(Contact::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'approachment_activities');
    }

}
