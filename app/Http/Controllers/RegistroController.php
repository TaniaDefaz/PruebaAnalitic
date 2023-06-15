<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function registroCliente()
{
    return view('vistas.cliente');
}

public function registroEmpresa()
{
    return view('vistas.empresa');
}

public function registroAliado()
{
    return view('vistas.aliado');
}
public function registroContactos()
{
    return view('vistas.contactos');
}
/*public function storeCliente()
{
    return view('vistas.aliado');
}*/
}
