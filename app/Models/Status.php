<?php

namespace App\Models;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    protected $table='statuses';
    protected $fillable=['name', 'deskripsi'];

    public function StatusQuotation(){
        return $this->hasMany(Quotation::class);
    }
}
