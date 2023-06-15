<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'noticias';

    protected $fillable = ['id_Noticias','Novedades','Empleo_red_profesional','Figback_testimonios','Opciones'];
	
}
