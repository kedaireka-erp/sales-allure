<?php

namespace App\Models;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;

class Approachment extends Model
{
    use HasFactory;
    use Sortable;

    protected $table="approachments";
    protected $fillable=[
        "contact_id",
        "activity_id",
        "status_id",
        "date",
        "note", 
    ];

    public $sortable = ['date'];

    protected $dates = [
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

    public function scopeFilter($query, $filter){
        if($filter['status'] != ""){
            $query->where('status_id','=', $filter['status']);
        }
        if($filter['contact'] != ""){
            $query->where('contact_id','=', $filter['contact']);
        }
        return $query;
    }

}
