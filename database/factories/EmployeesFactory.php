<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Technology_position\Positions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'       => User::all()->random()->id,
            //'position_id'   => Positions::all()->random()->id,
            'address'       => fake()->address
        ];
    }
}
