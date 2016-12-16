<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nuevo_controlador extends Controller
{
    
	public function login ()
		{
			$placeholder_u = "Ingrese el usuario";
			$placeholder_p = "Ingrese su Contraseña";
			$data = ['usuario' => $placeholder_u, 'pass' => $placeholder_p];

			return view('login', $data );
		}

}
