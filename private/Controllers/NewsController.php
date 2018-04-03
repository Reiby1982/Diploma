<?php

namespace Kushin\Php_project\Controllers;

use Web\Engine\Controller;

class NewsController extends Controller
{
    private $template = 'template_view.php';
   
    function newsAction()
    {
        $title = 'Новости';
        $view_filename = 'news_view.php';
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }

}
 