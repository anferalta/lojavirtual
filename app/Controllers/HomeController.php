<?php

namespace app\Controllers;

use app\Core\View;

/**
 * Description of HomeController
 *
 * @author Administrador
 */

class HomeController 
{
    public function index() :void
    {
        View::render('site/home', []);
    }
}
