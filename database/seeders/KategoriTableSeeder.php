<?php

namespace Database\Seeders;

use App\Models\KategoriBerita;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            'Edukasi',
            'UMKM',
            'Pasar Global',
            'Data Ekspor',
            'Produk'
         ];

         foreach ($kategori as $kategori) {
              KategoriBerita::create(['nama_kategori' => $kategori]);
         }
    }
}
