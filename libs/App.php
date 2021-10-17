<?php

class App{
    private $_url=null;
    private $_controller =null;

    function __construct()
    {
        $this->_getURL();
        //if url first parameter is empty then load default constructor
        if(empty($this->_url[0])){
           $this->_loadDefaultController();
           return false;
        }
        // controller is load then load method
        if($this->_loadController()){
          
            $this->_loadControllerMethod();
           
        };

    }
    private function _getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
         
        //if / in the right side then remove
        $url = rtrim($url, '/');

        $url = filter_var($url, FILTER_SANITIZE_URL);

        //put to array
        $this->_url=explode('/',$url);

      //print_r($this->_url);
    }

    //load default controller
    private function _loadDefaultController()
    {
        require 'controllers/Home.php';

        $this->_controller=new Home();

        $this->_controller->Home();
        return true;
    }


    private function _loadController()
    
    {
        $file1='controllers/' . $this->_url[0] . '.php';//path of controller


        if (isset($this->_url[1])) {
            #$this->_url[1] = null;
            $file2='controllers/' .$this->_url[0].'/'. $this->_url[1] . '.php';
         }
         


        
        

        if(file_exists($file1))
        {
            require $file1;
           
            $this->_controller = new $this->_url[0];
            //load model
            $this->_controller->loadModel($this->_url[0]);
    
           // $this->_controller->Home();
            return true;
        }
       if(file_exists($file2)){
           
    
            require $file2;
           
            $this->_controller = new $this->_url[1];
            //load model
            $this->_controller->loadModel2($this->_url[0],$this->_url[1]);
    
           // $this->_controller->Home();
            return true;


        }
        else//file not in controller
        {
            echo "Sorry, Page not found";
            return false;
        } 
    }
    
    private function _loadControllerMethod(){
        $urlLength =count($this->_url);
        
        
      
//url length=1 mean not given a method

        if($urlLength>1){
            if(!method_exists($this->_controller,$this->_url[1]) ){
               echo "Requested method not found!" ;
               exit;
            }

        }
        switch ($urlLength){
            case 6:
            $this->_controller -> {$this->_url[0]}($this->_url[1],$this->_url[2],$this->_url[3],$this->_url[4],$this->_url[5]); 
            break;

            case 5:
                $this->_controller -> {$this->_url[0]}($this->_url[1],$this->_url[2],$this->_url[3],$this->_url[4]); 
                break;
            
            case 4:
                $this->_controller -> {$this->_url[0]}($this->_url[1],$this->_url[2],$this->_url[3]); 
                break;

            case 3:
                $this->_controller -> {$this->_url[0]}($this->_url[1],$this->_url[2]); 
                break;

            case 2:
                $this->_controller->{$this->_url[1]}();
               # $this->_controller -> {$this->_url[0]}($this->_url[1]); 
                break;    

            case 1:
                $this->_controller -> {$this->_url[0]}(); 
                break;

            default:
                $this->_controller -> Home() ;
                break;
        }
    }
 
}






?>