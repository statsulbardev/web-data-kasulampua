<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';

    protected $fillable = ['kode_wilayah', 'nama_wilayah', 'keterangan'];

    public $timestamps = false;

    public function indicators()
    {
        return $this->hasMany(Indicators::class, 'kode_wilayah', 'kode_wilayah');
    }
}
