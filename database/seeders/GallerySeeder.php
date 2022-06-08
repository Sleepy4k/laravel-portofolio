<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
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
            'title' => 'Module',
            'desc' => 'Simple Website',
            'link' => '#',
            'image' => '',
            'created_at' => $now,
            'updated_at' => $now
        ];

        Gallery::insert($data);
    }
}
