<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;

     public function image()
    {
        if ($this->foto && file_exists(public_path('foto/crud/' . $this->foto))) {
            return asset('foto/crud/' . $this->foto);
        } else {
            return asset('foto/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('foto/crud/' . $this->foto))) {
            return unlink(public_path('foto/crud/' . $this->foto));
        }
}
}