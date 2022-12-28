<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'zooane',
            'email' => 'zooane@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password', // password
            'remember_token' => Str::random(10)
        ];
    }
}
