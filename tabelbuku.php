<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugasfemwok extends Controller

{function publik  (
)

    {
    
    
    Skema :: buat ( 'table_buku' , function ( Blueprint  $table ) {
    
    
    $table -> bigIncrements ( 'id_buku' );
    
    
    $tabel -> string ( 'judul_buku' , 40 );
    
    
    $tabel -> string ( 'deskripsi' , 100 );
    
    
    $table -> integer ( 'kategori' );
    
    
    $tabel -> string ( 'cover_img' , 50 );
    
    
    $tabel -> stempel  ();
    
    
    });
    
    
    }
    
    //
}
