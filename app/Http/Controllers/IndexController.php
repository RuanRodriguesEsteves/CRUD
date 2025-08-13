<?php

namespace App\Http\Controllers;

class IndexController extends Controller {

    //Função para iniciar a tela principal da aplicação
    public function index() {
        return view('index');
    }
    
}

?>