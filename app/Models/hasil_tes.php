<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_tes extends Model
{
    protected $table = 'hasil_tes';
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'hasil_tes'
    ];

    public function tes_penilaian()
    {
        return $this->hasMany(Tes_Penilaian::class);
    }
}
