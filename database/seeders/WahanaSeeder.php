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
            'foto' => 'https://asset.kompas.com/crops/cmlacwyYvZAkpAfcKikSHiEihB8=/177x0:1212x690/750x500/data/photo/2021/08/30/612c42f59134d.jpg',
            'status' => 'Berfungsi',
        ]);
        Wahana::Create([
            'nama' => 'Roller Coaster',
            'deskripsi' => 'Wahana ini terdiri dari rel berbentuk seperti jalan setapak yang membentang di atas tanah dan terkadang di atas bangunan atau struktur lainnya.',
            'kuota' => 100,
            'foto' => 'https://awsimages.detik.net.id/customthumb/2014/04/10/1519/hal1.jpg?w=780&q=90',
            'status' => 'Berfungsi',
        ]);
        Wahana::Create([
            'nama' => 'Tornado',
            'deskripsi' => 'memiliki bentuk yang mirip dengan tornado, yaitu berbentuk kerucut dan berputar dengan kecepatan yang tinggi.',
            'kuota' => 100,
            'foto' => 'https://static.republika.co.id/uploads/images/inpicture_slide/wahan-tornado-di-dunia-fantasi-yang-sempat-macet-dan-_110721110138-556.jpg',
            'status' => 'Berfungsi',
        ]);
        Wahana::Create([
            'nama' => 'Kicir-Kicir',
            'deskripsi' => 'Wahana ini terdiri dari kursi-kursi kecil yang tergantung pada sebuah tiang pusat.',
            'kuota' => 100,
            'foto' => 'https://asset-a.grid.id/crop/0x0:0x0/945x630/photo/grid/original/31377_wahana-kicir.jpg',
            'status' => 'Berfungsi',
        ]);
    }
}
