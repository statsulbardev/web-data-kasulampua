<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicators extends Model
{
    protected $table = 'Indicators';

    protected $fillable = [
        'tahun', 'kode_wilayah', 'indikator', 'data', 'keterangan'
    ];
}
