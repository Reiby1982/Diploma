<?php

namespace Kushin\Php_project\Controllers;

use Web\Engine\Controller;

class PhotosController extends Controller
{
    private $template = 'template_view.php';
   
    function photosAction()
    {
        $title = 'Фото';
        $view_filename = 'photos_view.php';
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }

}
 