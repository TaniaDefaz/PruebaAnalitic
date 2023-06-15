<?php

namespace Database\Factories;

use App\Models\Clientecurso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientecursoFactory extends Factory
{
    protected $model = Clientecurso::class;

    public function definition()
    {
        return [
			'id_ClienteCurso' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'Telefono' => $this->faker->name,
			'Direccion' => $this->faker->name,
			'Email' => $this->faker->name,
			'Fecha_nacimiento' => $this->faker->name,
			'Solicitud' => $this->faker->name,
        ];
    }
}
