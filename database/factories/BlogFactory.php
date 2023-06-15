<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition()
    {
        return [
			'id_Blog' => $this->faker->name,
			'Titulo' => $this->faker->name,
			'Contenido' => $this->faker->name,
			'Fecha_publicacion' => $this->faker->name,
			'Autor' => $this->faker->name,
        ];
    }
}
