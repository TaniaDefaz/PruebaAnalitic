<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'empleos';

    protected $fillable = ['id_Empleo','Descripcion','Cantidad','Horario'];
	
}
