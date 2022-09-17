<?php

namespace App\Models;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailQuotation extends Model
{
    use HasFactory;
    protected $table = "detail_quotations";
    protected $fillable = ["id_quotation","id_kode_gambar","lokasi","kode_item","kode_tipe","daun","kode_warna","panjang","lebar","harga","qty"];
    
    public function DetailQuotation(){
        return $this->belongsTo(Quotation::class);
    }
}
