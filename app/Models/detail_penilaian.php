<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penilaian extends Model
{
    protected $table = "detail_penilaian";
    protected $primarykey = "id";
    protected $fillable = ['id', 'nama', 'waktu_mulai', 'waktu_selesai', 'point', 'keterangan_point'];
}
