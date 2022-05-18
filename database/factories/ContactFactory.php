<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'phone' => $this->faker->numerify('###-###-####'),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'user_id' => Company::all()->random()->user_id,
            'company_id' => Company::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
