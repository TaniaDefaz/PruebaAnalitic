<?php

namespace Database\Factories;

use App\Models\Consultoresexterno;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConsultoresexternoFactory extends Factory
{
    protected $model = Consultoresexterno::class;

    public function definition()
    {
        return [
			'id_consultores' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'Titulo' => $this->faker->name,
			'Experiencia' => $this->faker->name,
			'Descripcion' => $this->faker->name,
        ];
    }
}
