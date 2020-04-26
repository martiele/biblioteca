<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyTable extends Model
{
	//Rinomino il nome della tabella del DB se non voglio usare il nome standard pluralizzato "my_tables"
	protected $table = 'my_table';
    //
}
