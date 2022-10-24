<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, SoftDeletes, Sortable, LogsActivity;

    protected $table = "companies";
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
    public $sortable = ['name', 'phone_number', 'address', 'city', 'postal_code', 'number_of_employees', 'annual_revenue', 'time_zone', 'linkedin_company'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
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
            ])
            ->logOnlyDirty()
            ->useLogName('Company');
    }

    public function company_type()
    {
        return $this->belongsto(CompanyType::class);
    }

    public function company_area()
    {
        return $this->belongsto(CompanyArea::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
