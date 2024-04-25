<?php

namespace App\Controllers;

class AnalisisController extends BaseController
{
    public function index(): string
    {
        $AnalisisModel = model('AnalisisModel');
        $data['analisis'] = $AnalisisModel->findAll();
        return view('analisis_view', $data);
    }

    public function byPrecio(){
        $AnalisisModel = model('AnalisisModel');
        $data['analisis'] = $AnalisisModel->getByPrecio();
        return view('precio_view',$data);
    }
}