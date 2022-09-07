<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table="companies";
    protected $fillable = [
        'name',
        'company_type_id',
        'company_area_id',
        'phone_number',
        'address',
        'description',
    ];

    public function company_type(){
        return $this->belongsto(CompanyType::class);
    }

    public function company_area(){
        return $this->belongsto(CompanyArea::class);
    }
}
