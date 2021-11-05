<?php
class Controller
{
    function __construct()
    {
        //create new view
        $this->view = new View();
    }

    public function loadModel($modelName)
    {

        //all models which are stored direclty in the model directory
        $path = 'models/' . $modelName . '_Model.php';

        if (file_exists($path)) {

            require $path;
            $className = $modelName . '_Model';
            $this->model = new $className();
        }
    }

    public function loadModel2($modelName, $modelName2)
    {
        $path = 'models/' . $modelName . '/ ' . $modelName2 . '_Model.php';

        if (file_exists($path)) {

            require $path;
            $className = $modelName2 . '_Model';
            $this->model = new $className();
        }
    }

    // to run three length path

    // public function loadModel3($modelName, $modelName2, $modelName3)
    // {
    //     $path = 'models/' . $modelName . '/ ' . $modelName2 . '/ ' . $modelName3 . '_Model.php';

    //     if(file_exists($path)){

    //         require $path;
    //         $className = $modelName3. '_Model';
    //         $this->model = new $className();
    //     }
    // }
}
