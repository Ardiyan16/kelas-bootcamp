<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable = [
        'nim',
        'alamat',
        'no_telp',
        'semester',
        'jurusan'
    ];
}
