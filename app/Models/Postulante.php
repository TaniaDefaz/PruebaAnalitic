<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'postulantes';

    protected $fillable = ['id_Postulante','Nombre','Telefono','Direccion','Email','Fecha_nacimiento','Solicitud'];
	
}
