<?php

namespace App\Controllers;

class Marcas extends BaseController
{
    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];

    
    
    public function valida(){
        $session = session();
        $session->has('logged_in');
        
            if($session->has('logged_in')){
                return redirect()->to(base_url('/usuario'));
                
            }
        
        print_r($_SESSION);
    }

    public function index()
    {  
        $session = session();
        if($session->get('logged_in')!=true || $session->get('tipo')!=0){
            return redirect()->to(base_url('/usuario'));
        }
        $data1['nombre'] = $session->get('nombre');

        $marcaM = model('MarcaM');
        $data['marcas'] = $marcaM->findAll();
        return view('head') .
                view('menu',$data1) . 
                view('marcas/show', $data) .
                view('footer');
    }

    public function add(){   //get
        return view('head') .
        view('menu') . 
        view('marcas/add') .
        view('footer');
    }

    public function edit($idmarca){   //get
        $idmarca = $data['idmarca'] = $idmarca;
        $marcaM = model('MarcaM');
        $data['marca'] = $marcaM->where('idmarca',$idmarca)->findAll();
        return view('head') .
        view('menu') . 
        view('marcas/edit',$data) .
        view('footer');

       
    }

    public function update(){
        $marcaM = model('MarcaM');
        $idmarca = $_POST['idmarca'];
           
               $data = [
                   'marca' => $_POST['marca'],
                   
               ];
           
               $marcaM->set($data)->where('idmarca',$idmarca)->update();

               
               return redirect()->to(base_url('/marcas'));
   
           
    }


    public function insert(){ //post
        if (! $this->request->is('post')) {
                $this->index();
        }
        
        $rules = [
            'marca' => 'required'
        ];

        $data = [
          "marca" => $_POST['marca']
        ] ;

        // Valida los datos
            if (! $this->validate($rules)) {
                // Si la validación falla, vuelve a cargar la vista con los errores
                return     
                view('head') .
                view('menu') . 
                view('marcas/add',[
                    'validation' => $this->validator
                ]) .
                view('footer'); 
            }
            else{
                $marcaM = model('MarcaM');
                $marcaM->insert($data);
                return redirect()->to(base_url('/marcas'));
            }

        
    }


    public function delete($idmarca){
       
        $marcaM = model('MarcaM');
        $marcaM->delete($idmarca);
        return redirect()->to(base_url('/marcas'));
    }
}