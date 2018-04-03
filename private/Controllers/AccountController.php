<?php

namespace Kushin\Php_project\Controllers;

use Web\Engine\Controller;

class AccountController extends Controller
{
    private $template = 'template_view.php';
   
    function registrAction()
    {
        if(isset($_POST['user_data'])) {
            return $this->generateAjaxRespons('registrAction');
        } else {
            $title = 'Регистрация';
            $view_filename = 'registr_view.php';
            return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
        }    
    }


}
        
             
                  
                       
                            
                                      