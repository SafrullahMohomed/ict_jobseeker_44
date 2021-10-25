<?php
class View{
    function __construct()
    {
        
    }
public function render($viewName){
    require 'views/'.$viewName. '.php';
}
public function render2($viewName, $data = []) {
    echo "lulakshi";
        require 'views/'.$viewName. '.php';
}



public function show_contract($viewName){
    require 'views/JS/'.$viewName. '.js';
}



} 


?>