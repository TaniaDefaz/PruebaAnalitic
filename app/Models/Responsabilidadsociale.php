<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsabilidadsociale extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'responsabilidadsociales';

    protected $fillable = ['id_responsabilidad_social','Servicio','CursoCapacitacion','FechaInicio_curso','FechaFin_curso','Fecha_nacimiento','Costo','Campo'];
	
}
