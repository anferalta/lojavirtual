<?php

namespace app\Controllers;

use app\Core\View;

/**
 * Description of SobreController
 *
 * @author Administrador
 */

class SobreController
{
    public function index() : void
    {
        View::render('site/sobre', [
            'title' => 'Página sobre'
        ]);  
    }
}
