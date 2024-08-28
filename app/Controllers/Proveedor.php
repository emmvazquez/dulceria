<?php

namespace App\Controllers;

class Proveedor extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }


    public function add():string
    {
        $estadoM = model('EstadoM');
        $data['estados'] = $estadoM->findAll();
        return 
         view('head').
          view('menu').
        view('proveedor/add',$data).
        view('footer');
    }
}
