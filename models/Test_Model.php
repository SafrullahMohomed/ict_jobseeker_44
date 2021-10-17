<?php

class Test_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    function printSomething(){
        echo 'helo from text model';
    }
    function Get_cp_data(){

        $this->db-> runQuery("SELECT *FROM user");
    }
}






?>