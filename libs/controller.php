<?php

class Controller
{
    function __construct()
    {
        $this->view = new View(); //objeto vista
        //function render
 //       echo "<p>Controlador Base</p>";

        
    }

    function loadModel($model){
        $url='models/'.$model.'model.php';
        if(file_exits($url)){
            require $url;
            $modelName=$model.'Model';
            $this->model=new $modelName();
        }
    }
}

?>