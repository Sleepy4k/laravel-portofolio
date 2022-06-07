<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("y/m/d H:i:s");
        $data = [
            'nama' => 'Pandu',
            'email' => 'Pandu300478@gmail.com',
            'pesan' => 'Halo Saya Apri Pandu Wicaksono, Saya menguasai bahasa pemrograman LUA, PHP, JAVASCRIPT, HTML, CSS. Framework yang biasa saya gunakan yaitu LARAVEL, VUE, CODE IGNITER',
            'created_at' => $now,
            'updated_at' => $now
        ];

        Contact::insert($data);
    }
}