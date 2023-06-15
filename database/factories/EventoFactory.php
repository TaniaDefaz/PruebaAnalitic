<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventoFactory extends Factory
{
    protected $model = Evento::class;

    public function definition()
    {
        return [
			'id_Eventos' => $this->faker->name,
			'Descripcion' => $this->faker->name,
			'Sitio' => $this->faker->name,
			'FechaEvento' => $this->faker->name,
			'Hora' => $this->faker->name,
        ];
    }
}
