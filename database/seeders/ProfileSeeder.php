<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Profile::factory()->create([
            'title' => 'Hummatech',
            'subtitle' => 'Perusahaan software terbaik se-jawatimur',
            'description' => 'Hummatech adalah perusahaan IT solution terbaik se jawa timur',
            'address' => 'Perum GPA, Kel. Ngijo, Karangploso, Kab. Malang, Jawa Timur',
            'email' => 'hummasoft@mail.com',
            'phone' => ' 0851-7677-7785',
            'image' => 'profile/Logo-Hummatech-Kotak.png',
        ]);
    }
}


// $table->string('title');
// $table->string('subtitle');
// $table->longText('description');
// $table->longText('address');
// $table->string('email');
// $table->char('phone');
// $table->string('image');
