<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Candidate;
use App\Models\Party;
use App\Models\Goal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 users
        // User::factory(10)->create();

        // Create 5 candidates
        Candidate::factory(5)->create()->each(function ($candidate) {
            // For each candidate, create 1 to 3 parties
            $parties = Party::factory(rand(1, 3))->create(['candidate_id' => $candidate->id]);

            // For each party, create 3 to 5 goals
            foreach ($parties as $party) {
                Goal::factory(rand(3, 5))->create(['party_id' => $party->id]);
            }
        });
    }
}

