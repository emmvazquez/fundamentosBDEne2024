<?php

namespace App\Controllers;

class ProductoController extends BaseController
{
    public function index()
    {
       
    }

    public function show(){
        $ProductoM = model('ProductosModel');
        $data['productos'] = $ProductoM->findAll();
        return  view('header').
        view('listaProductos',$data);
    }
}