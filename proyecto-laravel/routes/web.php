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
//use App\Image;

Route::get('/', function () {

    /*$images = Image::all();
    foreach($images as $image){
        echo $image->image_path.'<br>';
        echo $image->description.'<br>';
        echo $image->user->name.' '.$image->user->surname.'<br>';

        if (count($image->comments) >= 1) {
            echo '<h4>Comentarios</h4><br>';

            foreach ($image->comments as $comment) {
                echo $comment->user->name.' '.$comment->user->surname.': '.$comment->content.'<br>';
            }
        }

        echo 'Likes: '.count($image->likes);

        echo '<hr>';
    }
    die();*/

    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/configuracion', 'UserController@config')->name('config');

Route::post('/user/update', 'UserController@update')->name('user.update');

Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');