<?php

##
## 	Generato con: 
## 	php artisan make:controller "FrontendController" 
##

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller {

	public function getHome() {

		//return "Io sono la homepage";
		//return view("home");

		//return view("home2");
		
		return view("home2")
				->with('books', $this->getAllBooks() );

	}

	public function getBookDetail($id=-1) {

		//Accedo al Database e recupero le info sul libro con ID=xxx
		return view("homeDetail")
				->with('book', $this->getBookDetails($id) )
				->with('id', $id);
		//return "Io sono il dettaglio del libro " . $id;

	}

	private function getAllBooks(){
		//Recupera da DB tutti i libri
		$lista = [	'1' => 'Promessi Sposi',
					'23' => 'Decameron',
					'456' => 'Laravel la guida',
					'13' => 'L\'idiota',
					];
		return $lista;
	}

	private function getBookDetails($id){
		//Recupero le info del libro con ID=xxx

		$libro = [ "titolo" => "I promessi sposi",
					"autore" => "Alessandro Manzoni",
					"genere" => "Letteratura Italiana"
				];
		return $libro;
	}

}




