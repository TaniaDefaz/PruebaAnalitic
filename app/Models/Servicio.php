<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'servicios';

    protected $fillable = ['id_Servicios','NombreServicio','DescripcionServicio'];
	
}
