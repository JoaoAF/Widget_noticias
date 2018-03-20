<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class PreviewController extends Controller{

    public function categoriaDiversos(){
        return view('diversos');
    }

    public function categoriaEmpregos(){
        return view('empregos');
    }

    public function categoriaEspeciais(){
        return view('especiais');
    }

    public function categoriaImoveis(){
        return view('imoveis');
    }

    public function categoriaPopnews(){
        return view('popnews');
    }

    public function categoriaPopulares(){
        return view('populares');
    }

    public function categoriaVeiculos(){
        return view('veiculos');
    }
}