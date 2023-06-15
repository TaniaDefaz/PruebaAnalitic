<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accionista extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'accionistas';

    protected $fillable = ['id_Accionistas','Rol','Nombre','Titulo','Experiencia','Descripcion'];
	
}
