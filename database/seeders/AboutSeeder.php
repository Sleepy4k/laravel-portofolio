<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (About::count() == 0) {
            $facilities = About::factory(1)->make();

            About::insert($facilities->toArray());
        }
    }
}
