<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentFppp extends Model
{
    use HasFactory;

    protected $table="attachment_fppps";
    protected $fillable=["name", "path", "fppp_id"];

    public function fppp(){
        return $this->belongsTo(Fppp::class);
    }

}
