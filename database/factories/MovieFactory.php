<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'movie_name' => $this->faker->randomElement([
                'Citizen Kane',
                'Vertigo',
                '2001: A Space Odyssey',
                'The Rules of the Game',
                'Seven Samurai',
                'The Godfather',
                'Apocalypse Now',
                'Tokyo Story',
                'Taxi Driver',
                'Casablanca',
                'Pulp Fiction',
                '8 1/2',
                'Chinatown',
                'Breathless',
                'Lawrence of Arabia',
                'The Godfather Part II',
                'Singin in the Rain',
                'Sunrise',
                'The Searchers',
                'Battleship Potemkin',
                'Psycho',
                'Bicycle Thieves',
                'Rashomon',
                'Greed',
                'Schindlers List',
                'The 400 Blows',
            ]),
            'description' => $this->faker->word(),
            'director' => $this->faker->name(),
            'counrty' => $this->faker->country(),
            'rating' => $this->faker->numberBetween(1,5),
            'status' => $this->faker->randomElement(['Good','Very Good', 'Excellent', 'Bad', 'Very Bad']),
        ];
    }
}
