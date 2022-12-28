<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Contact::count() == 0) {
            $facilities = Contact::factory(10)->make();

            Contact::insert($facilities->toArray());
        }
    }
}
