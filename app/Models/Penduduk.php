<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

     public function rt() {
        return $this->belongsTo(Rt::class,'id_rt');
    }
     public function jadwal() {
        return $this->belongsTo(Jadwal::class,'id_penduduk');
    }
    public function foto()
    {
        if ($this->foto && file_exists(public_path('image/penduduk/' . $this->foto))) {
            return asset('image/penduduk/' . $this->foto);
        } else {
            return asset('assets/images/layout_img/user_img.jpg');
        }
    }
    // mengahupus image(image) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('image/penduduk/' . $this->foto))) {
            return unlink(public_path('image/penduduk/' . $this->foto));
        }
    }
}
