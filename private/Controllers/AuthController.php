<?php

namespace Kushin\Php_project\Controllers;

use Web\Engine\Controller;

class AuthController extends Controller
{
    private $template = 'template_view.php';
   
    function autorithAction()
    {
        $title = 'Авторизация';
        $view_filename = 'avtorith_view.php';
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }

}
 