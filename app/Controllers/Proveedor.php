<?php

namespace App\Controllers;

class Proveedor extends BaseController
{
    public function index(): string
    {
        $proveedorM = model('ProveedorM');

        $data['proveedores'] = $proveedorM->getProveedores();
        return 
         view('head').
          view('menu').
        view('proveedor/show',$data).
        view('footer');
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

    public function insert(){
        $ProveedorM = model('ProveedorM');
        
        if(isset($_POST['Guardar'])){
            $proveedor = [
                'nombre' => $_POST['nombre'],
                'calle' => $_POST['calle'],
                'numero' => $_POST['numero'],
                'cp' => $_POST['cp'],
                'idEstado' => $_POST['idEstado']
            ];
            $ProveedorM->insert($proveedor);
            return redirect()->to(base_url('/proveedor'));
        }


        return 
         view('head').
          view('menu').
        view('proveedor/show',$data).
        view('footer');
    }

}
