<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    use HasFactory;
    public $fillable = ['nama'];
    public $timestamps = true;

    public function murid()
    {
        return $this->hasOne(Murid::class, 'id_guru');
    }
}
