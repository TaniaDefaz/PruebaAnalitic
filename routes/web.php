<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(RegistroController::class)->group(function()
{
    Route::get('cliente',"registroCliente");
    Route::get('empresa',"registroEmpresa");
    Route::get('aliado',"registroAliado");
    Route::get('contacto',"registroContactos");
   /* Route::post('input1',"storeCliente");*/

}
);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route Hooks - Do not delete//
	Route::view('servicios', 'livewire.servicios.index');
	Route::view('responsabilidadsociales', 'livewire.responsabilidadsociales.index');
	Route::view('postulantes', 'livewire.postulantes.index');
	Route::view('noticias', 'livewire.noticias.index');
	Route::view('informacionempresas', 'livewire.informacionempresas.index');
	Route::view('generos', 'livewire.generos.index');
	Route::view('eventos', 'livewire.eventos.index');
	Route::view('empleos', 'livewire.empleos.index');
	Route::view('cursos', 'livewire.cursos.index');
	Route::view('contactos', 'livewire.contactos.index');
	Route::view('consultoresexternos', 'livewire.consultoresexternos.index');
	Route::view('clientecursos', 'livewire.clientecursos.index');
	Route::view('capacitadores', 'livewire.capacitadores.index');
	Route::view('blogs', 'livewire.blogs.index');
	Route::view('aliadoempresas', 'livewire.aliadoempresas.index');
	Route::view('administradores', 'livewire.administradores.index');
	Route::view('accionistas', 'livewire.accionistas.index');