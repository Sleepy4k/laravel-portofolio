<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
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
            'title' => 'Tentang Saya',
            'name' => 'Apri Pandu Wicaksono',
            'bday' => '17',
            'phone' => '+6281318977078',
            'email' => 'Pandu300478@gmail.com',
            'bio' => 'Saya adalah developer website, yang memahami bahasa php, vue, js, lua',
            'image' => '',
            'cv' => '',
            'created_at' => $now,
            'updated_at' => $now
        ];

        About::insert($data);
    }
}
