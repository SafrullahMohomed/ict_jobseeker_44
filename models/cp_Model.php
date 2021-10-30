<?php

class cp_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    


function insert_query_cp_data(){
 return $this->db-> run_cp_insert_query();

}


//post contract data
function insert_query_post_contract(){
    return $this->db-> run_post_contract_insert_query();
   
   }

}



?>