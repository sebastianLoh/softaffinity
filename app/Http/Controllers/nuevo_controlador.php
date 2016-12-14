<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nuevo_controlador extends Controller
{
    
	public function index ()
		{
			//return 'Cargando metodo index';
			return view('welcome');
		}

}
