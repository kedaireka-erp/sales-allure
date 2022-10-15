<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyArea extends Model
{
    use HasFactory, SoftDeletes, Sortable;
    
    protected $fillable = [
        'name',
        'description',
    ];
    public $sortable = ['name', 'description'];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
