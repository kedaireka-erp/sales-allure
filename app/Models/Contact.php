<?php

namespace App\Models;

use App\Models\LeadSource;
use App\Models\ContactType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'contact_type_id',
        'lead_source_id',
        'lead_status_id',
        'email',
        'address',
        'phone',
        'note',
        'user_id'
    ];

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
}
