<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::create([
            'nama' => 'Tiket Normal',
            'harga' => 200000,
            'deskripsi' => 'Tiket normal untuk masuk ke taman wahana',
        ]);
        Ticket::create([
            'nama' => 'Tiket Anak Kecil',
            'harga' => 50000,
            'deskripsi' => 'Tiket anak kecil mulai dari 100cm kebawah untuk masuk ke taman wahana',
        ]);
        Ticket::create([
            'nama' => 'Tiket VVIP',
            'harga' => 350000,
            'deskripsi' => 'Tiket VVIP untuk masuk ke taman wahana tanpa antri',
        ]);
    }
}
