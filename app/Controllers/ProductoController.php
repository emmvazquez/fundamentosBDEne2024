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

    public function showCards(){
        $ProductoM = model('ProductosModel');
        $data['productos'] = $ProductoM->findAll();
        return  view('header').
                view('cardsProductos',$data);
    }

    public function detalle($IdProducto){
       
        $ProductoM = model('ProductosModel');
        $data['producto'] = $ProductoM->getDetalle($IdProducto);
        return  view('header').
                view('detalleProducto',$data);
    }
}