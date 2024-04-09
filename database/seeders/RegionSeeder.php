<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kode_wilayah' => '6000', 'keterangan' => 'pulau', 'nama_wilayah' => 'Kalimantan'],
            ['kode_wilayah' => '6100', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Kalimantan Barat'],
            ['kode_wilayah' => '6200', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Kalimantan Tengah'],
            ['kode_wilayah' => '6300', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Kalimantan Selatan'],
            ['kode_wilayah' => '6400', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Kalimantan Timur'],
            ['kode_wilayah' => '6500', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Kalimantan Utara'],
            ['kode_wilayah' => '7000', 'keterangan' => 'pulau', 'nama_wilayah' => 'Sulawesi'],
            ['kode_wilayah' => '7100', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Sulawesi Utara'],
            ['kode_wilayah' => '7200', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Sulawesi Tengah'],
            ['kode_wilayah' => '7300', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Sulawesi Selatan'],
            ['kode_wilayah' => '7400', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Sulawesi Tenggara'],
            ['kode_wilayah' => '7500', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Gorontalo'],
            ['kode_wilayah' => '7600', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Sulawesi Barat'],
            ['kode_wilayah' => '8000', 'keterangan' => 'pulau', 'nama_wilayah' => 'Maluku'],
            ['kode_wilayah' => '8100', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Maluku'],
            ['kode_wilayah' => '8200', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Maluku Utara'],
            ['kode_wilayah' => '9000', 'keterangan' => 'pulau', 'nama_wilayah' => 'Papua'],
            ['kode_wilayah' => '9100', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Papua Barat'],
            ['kode_wilayah' => '9200', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Papua Barat Daya'],
            ['kode_wilayah' => '9400', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Papua'],
            ['kode_wilayah' => '9500', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Papua Selatan'],
            ['kode_wilayah' => '9600', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Papua Tengah'],
            ['kode_wilayah' => '9700', 'keterangan' => 'provinsi', 'nama_wilayah' => 'Papua Pegunungan']
        ];

        Region::insert($data);
    }
}
