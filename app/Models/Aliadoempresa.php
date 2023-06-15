<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aliadoempresa extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'aliadoempresas';

    protected $fillable = ['id_aliadoEmpresa','Nombre','Titulo','Rol','Experiencia','Funciones'];
	
}
