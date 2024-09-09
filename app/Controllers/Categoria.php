<?php 
namespace App\Controllers;


class Categoria extends BaseController{

    //mostrar la información de las categorías
    public function index():string{
        $security = service('security');
        $categoriaM = model('CategoriaM');
        $data['categorias'] = $categoriaM->findAll();

        return view('head').
                view('menu').
                view('categoria/show', $data).
                view('footer');

    }

    public function delete($idCategoria){
        $categoriaM = model('CategoriaM');
        $categoriaM->delete($idCategoria);

        return redirect()->to(base_url().'categoria');
    }


}