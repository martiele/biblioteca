<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
//Esempi di rotte "anonime"
Route::get('/', function () {
    return "Home page del mio sito Laravel";
});

Route::get('/posts', function () {
		return "Elenco degli articoli della mia libreria";
});


//Esempio di rotta con "nome"
Route::get('/libri', [ 'as' => 'libriElenco', function () { 
		//nomino la rotta 'libriElenco'
       return "Elenco di libri";
}]);

//redirect verso /libri
Route::get('/elencolibri', function () {
		//richiamo la rotta usando il nome
       return redirect( route('libriElenco') ); 
       //effetto un redirect alla pagina libri Elenco
});
*/

Route::get('/', 
	[ 	'as' => 'home', 
		'uses' => 'FrontendController@getHome'
	]);

Route::get('/libro/{id?}', 
	[ 	'as' => 'bookDetail', 
		'uses' => 'FrontendController@getBookDetail'
	]);



