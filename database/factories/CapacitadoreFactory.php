<?php

namespace Database\Factories;

use App\Models\Capacitadore;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CapacitadoreFactory extends Factory
{
    protected $model = Capacitadore::class;

    public function definition()
    {
        return [
			'id_Capacitador' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'Telefono' => $this->faker->name,
			'Direccion' => $this->faker->name,
			'Email' => $this->faker->name,
			'Fecha_nacimiento' => $this->faker->name,
			'Solicitud' => $this->faker->name,
        ];
    }
}
