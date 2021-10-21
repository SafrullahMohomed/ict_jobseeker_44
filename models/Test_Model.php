<?php

class Test_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    
    function Get_cp_data(){

        return $this->db-> runQuery("SELECT *FROM user");
    }


    function select_query_post_contract(){
        return $this->db-> run_post_contract_select_query();
       
       } 

}






?>