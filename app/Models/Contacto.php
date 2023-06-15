<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'contactos';

    protected $fillable = ['id_Contactos','Telefono','Redes_Sociales','Email'];
	
}
