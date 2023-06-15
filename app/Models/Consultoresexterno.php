<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultoresexterno extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'consultoresexternos';

    protected $fillable = ['id_consultores','Nombre','Titulo','Experiencia','Descripcion'];
	
}
