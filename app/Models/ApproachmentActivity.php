<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApproachmentActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'approachment_id',
        'activity_id'
    ];

}
