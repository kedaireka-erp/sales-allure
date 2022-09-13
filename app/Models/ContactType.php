<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactType extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "contact_types";
    protected $fillable = ['name', 'status'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
