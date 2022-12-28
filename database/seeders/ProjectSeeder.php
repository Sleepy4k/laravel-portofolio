<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Project::count() == 0) {
            $facilities = Project::factory(10)->make();

            Project::insert($facilities->toArray());
        }
    }
}
