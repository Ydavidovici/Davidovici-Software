<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoardFactory extends Factory
{
    protected $model = Board::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'project_id' => Project::factory(),
        ];
    }
}
