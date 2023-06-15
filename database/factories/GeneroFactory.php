<?php

namespace Database\Factories;

use App\Models\Genero;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GeneroFactory extends Factory
{
    protected $model = Genero::class;

    public function definition()
    {
        return [
			'id_Genero' => $this->faker->name,
			'Genero' => $this->faker->name,
			'Sexo' => $this->faker->name,
        ];
    }
}
