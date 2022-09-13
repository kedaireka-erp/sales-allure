<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $table="companies";
    protected $fillable = [
        'name',
        'phone_number',
        'company_type_id',
        'address',
        'city',
        'company_area_id',
        'postal_code',
        'number_of_employees',
        'annual_revenue',
        'time_zone',
        'description',
        'linkedin_company',
    ];

    public function company_type(){
        return $this->belongsto(CompanyType::class);
    }

    public function company_area(){
        return $this->belongsto(CompanyArea::class);
    }
}
