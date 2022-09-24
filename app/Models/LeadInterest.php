<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadInterest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description'
    ];

    public function Contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_interests');
    }
}
