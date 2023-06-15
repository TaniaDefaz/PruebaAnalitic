<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientecurso extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'clientecursos';

    protected $fillable = ['id_ClienteCurso','Nombre','Telefono','Direccion','Email','Fecha_nacimiento','Solicitud'];
	
}
