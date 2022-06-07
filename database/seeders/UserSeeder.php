<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
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
            'name' => 'admin',
            'password' => bcrypt('admin123'),
            'email' => 'admin@admin.com',
            'created_at' => $now,
            'updated_at' => $now
        ];

        User::insert($data);
    }
}