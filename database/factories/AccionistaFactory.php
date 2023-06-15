<?php

namespace Database\Factories;

use App\Models\Accionista;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AccionistaFactory extends Factory
{
    protected $model = Accionista::class;

    public function definition()
    {
        return [
			'id_Accionistas' => $this->faker->name,
			'Rol' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'Titulo' => $this->faker->name,
			'Experiencia' => $this->faker->name,
			'Descripcion' => $this->faker->name,
        ];
    }
}
