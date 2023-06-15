<?php

namespace Database\Factories;

use App\Models\Responsabilidadsociale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ResponsabilidadsocialeFactory extends Factory
{
    protected $model = Responsabilidadsociale::class;

    public function definition()
    {
        return [
			'id_responsabilidad_social' => $this->faker->name,
			'Servicio' => $this->faker->name,
			'CursoCapacitacion' => $this->faker->name,
			'FechaInicio_curso' => $this->faker->name,
			'FechaFin_curso' => $this->faker->name,
			'Fecha_nacimiento' => $this->faker->name,
			'Costo' => $this->faker->name,
			'Campo' => $this->faker->name,
        ];
    }
}
