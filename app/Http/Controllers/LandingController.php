<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;

class LandingController extends Controller
{
    function show(){

    	return view('LandingPage');
    }

    function store(Request $request){

    	 $nombre=$request->input("nombre");
    	 $email=$request->input("email");
    	 $comentario=$request->input("comentario");

    	 Formulario::insert([

    	 	["nombre"=>$nombre, "email"=>$email,"comentario"=>$comentario]

    	 ]);

    	 return view('DatosEnviados');



    }
}
