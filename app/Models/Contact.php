<?php

namespace App\Models;

use App\Models\LeadSource;
use App\Models\ContactType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;

class Contact extends Model
{
    use HasFactory, SoftDeletes, Sortable;

    protected $table = 'contacts';
    protected $guarded = ['id'];
    protected $appends = ['name'];
    public $sortable = ['first_name', 'last_name', 'email', 'phone', 'contact_type_id', 'lead_source_id', 'created_at'];

    protected function firstName(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => strtolower($value),
        );
    }

    protected function lastName(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => strtolower($value),
        );
    }

    public function getNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function ContactType()
    {
        return $this->belongsTo(ContactType::class);
    }

    public function LeadSource()
    {
        return $this->belongsTo(LeadSource::class);
    }

    public function Quotation()
    {
        return $this->hasMany(Quotation::class);
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }

    public function LeadStatus()
    {
        return $this->belongsTo(LeadStatus::class);
    }

    public function leadInterests()
    {
        return $this->belongsToMany(LeadInterest::class, 'contact_interests');
    }

    public function approachment(){
        return $this->hasMany(Approachment::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function LeadPriority()
    {
        return $this->belongsTo(LeadPriority::class);
    }
}
