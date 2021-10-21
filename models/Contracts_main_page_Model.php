<?php

class Contracts_main_page_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

  
    function select_query_post_contract(){
        return $this->db-> run_post_contract_select_query();
       
       } 


}



?>