<?php

class Contracts_main_page_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

  
    function select_query_post_contract(){
        $query1="SELECT Contract_ID  ,Contract_title, Contract_description,
        Contract_deadline,Contract_bid_avg
         FROM `contract`";

        $stmt1=$this->db->prepare($query1);
        $stmt1->execute();
        $s=$stmt1->fetchAll();
      
        return $s;
       
       } 


}



?>

