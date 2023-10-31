<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tes_penilaian extends Model
{
    protected $table = "tes_penilaian";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nama_tes_id', 'tanggal_tets', 'hasil_tes_id', 'analisa_id', 'point_id',
    ];

    public function nama_tes()
    {
        return $this->belongsTo(Nama_tes::class);
    }

    public function hasil_tes()
    {
        return $this->belongsTo(Hasil_tes::class);
    }

    public function analisa()
    {
        return $this->belongsTo(Analisa::class);
    }

    public function point_tes()
    {
        return $this->belongsTo(point_tes::class);
    }
}
