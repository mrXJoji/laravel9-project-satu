<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class point_tes extends Model
{
    protected $table = 'point_tes';
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'point_tes'
    ];

    public function tes_penilaian()
    {
        return $this->hasMany(Tes_Penilaian::class);
    }
}
