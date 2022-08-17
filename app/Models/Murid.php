<?php

namespace App\Models;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Murid extends Model
{
    use HasFactory;

    public $table = 'murids';
    public $fillable = ['nama', 'nis', 'agama', 'jenis_kelamin', 'alamat', 'tgl_lahir', 'status', 'id_guru'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }
}
