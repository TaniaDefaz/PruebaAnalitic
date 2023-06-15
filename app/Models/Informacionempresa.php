<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacionempresa extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'informacionempresas';

    protected $fillable = ['id_InfEmpresa','Descripcion','Mision','Vision','CulturaOrganizacional'];
	
}
