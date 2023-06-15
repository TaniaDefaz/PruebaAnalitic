<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitadore extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'capacitadores';

    protected $fillable = ['id_Capacitador','Nombre','Telefono','Direccion','Email','Fecha_nacimiento','Solicitud'];
	
}
