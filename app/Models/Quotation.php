<?php

namespace App\Models;

use App\Models\Status;
use App\Models\DealSource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quotation extends Model
{
    use HasFactory;
    protected $table="quotations";
    protected $fillable=["no_quotation","deal_source_id","status_id","keterangan"];

    public function DealSource(){
        return $this->belongsTo(DealSource::class);
    }
    public function Status(){
        return $this->belongsTo(Status::class);
    }

    public function fppp(){
        return $this->hasMany(Fppp::class);
    }
}
