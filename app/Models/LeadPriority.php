<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadPriority extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description'
    ];

    public function Contact()
    {
        return $this->hasMany(Contact::class);
    }
}
