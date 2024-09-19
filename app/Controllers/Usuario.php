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
    $session = session();

    $result = $usuarioM->valida($nombre,$pass);
    if(count($result)>0){
        
        $newdata = [
            'nombre'  => $result[0]->nombre,
            'tipo'     => $result[0]->tipo,
            'logged_in' => TRUE,
        ];
        
        $session->set($newdata);
        return redirect()->to(base_url('/marcas'));
    }
    else{
        $session->destroy();
        return redirect()->to(base_url('/usuario'));
    }
   }


   public function salir(){
    $array_items = ['nombre', 'tipo','logged_in'];
    $session = session();
    $session->remove($array_items);
   
    return redirect()->to(base_url('/usuario'));

   }
    
}