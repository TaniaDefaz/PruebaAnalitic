<?php

namespace Database\Factories;

use App\Models\Aliadoempresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AliadoempresaFactory extends Factory
{
    protected $model = Aliadoempresa::class;

    public function definition()
    {
        return [
			'id_aliadoEmpresa' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'Titulo' => $this->faker->name,
			'Rol' => $this->faker->name,
			'Experiencia' => $this->faker->name,
			'Funciones' => $this->faker->name,
        ];
    }
}
