<?php

namespace App\Controllers;

class MarcaController extends BaseController
{
    public function index()
    {
       
    }

    public function show(){
        $MarcaM = model('MarcaModel');
        $data['marcas'] = $MarcaM->findAll();
        return 
            view('header').
            view('listaMarcas',$data);
    }
}