<?php
define('VIEW_PATH', __DIR__.'\\App\\Views');
define('MODEL_PATH', __DIR__.'\\App\\Models');
class MainController{
    private $controller;
    private $action;
    private $param;
    public function __construct($url){
       
        $query = explode('/', $url);

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
        require_once(__DIR__.'/App/Controllers/'.$this->controller.'.php');
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
</body>
</html>