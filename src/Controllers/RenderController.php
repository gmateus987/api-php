<?php

namespace App\Controllers;

class RenderController
{
    public static function render(string $viewPath) 
    {
        ob_start();
        require_once VIEWS . $viewPath . '.php';
        $html = ob_get_clean();

        echo $html;
    }


}