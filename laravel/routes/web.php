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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get(
    '/dentro',
    function ()
    {
        $user = Auth::user();
        if ($user){
            if ($user->hasRole('admin')){
                echo "Es administrador";
            }else{
                echo "Es plebe";
            }
        }else{
            echo "Non e un carallo";
        }
    }
);

Route::get(
    '/dentro2',
    function ()
    {
        $user = Auth::user();
        if ($user){
            if ($user->can('view_teachers')){
                echo "Cotilleando a los profes";
            }elseif ($user->can('view_students')){
                echo "Cotilleando a los alumnos";
            }
        }else{
            echo "Non e un carallo";
        }
    }
);
