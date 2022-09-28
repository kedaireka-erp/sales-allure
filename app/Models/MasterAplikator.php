<?php

namespace App\Models;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterAplikator extends Model
{
    use HasFactory;
    protected $table="master_aplikators";
    protected $fillable=["kode","aplikator","kontak","alamat","logo","email","password","id_status","penginput","created_date","last_login","login_stat"];

    public function Aplikator(){
        return $this->hasMany(Quotation::class);
    }
}
