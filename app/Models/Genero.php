<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'generos';

    protected $fillable = ['id_Genero','Genero','Sexo'];
	
}
