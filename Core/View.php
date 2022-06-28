<?php
namespace Core;

use RuntimeException;

class View{

    public static function render($view, $args = []){
        extract($args, EXTR_SKIP);
        $file = VIEW_PATH.'\\'.$view.'.php';

        
        if(file_exists($file)){
            require_once($file);
        }else{
            echo "$view is not found in ".VIEW_PATH;
            throw new RuntimeException("$view is not found in" .VIEW_PATH);
        }
    }
}



?>