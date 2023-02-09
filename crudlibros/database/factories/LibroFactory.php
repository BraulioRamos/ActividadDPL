<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LibroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *s
     * @var string
     */
    protected $model = Libro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			'isbn' => Str::random(10),
            'titulo' => $this->faker->name,
            'autores' => $this->faker->name,
            'genero' => $this->faker->randomElement(['Terror', 'Comedia','Ciencia Ficción', 'Distopías', 'Historia']),
            'npaginas' => $this->faker->numberBetween(300, 1000),
			'precio' => $this->faker->randomFloat(2,7,100),
            'imagen' => 'uploads/' . $this->faker->numberBetween(1, 5) . '.jpg'
        ];
    }
}