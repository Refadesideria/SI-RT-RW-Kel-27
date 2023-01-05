<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRonda extends Model
{
    use HasFactory;

    public function jadwal() {
        return $this->belongsTo(Jadwal::class,'id_jadwal');
    }
    public function ronda() {
        return $this->belongsTo(Ronda::class,'id_ronda');
    }
}
