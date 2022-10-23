<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // metodo mostrar pantalla principal
    public function index(){
        return view('cursos.index');
    }

    // metodo mostrar pantalla de crear
    public function create(){
        return view('cursos.create');
    }

    // metodo mostrar algo en particular, en este caso un curso
    public function show($curso){

        /* 
        Si el nombre de la variable que se recibe es la misma que la que se envia:
        compact('curso'); // devuelve el array ['curso' => $curso]
        */
        return view('cursos.show',compact('curso'));


        /* 
        Si queremos pasar variable diferente a la que se recibe:
        en la vista habra que usar la variable "a"
        return view('cursos.show',['a' => $curso]); */
    }
}
