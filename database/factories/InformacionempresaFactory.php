<?php

namespace Database\Factories;

use App\Models\Informacionempresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InformacionempresaFactory extends Factory
{
    protected $model = Informacionempresa::class;

    public function definition()
    {
        return [
			'id_InfEmpresa' => $this->faker->name,
			'Descripcion' => $this->faker->name,
			'Mision' => $this->faker->name,
			'Vision' => $this->faker->name,
			'CulturaOrganizacional' => $this->faker->name,
        ];
    }
}
