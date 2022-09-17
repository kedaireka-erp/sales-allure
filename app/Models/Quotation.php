<?php

namespace App\Models;

use App\Models\Status;
use App\Models\DealSource;
use App\Models\DetailQuotation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quotation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="quotations";
    protected $fillable=["no_quotation","contact_id", "deal_source_id","status_id","keterangan"];

    public function Contact(){
        return $this->belongsTo(Contact::class);
    }

    public function DealSource(){
        return $this->belongsTo(DealSource::class);
    }
    public function Status(){
        return $this->belongsTo(Status::class);
    }

    public function fppp(){
        return $this->hasMany(Fppp::class);
    }

    public function DetailQuotation(){
        return $this->hasMany(DetailQuotation::class);
    }
}
