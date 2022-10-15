<?php

namespace App\Models;

use App\Models\Quotation;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    use Sortable;
    
    protected $table='statuses';
    protected $fillable=['name', 'deskripsi'];
    public $sortable = ['name'];

    public function StatusQuotation(){
        return $this->hasMany(Quotation::class);
    }

    public function approachment(){
        return $this->hasMany(Approachment::class);
    }




}
