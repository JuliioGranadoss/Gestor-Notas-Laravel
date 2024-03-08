<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idUsu' => \App\Models\User::factory(),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'date' => $this->faker->date,
            'image' => $this->faker->imageUrl,
        ];
    }
}
