<?php

namespace App\Models;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Approachment extends Model
{
    use HasFactory;

    protected $table="approachments";
    protected $fillable=[
        "contact_id",
        "activity_id",
        "status_id",
        "date",
        "note", 
    ];

    protected $dates = [
        'date',
        'created_at'
    ];

    public function status(){
        return $this->belongsto(Status::class);
    }

    public function contact(){
        return $this->belongsto(Contact::class);
    }

    public function activity()
    {
        return $this->belongsto(Activity::class);
    }

    public function scopeStatus($query, $filter){
        $query->when($filter['status'] ?? false, function($query, $status){
            return $query->where('status_id','=', $status);
        });
      }

    public function scopeContact($query, $filter){
        $query->when($filter['contact'] ?? false, function($query, $contact){
            return $query->where('contact_id','=', $contact);
        });
      }

}
