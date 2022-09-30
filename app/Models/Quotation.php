<?php

namespace App\Models;

use App\Models\Status;
use App\Models\DealSource;
use App\Models\DetailQuotation;
use App\Models\MasterAplikator;
use App\Models\ProyekQuotation;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quotation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'quotations';
    protected $fillable = ['contact_id', 'deal_source_id', 'status_id','aplikator_id', 'alasan', 'keterangan'];
    protected $appends = ['nominal'];

    public function Contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function DealSource()
    {
        return $this->belongsTo(DealSource::class);
    }
    public function Status()
    {
        return $this->belongsTo(Status::class);
    }

    public function fppp()
    {
        return $this->hasMany(Fppp::class);
    }

    public function DetailQuotation()
    {
        return $this->hasMany(DetailQuotation::class);
    }

    public function Nominal()
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
            return $query->where('status_id', '=', $status);
        });
    }

    public function Aplikator()
    {
        return $this->belongsTo(MasterAplikator::class);
    }

    public function DataQuotation(){
        return $this->hasOne(ProyekQuotation::class);
    }
}
