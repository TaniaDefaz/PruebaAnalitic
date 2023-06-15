<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServicioFactory extends Factory
{
    protected $model = Servicio::class;

    public function definition()
    {
        return [
			'id_Servicios' => $this->faker->name,
			'NombreServicio' => $this->faker->name,
			'DescripcionServicio' => $this->faker->name,
        ];
    }
}
