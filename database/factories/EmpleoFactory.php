<?php

namespace Database\Factories;

use App\Models\Empleo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpleoFactory extends Factory
{
    protected $model = Empleo::class;

    public function definition()
    {
        return [
			'id_Empleo' => $this->faker->name,
			'Descripcion' => $this->faker->name,
			'Cantidad' => $this->faker->name,
			'Horario' => $this->faker->name,
        ];
    }
}
