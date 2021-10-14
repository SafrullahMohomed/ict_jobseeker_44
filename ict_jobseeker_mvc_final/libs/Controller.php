<?php
class Controller{
    function __construct()
    {
        //create new view
       $this->view = new View();
    }
 
    public  function loadModel($modelName){

        //all models are store in this path
        $path ='models/'.$modelName. '_Model.php'; 

        if(file_exists($path)){
            require $path;
            $className =$modelName . '_Model';
            $this->model=new $className();
        }
    }
} 



?>