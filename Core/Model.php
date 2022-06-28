<?php
namespace Core;
class Model{
    
    public static function render($class, $method, $args = []){
        echo __DIR__;
        $return = '';
        $file = MODEL_PATH.'\\'.$class.'.php';
        if(file_exists($file)){
            require_once($file);
            $class = 'App\Models\\'.$class;
            if(class_exists($class)){
                $model = new $class();
                
                if(method_exists($model, $method)){
                    $return = call_user_func([$model, $method], $args);
                }else{
                    echo "Method $method not found in $class";
                }
            }else{
                echo "Model $class is not found";
            }
        }else{
            echo "File Not Found";
        }

        return $return;
    }
}


?>