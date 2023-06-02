<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promo::create([
            'nama' => 'Paket Liburan Bertiga, Hemat Mulai Dari 75 Ribu',
            'deskripsi' => 'Berlaku hingga 30 Juni 2023',
            'tanggal_mulai' => '2023-06-01',
            'tanggal_selesai' => '2023-06-30',
            'status' => 'Aktif',
            'kode_promo' => 'CoasterSeru',
            'potongan' => '10',
            'kuota_promo' => 100,
            'terpakai_promo' => 50,
            'created_at' => now(),
            'updated_at' => now(),
            'gambar_promo' => 'https://thumb.viva.co.id/media/frontend/thumbs3/2022/11/07/63684a97a8496-roller-coaster-top-thrill-dragster_1265_711.jpg'
        ]);
        Promo::create([
            'nama' => 'Happy Hours, Dari Jam 3 Sampai Jam 5 Sore',
            'deskripsi' => 'Berlaku Hingga 20 Juni 2023',
            'tanggal_mulai' => '2023-05-12',
            'tanggal_selesai' => '2023-06-20',
            'status' => 'Tidak Aktif',
            'kode_promo' => 'HAPPYHOUR',
            'potongan' => '20',
            'kuota_promo' => 200,
            'terpakai_promo' => 100,
            'created_at' => now(),
            'updated_at' => now(),
            'gambar_promo' => 'https://sikidang.com/wp-content/uploads/Rita-Park-Tegal.jpg'
        ]);

        Promo::create([
            'nama' => 'Happy Hours, Dari Jam 3 Sampai',
            'deskripsi' => 'Berlaku Hingga 20 Juni 2023',
            'tanggal_mulai' => '2023-05-12',
            'tanggal_selesai' => '2023-06-20',
            'status' => 'Tidak Aktif',
            'kode_promo' => 'HAPPYHOUR',
            'potongan' => '20',
            'kuota_promo' => 200,
            'terpakai_promo' => 100,
            'created_at' => now(),
            'updated_at' => now(),
            'gambar_promo' => 'https://sikidang.com/wp-content/uploads/Rita-Park-Tegal.jpg'
        ]);
        Promo::create([
            'nama' => 'Happy Hours, Dari Jam 3 Sampai asdsadasdasdasdsadsadasd',
            'deskripsi' => 'Berlaku Hingga 20 Juni 2023',
            'tanggal_mulai' => '2023-05-12',
            'tanggal_selesai' => '2023-06-20',
            'status' => 'Tidak Aktif',
            'kode_promo' => 'HAPPYHOUR',
            'potongan' => '20',
            'kuota_promo' => 200,
            'terpakai_promo' => 100,
            'created_at' => now(),
            'updated_at' => now(),
            'gambar_promo' => 'https://sikidang.com/wp-content/uploads/Rita-Park-Tegal.jpg'
        ]);
    }
}
