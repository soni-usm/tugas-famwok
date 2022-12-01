<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transaksi extends Controller
{ function  publik  ()


    {
    
    
    Skema :: buat ( 'table_transaksi' , function ( Blueprint  $table ) {
    
    
    $table -> bigIncrements ( 'id' );
    
    
    
    $tabel -> bilangan  ( 'id_buku' );
    
    
    $tabel -> tanggal ( 'tgl_pinjam' );
    
    
    $table -> tanggal ( 'tgl_kembali' );
    
    
    $tabel -> stempel ();
    
    
    });
    
    
    }
    //
}
