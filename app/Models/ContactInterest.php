<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInterest extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'lead_interest_id'
    ];
}
