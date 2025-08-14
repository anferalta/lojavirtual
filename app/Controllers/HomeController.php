<?php

namespace app\Controllers;

use app\Core\View;
use app\Model\ProdutoModel as Produtos;
use app\Model\CategoriaModel as Categorias;

/**
 * Description of HomeController
 *
 * @author Administrador
 */

class HomeController 
{
    public function index():void
    {
        $categorias = Categorias::buscar();
        $produtos = Produtos::buscar();
                        
       View::render('site/home', [
           'title' => 'Página Index',
           'produtos' => $produtos,
           'categorias' => $categorias
        ]);
    }
}
