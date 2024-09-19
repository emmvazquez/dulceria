<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Usuario extends Controller{
   
   public function index(){
    return  view('head').
            
     view('usuario/login').
     view('footer');
   }

   public function acceder(){
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];

    $usuarioM = model('UsuarioM');

    $result = $usuarioM->valida($nombre,$pass);
    if(count($result)>0){
        $session = session();
        $newdata = [
            'nombre'  => $result[0]->nombre,
            'tipo'     => $result[0]->tipo,
            'logged_in' => true,
        ];
        
        $session->set($newdata);
        return redirect()->to(base_url('/marcas'));
    }
    else{
        return redirect()->to(base_url('/usuario'));
    }
   }


   public function salir(){
    $session = session();
    $session->destroy();
    $session->close();
   
    return redirect()->to(base_url('/usuario'));

   }
    
}