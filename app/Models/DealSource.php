<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealSource extends Model
{
    use HasFactory;
    protected $table = 'deal_sources';
    protected $fillable = ['name', 'deskripsi'];

    public function DealSourceQuotation(){
        return $this->hasMany(Quotation::class);
    }
}
