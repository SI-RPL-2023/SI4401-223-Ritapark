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
            'nama' => 'Promo akhir Bulan',
            'deskripsi' => 'Dompet kering tak masalah',
            'tanggal_mulai' => '2023-05-25',
            'tanggal_selesai' => '2023-05-31',
            'status' => 'Aktif',
            'kode_promo' => 'ABC123',
            'potongan' => '10',
            'kuota_promo' => 100,
            'terpakai_promo' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Promo::create([
            'nama' => 'Promo Pertengahan',
            'deskripsi' => 'Hiling dulu gak sih',
            'tanggal_mulai' => '2023-05-12',
            'tanggal_selesai' => '2023-06-20',
            'status' => 'Tidak Aktif',
            'kode_promo' => 'DEF456',
            'potongan' => '20',
            'kuota_promo' => 200,
            'terpakai_promo' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
