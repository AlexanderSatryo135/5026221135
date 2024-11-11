<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        return"<h1>Halo ini adalah method index, dalam controller</h1>";
    }

    public function blog(){
        return view('blog');
    }

    public function biodata(){
        $nama = "Alexander Satryo Pinandhito Yudho Pratomo";
        $umur = 20 ;
        $hasil = 20 + 18 ;
        $matkul = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama' => $nama, 'umur' => $umur, 'hasil' => $hasil, 'matkul' => $matkul]);
    }
}
