<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            "id" => $this->faker->unique()->uuid(),
            "title" => $this->faker->title(),
            "body" => $this->faker->paragraph,
            "send_date" => $this->faker->date(),
            "is_published" => $this->faker->numberBetween(0, 1),
            "heart_count" => $this->faker->numerify()
        ];
    }
}
