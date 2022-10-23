<?php

namespace App\Models;

use App\Models\Status;
use App\Models\DealSource;
use App\Models\DetailQuotation;
use App\Models\MasterAplikator;
use App\Models\ProyekQuotation;
use Attribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;

class Quotation extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'proyek_quotations';

    protected $fillable = ['id_penginput', 'kode_aplikator', 'no_quotation', 'id_currency', 'nama_proyek', 'nama_owner', 'kontak', 'no_quotation_cus', 'alamat_proyek', 'keterangan', 'status_quotation', 'date', 'alasan', 'revisi_ke'];
    public $sortable = ['no_quotation', 'nama_proyek'];

    protected $appends = ['nominal', 'no_quotation'];

    // public function getNoQuotationAttribute()
    // {
    //     return $this->DataQuotation->no_quotation;
    // }

    // public function Contact()
    // {
    //     return $this->belongsTo(Contact::class);
    // }

    public function DealSource()
    {
        return $this->belongsTo(DealSource::class);
    }

    public function Status()
    {
        return $this->belongsTo(Status::class, 'status_quotation');
    }

    public function fppp()
    {
        return $this->hasMany(Fppp::class);
    }

    public function DetailQuotation()
    {
        return $this->hasMany(DetailQuotation::class);
    }

    public function getNominalAttribute()
    {
        return $this->DetailQuotation()->sum(DB::raw('qty * harga'));
    }

    public function scopeSearch($query, $filter)
    {
        $query->when($filter['search'] ?? false, function ($query, $search) {
            return $query->where('no_quotation', 'like', '%' . $search . '%');
        });
    }
    public function scopeStatus($query, $filter)
    {
        $query->when($filter['status'] ?? false, function ($query, $status) {
            return $query->where('status_quotation', '=', $status);
        });
    }

    public function Aplikator()
    {
        return $this->belongsTo(MasterAplikator::class, 'kode_aplikator', 'kode');
    }

    // public function DataQuotation()
    // {
    //     return $this->hasOne(ProyekQuotation::class, 'id', 'proyek_quotation_id');
    // }
}
