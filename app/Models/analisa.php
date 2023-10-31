<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class analisa extends Model
{
    protected $table = 'analisa';
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'analisa',
    ];

    public function tes_penilaian()
    {
        return $this->hasMany(Tes_Penilaian::class);
    }
}
