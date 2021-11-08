<?php

class Bid_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    function run_insert_bid()
   {
        // try
        // {
        //   $Jobseeker_ID=$_SESSION['User_ID'];
        //   $sql= "INSERT INTO dobid (Bid_value,Bid_proposal,Jobseeker_ID) VALUES (?,?,?) ";
            
        //     $stmt=$this->db->prepare($sql);
        //     $stmt->execute([$Bid_value,$Bid_proposal,$Jobseeker_ID]);

        //   echo "Successfully inserted"  ;
        // }
        // catch(Exception $e)
        // {
        //     echo "message $e->getMessage()";
        // }
        return $this->db->run_insert_bid_query();

   }
   
}



?>