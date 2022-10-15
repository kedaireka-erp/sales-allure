<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;

class Activity extends Model
{
    use HasFactory, Sortable;

    protected $table="activities";
    protected $fillable=[
        "name", 
        "desc" 
    ];
    public $sortable = ['name'];
    
    public function approachment()
    {
        return $this->hasMany(Approachment::class);
    }


}
