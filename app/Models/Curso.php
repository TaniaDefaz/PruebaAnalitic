<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'cursos';

    protected $fillable = ['id_Cursos','Nombre_curso','Descripcion_curso','Duracion_curso','Fecha_curso','Fecha_Fin_curso','Instructor_curso','Lugar_curso','Precio_curso','CuposMaximos_curso','CuposDisponibles_curso'];
	
}
