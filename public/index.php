<?php
define('VIEW_PATH', dirname(__DIR__).'\\App\\Views');
define('MODEL_PATH', dirname(__DIR__).'\\App\\Models');

require('../Core/autoload.php');
class MainController{
    private $controller;
    private $action;
    private $param;
    public function __construct($url){
       
        $query = explode('/', $url);

        //Basic Url routing

        if(isset($query[2])){
            $this->controller = $query[0];
            $this->action = $query[1];
            $this->param = $query[2];
        }else if(isset($query[1])){
            $this->controller = $query[0];
            $this->action = $query[1];
        }else{
            $this->controller = 'Crud';
            $this->action = 'home';
        }
    }

    public function render(){
        //require_once(dirname(__DIR__).'/App/Controllers/'.$this->controller.'.php');
        $this->controller = "App\\Controllers\\".$this->controller;
        $con = new $this->controller;

        if(isset($this->param)){
            $con->{$this->action}($this->param);
        }else if(isset($this->action)){
            $con->{$this->action}();
        }
    }
}

$mainController = new MainController($_SERVER['QUERY_STRING']);
$mainController->render();

?>