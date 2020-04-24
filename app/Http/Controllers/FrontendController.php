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
		return "Io sono la homepage";
	}

	public function getBookDetail($id=13) {
		return "Io sono il dettaglio del libro " . $id;
	}

}
