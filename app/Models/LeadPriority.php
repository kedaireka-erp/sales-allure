<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeadPriority extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'description'
    ];

    public function Contact()
    {
        return $this->hasMany(Contact::class);
    }
}
