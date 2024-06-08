<?php

namespace Database\Factories;

use App\Models\Party;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartyFactory extends Factory
{
    protected $model = Party::class;

    public function definition()
    {
        return [
            'img_url' => $this->faker->imageUrl,
            'date_debut' => $this->faker->date,
            'date_fin' => $this->faker->date,
            'description' => $this->faker->text,
            'name' => $this->faker->company,
            'candidate_id' => Candidate::factory(),
        ];
    }
}

