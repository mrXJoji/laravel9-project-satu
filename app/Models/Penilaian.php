<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaian';
    protected $primarykey = "id";
    protected $fillable = [
        'nama',
        'jenis_penilaian',
        'tipe_penilaian',
        'keterangan',
    ];
}
