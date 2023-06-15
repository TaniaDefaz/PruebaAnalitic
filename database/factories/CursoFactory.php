<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
			'id_Cursos' => $this->faker->name,
			'Nombre_curso' => $this->faker->name,
			'Descripcion_curso' => $this->faker->name,
			'Duracion_curso' => $this->faker->name,
			'Fecha_curso' => $this->faker->name,
			'Fecha_Fin_curso' => $this->faker->name,
			'Instructor_curso' => $this->faker->name,
			'Lugar_curso' => $this->faker->name,
			'Precio_curso' => $this->faker->name,
			'CuposMaximos_curso' => $this->faker->name,
			'CuposDisponibles_curso' => $this->faker->name,
        ];
    }
}
