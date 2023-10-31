<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nama_tes extends Model
{
    protected $table = 'nama_tes';
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nama_tes'
    ];

    public function tes_penilaian()
    {
        return $this->hasMany(Tes_Penilaian::class);
    }
}
