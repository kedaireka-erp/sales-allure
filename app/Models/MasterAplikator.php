<?php

namespace App\Models;

use App\Models\Quotation;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterAplikator extends Model
{
    use HasFactory;
    use Sortable;
    
    protected $table="master_aplikator";
    protected $fillable=["kode","aplikator","kontak","alamat","logo","email","password","id_status","penginput","created_date","last_login","login_stat"];
    public $sortable = ['kode', 'aplikator'];
    public $timestamps = false;

    public function Aplikator(){
        return $this->belongsTo(Quotation::class);
    }
}
