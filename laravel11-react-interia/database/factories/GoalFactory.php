<?php

namespace Database\Factories;

use App\Models\Goal;
use App\Models\Party;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoalFactory extends Factory
{
    protected $model = Goal::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['pending', 'completed', 'in_progress']),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'description' => $this->faker->text,
            'party_id' => Party::factory(),
        ];
    }
}
