<?php

class View_contract_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    function select_query_bid_contract(){
        return $this->db-> run_bid_contract_select_query();
       
       } 


    
}






?>