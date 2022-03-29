
<?php

class App
{
    private $_url = null;
    private $_controller = null;
    private $_flag1 = null;

    function __construct()
    {
        $this->_getURL();
        //if url first parameter is empty then load default constructor
        if (empty($this->_url[0])) {
            $this->_loadDefaultController();
            return false;
        }
        // controller is load then load method
        if ($this->_loadController()) {

            $this->_loadControllerMethod();
        };
    }
    private function _getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;

        //if / in the right side then remove
        $url = rtrim($url, '/');

        // sanitize the special charactors of the URL
        $url = filter_var($url, FILTER_SANITIZE_URL);

        //put to array
        $this->_url = explode('/', $url);
    }

    //load default controller
    private function _loadDefaultController()
    {
        require 'controllers/Home.php';

        $this->_controller = new Home();

        $this->_controller->Home();
        return true;
    }


    private function _loadController()

    {
        // path for controller files directly inside the controller
        $file1 = 'controllers/' . $this->_url[0] . '.php';


        // path for controller files which is inside a directory
        if (isset($this->_url[1])) {
            #$this->_url[1] = null;
            $file2 = 'controllers/' . $this->_url[0] . '/' . $this->_url[1] . '.php';
        }

        // if (isset($this->_url[2])) {
        //     $file3 = 'controllers/' . $this->_url[0] . '/' . $this->_url[1] . '/' . $this->_url[2] . '.php';
        // }

        if (file_exists($file1)) {
            require $file1;

            $this->_controller = new $this->_url[0];
            //load model
            $this->_controller->loadModel($this->_url[0]);

            // $this->_controller->Home();
            return true;
        }
        if (file_exists($file2)) {


            require $file2;

            $this->_controller = new $this->_url[1];
            //raise a flag for switch case
            $this->_flag1 = 1;
            //load model
           
            $this->_controller->loadModel2($this->_url[0], $this->_url[1]);

            // $this->_controller->Home();
            return true;
        }
        // if (file_exists($file3)) {

        //     require $file3;

        //     $this->_controller = new $this->_url[2];

        //     // load model

        //     $this->_controller->loadModel3($this->_url[0], $this->_url[1], $this->_url[2]);

        //     return true;
        //     # code...
        // } 
        else //file not in controller
        {
            echo "Sorry, Page not found";
            return false;
        }
    }

    private function _loadControllerMethod()
    {
        $urlLength = count($this->_url);


        //url length=1 mean not given a method

        if ($urlLength > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                echo "Requested method not found!";
                exit;
            }
        }
        switch ($urlLength) {
            case 7:
                if($this->_flag1==1){
                   
                    $this->_controller->{$this->_url[2]}($this->_url[3],$this->_url[4],$this->_url[5],$this->_url[6]);
                     break;
                 }
                else{
                    $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5], $this->_url[6]);
                break;
                }

            case 6:
                if($this->_flag1==1){
                   
                    $this->_controller->{$this->_url[2]}($this->_url[3],$this->_url[4],$this->_url[5]);
                     break;
                 }
                else{
                    $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5]);
                break;
                }
                

            case 5:
                if($this->_flag1==1){
                   
                    $this->_controller->{$this->_url[2]}($this->_url[3],$this->_url[4]);
                     break;
                 }
                 else{
                    $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                    break;
                 }
                

            case 4:
                if($this->_flag1==1){
                   
                    $this->_controller->{$this->_url[2]}($this->_url[3]);
                     break;
                 }
                 else{
                    $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                    break;
                 }
                

            case 3:
                //file is in inside of a folder and call to method
                if($this->_flag1==1){
                   
                   $this->_controller->{$this->_url[2]}();
                    break;
                }
                else{
                    $this->_controller->{$this->_url[1]}($this->_url[2]);
                    break;
                 }
                

            case 2:

                $this->_controller->{$this->_url[1]}();
                # $this->_controller -> {$this->_url[0]}($this->_url[1]); 
                break;

            case 1:
                $this->_controller->{$this->_url[0]}();

                // test->test()
                //  $this->_controller -> {$this->_url[0]}($this->_url[1]);

                break;

            default:
                $this->_controller->Home();
                break;
        }
    }
}
