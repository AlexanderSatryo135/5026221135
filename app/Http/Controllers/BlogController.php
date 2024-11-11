<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function home(){

    	return ('home');

    }

    public function tentang(){

    	return view('tentang');

    }

     public function kontak(){
        return view('kontak');
     }
}
