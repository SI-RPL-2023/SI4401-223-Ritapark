<?php

namespace Database\Seeders;

use App\Models\Wahana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WahanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wahana::Create([
            'nama' => 'Bianglala',
            'deskripsi' => 'Wahana rekreasi yang berbentuk roda besar yang berputar dengan lambat dan berisi beberapa gerbong kecil yang dapat menampung beberapa orang di dalamnya.',
            'kuota' => 100,
            'status' => 'Berfungsi',
        ]);
        Wahana::Create([
            'nama' => 'Roller Coaster',
            'deskripsi' => 'Wahana ini terdiri dari rel berbentuk seperti jalan setapak yang membentang di atas tanah dan terkadang di atas bangunan atau struktur lainnya.',
            'kuota' => 100,
            'status' => 'Berfungsi',
        ]);
        Wahana::Create([
            'nama' => 'Tornado',
            'deskripsi' => 'memiliki bentuk yang mirip dengan tornado, yaitu berbentuk kerucut dan berputar dengan kecepatan yang tinggi.',
            'kuota' => 100,
            'status' => 'Berfungsi',
        ]);
        Wahana::Create([
            'nama' => 'Kicir-Kicir',
            'deskripsi' => 'Wahana ini terdiri dari kursi-kursi kecil yang tergantung pada sebuah tiang pusat.',
            'kuota' => 100,
            'status' => 'Berfungsi',
        ]);
    }
}
