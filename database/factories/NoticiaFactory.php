<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoticiaFactory extends Factory
{
    protected $model = Noticia::class;

    public function definition()
    {
        return [
			'id_Noticias' => $this->faker->name,
			'Novedades' => $this->faker->name,
			'Empleo_red_profesional' => $this->faker->name,
			'Figback_testimonios' => $this->faker->name,
			'Opciones' => $this->faker->name,
        ];
    }
}
