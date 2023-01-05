<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    public function rt()
    {
        return $this->belongsTo(Rt::class, 'id_rt');
    }
    public function image()
    {
        if ($this->image && file_exists(public_path('image/rt/' . $this->image))) {
            return asset('image/rt/' . $this->image);
        } else {
            return asset('assets/images/layout_img/user_img.jpg');
        }
    }
    // mengahupus image(image) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('image/rt/' . $this->image))) {
            return unlink(public_path('image/rt/' . $this->image));
        }
    }
}
