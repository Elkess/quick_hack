<?php

namespace Database\Factories;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidateFactory extends Factory
{
    protected $model = Candidate::class;

    public function definition()
    {
        return [
            'ispresident' => $this->faker->boolean,
            'img_url' => $this->faker->imageUrl,
            'info' => $this->faker->text,
            'fullname' => $this->faker->name,
        ];
    }
}
