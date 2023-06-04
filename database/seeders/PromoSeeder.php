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
            'nama' => 'Promo awal bulan, dapatkan diskon 10%',
            'deskripsi' => 'Berlaku dari 1 Juni hingga 12 Juni 2023',
            'tanggal_mulai' => '2023-06-01',
            'tanggal_selesai' => '2023-06-12',
            'status' => 'Aktif',
            'kode_promo' => 'AWALBULANSERU',
            'potongan' => '10',
            'kuota_promo' => 100,
            'terpakai_promo' => 50,
            'created_at' => now(),
            'updated_at' => now(),
            'gambar_promo' => 'img/gevmJTogJ3hUdSuuE17ifFkjH35XrQtwYY7nEgDD.webp'
        ]);
        Promo::create([
            'nama' => 'Promo Terbatas! Dapatkan diskon 40%',
            'deskripsi' => 'Kuota Promo hanya 10 orang',
            'tanggal_mulai' => '2023-06-01',
            'tanggal_selesai' => '2023-06-12',
            'status' => 'Aktif',
            'kode_promo' => 'LIMITEDPROMO',
            'potongan' => '40',
            'kuota_promo' => 10,
            'terpakai_promo' => 8,
            'created_at' => now(),
            'updated_at' => now(),
            'gambar_promo' => 'img/X355zLSVvnHfwfLCo0Ct4AN7nJVjnfmcBg8NbK7j.jpg'
        ]);
        Promo::create([
            'nama' => 'Promo Bulan mei, dapatkan diskon 20%',
            'deskripsi' => 'Berlaku dari 27 Mei Hingga 31 Mei 2023',
            'tanggal_mulai' => '2023-05-27',
            'tanggal_selesai' => '2023-05-31',
            'status' => 'Tidak Aktif',
            'kode_promo' => 'HAPPYMONTH3',
            'potongan' => '20',
            'kuota_promo' => 200,
            'terpakai_promo' => 100,
            'created_at' => now(),
            'updated_at' => now(),
            'gambar_promo' => 'img/X355zLSVvnHfwfLCo0Ct4AN7nJVjnfmcBg8NbK7j.jpg'
        ]);
    }
}
