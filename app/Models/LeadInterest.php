<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadInterest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function Contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_interests');
    }
}
