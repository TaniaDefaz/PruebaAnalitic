<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administradore extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'administradores';

    protected $fillable = ['id_Administrador','nombreAdm'];
	
}
