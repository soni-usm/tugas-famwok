<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class katagori extends Controller
{
    //
    public function naik  ()
{


Skema :: buat ( 'table_kategori' , function ( Blueprint  $table ) {


$table -> bigIncrements ( 'kategori' );


$tabel -> string ( 'deskripsi' );


$tabel -> stempel  ();


});


}
}
