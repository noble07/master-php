<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina = 1){
        $titulo = 'Listado de mis peliculas';

        return view('pelicula.index', array(
            'title' => $titulo,
            'page' => $pagina
        ));
    }

    public function detalle($year = null){
        return view('pelicula.detalle');
    }

    //Esta acción redirige a otra mediante el metodo de laravel redirect()
    public function redirigir(){
        return redirect()->action('PeliculaController@detalle');
        //Tambien se puede usar el metodo redirect() o el metodo route()
        //para redirigir a una URL especifica

        //Ejem: redirect('/peliculas'); || redirect()->route('detalle.pelicula');
    }

    public function formulario(){
        return view('pelicula.formulario');
    }

    public function recibir(Request $request){
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        return "El nombre es: $nombre y el email es: $email";
    }
}
