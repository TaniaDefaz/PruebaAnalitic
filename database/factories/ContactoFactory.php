<?php

namespace Database\Factories;

use App\Models\Contacto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactoFactory extends Factory
{
    protected $model = Contacto::class;

    public function definition()
    {
        return [
			'id_Contactos' => $this->faker->name,
			'Telefono' => $this->faker->name,
			'Redes_Sociales' => $this->faker->name,
			'Email' => $this->faker->name,
        ];
    }
}
