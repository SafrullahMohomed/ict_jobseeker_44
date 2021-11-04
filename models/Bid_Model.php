<?php

class Bid_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    function run_insert_bid($Bid_value, $Bid_proposal)
   {
        try
        {
            $sql= "INSERT INTO dobid (Bid_value,Bid_proposal) VALUES (?,?) ";
            
            $stmt=$this->db->prepare($sql);
            $stmt->execute([$Bid_value,$Bid_proposal]);

          echo "Successfully inserted"  ;
        }
        catch(Exception $e)
        {
            echo "message $e->getMessage()";
        }
   }
   
}



?>