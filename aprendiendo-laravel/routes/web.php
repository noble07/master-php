<?php

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
    //return view('welcome');
    echo '<h1>Hola Mundo!!</h1>';
});

Route::get('/peliculas/{pagina?}', 'PeliculaController@index');

Route::get('/detalle/{year?}', [
    'middleware' => 'testyear',//As´se le asigna un Middleware para filtrar la petición Http
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula',//Así se le da un nombre a la ruta
]);

//Esta es la ruta de la acción que redirige a otra
Route::get('/redirigir', 'PeliculaController@redirigir');

Route::get('/formulario', 'PeliculaController@formulario');

Route::post('/recibir', 'PeliculaController@recibir');

//Así se crea un ruta de un Controlador resource el cual ya tiene unas rutas preestablecidas (CRUD)
Route::resource('/usuario', 'UsuarioController');

// Rutas de fruta

Route::group(['prefix' => 'frutas'], function(){
    Route::get('/index', 'FrutaController@index');
    Route::get('/detail/{id}', 'FrutaController@detail');
    Route::get('/crear', 'FrutaController@create');
    Route::post('/save', 'FrutaController@save');
    Route::get('/delete/{id}', 'FrutaController@delete');
    Route::get('/editar/{id}', 'FrutaController@edit');
    Route::post('/update', 'FrutaController@update');
});

/*
GET: Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos
*/

/*Route::get('/mostrar-fecha', function (){
    // En una ruta solo debe haber logica y/o cargar una vista

    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(
        'title' => $titulo
    ));
});*/

/*Para mandar un parametro por la URL seria /{PARAM} y recibirlo en la function para que sea obligatorio
, si lo queremos opcional seria /{PARAM?} y definir un valor por defecto en la variable de la function.*/

/* Para hacer una condicion para acceder en la ruta se coloca el metodo ->where al final de la ruta y le
podemos pasar un array con diversas condiciones dichas condiciones serian 'INDEX' -> 'REGEX'*/

/*Route::get('/pelicula/{titulo}/{year?}', function($titulo = 'No hay una pelicula seleccionada', $year = 2019){

    return view('pelicula', array(
        'title' => $titulo,
        'year' => $year
    ));

})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function(){
    $titulo = 'Listado de peliculas';
    $listado = array('Batman', 'Spiderman', 'Gran torino');

    //Si la vista esta dentro de una caperta se pescifica así: view('nombreCaperta.vista')
    return view('peliculas.listado')
    ->with('title', $titulo)
    ->with('list', $listado);//Tambien se puede pasar variables con el metodo with del bojeto view
});

Route::get('/pagina-generica', function(){
    return view('pagina');
});*/