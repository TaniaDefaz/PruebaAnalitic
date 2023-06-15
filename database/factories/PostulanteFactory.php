<?php

namespace Database\Factories;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostulanteFactory extends Factory
{
    protected $model = Postulante::class;

    public function definition()
    {
        return [
			'id_Postulante' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'Telefono' => $this->faker->name,
			'Direccion' => $this->faker->name,
			'Email' => $this->faker->name,
			'Fecha_nacimiento' => $this->faker->name,
			'Solicitud' => $this->faker->name,
        ];
    }
}
