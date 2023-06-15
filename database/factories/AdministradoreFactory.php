<?php

namespace Database\Factories;

use App\Models\Administradore;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdministradoreFactory extends Factory
{
    protected $model = Administradore::class;

    public function definition()
    {
        return [
			'id_Administrador' => $this->faker->name,
			'nombreAdm' => $this->faker->name,
        ];
    }
}
