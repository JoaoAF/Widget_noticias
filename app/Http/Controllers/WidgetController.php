<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class WidgetController extends Controller{

    public function Widget(){
        return view('widget');
    }

    public function montadorWidget(){

        $categoria_selecionada = Request::input('categoria');
        $xml = file_get_contents('http://blog.populares.com.br/list-categories/');
        $categorias = json_decode($xml);

            echo '<link href="css/style.css" rel="stylesheet">';
            echo '<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">';

    $contador = 1;
            echo "<div class='widget'>";
    foreach ($categorias->posts as $item) :
        if ($item->categoria_slug == $categoria_selecionada) :
            if($contador <= 3):
                 echo "<div class='widget-post'>
                            <a href='$item->link' target='_blank'>
                                <img class='destaque' src='$item->destaque' alt='imagem do post'>
                                <p class='title-widget'>$item->titulo</p>
                                <div class='icon'><img class='img-icon' src='img/icon.png'></div>
                            </a>
                          </div>";
            endif;
            $contador++;
        endif;
    endforeach;
            echo "</div>";
    return view('importWidget');
    }

     public function montadorUltimas(){

        $xml = file_get_contents('http://blog.populares.com.br/list-categories/');
        $categorias = json_decode($xml);

            echo '<link href="css/style.css" rel="stylesheet">';
            echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet">';

    $contador = 1;
            echo "<div class='widget'>";
    foreach ($categorias->posts as $item) :
            if($contador <= 3):
                echo "<div class='widget-post'>
                            <a href='$item->link' target='_blank'>
                                <img class='destaque' src='$item->destaque' alt='imagem do post'>
                                <p class='title-widget'>$item->titulo</p>
                                <div class='icon'><img class='img-icon' src='img/icon.png'></div>
                            </a>
                          </div>";
            endif;
            $contador++;
    endforeach;
            echo "</div>";
    return view('importWidgetUltimas');
    }
}