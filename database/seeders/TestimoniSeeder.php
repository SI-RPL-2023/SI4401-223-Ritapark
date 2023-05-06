<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimoni::create([
            'nama_depan' => 'Diah',
            'nama_belakang' => 'Putri',
            'email' => 'diah@gmail.com',
            'tanggal' => '2023-05-07',
            'testimoni_text' => 'Ritapark memang tempat yang cocok untuk keluarga. Saya dan keluarga sudah beberapa kali berkunjung ke sana dan selalu senang dengan beragam wahana yang ditawarkan, terutama kolam renang dan flying fox. Stafnya sangat ramah dan selalu siap membantu. Kami pasti akan kembali lagi ke sana!',
            'rating' => '5',
        ]);
        Testimoni::create([
            'nama_depan' => 'Lintang',
            'nama_belakang' => 'Anugrah',
            'email' => 'Lintang@gmail.com',
            'tanggal' => '2023-05-08',
            'testimoni_text' => 'Ritapark menyediakan banyak aktivitas menarik untuk seluruh anggota keluarga, dari kolam renang hingga taman bermain dan wahana air. Saya juga terkesan dengan kenyamanan dan kebersihan tempat ini. Pasti akan merekomendasikan ke teman-teman untuk berkunjung ke sini',
            'rating' => '4',
        ]);
        Testimoni::create([
            'nama_depan' => 'Abdi',
            'nama_belakang' => 'Fatih',
            'email' => 'Fatih@gmail.com',
            'tanggal' => '2023-05-09',
            'testimoni_text' => 'Saya sangat menikmati pengalaman saya di Ritapark. Ada banyak wahana menarik yang bisa dinikmati, termasuk flying fox dan taman bermain anak-anak. Saya juga terkesan dengan fasilitas yang tersedia seperti ruang ganti dan toilet yang bersih. Saya pasti akan kembali lagi ke sana',
            'rating' => '3',
        ]);
    }
}
