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
   function select_data_table()
   {
    //    $sql = "SELECT user.User_ID, Email, First_name, Last_name, Counsellor_provide_mock_interviews, Phone_number\n"

    //        . "                FROM user\n"

    //        . "                JOIN counsellor ON user.User_ID = counsellor.User_ID\n"

    //        . "                ORDER BY user.User_ID;";;

        //    $stmt1="SELECT  `Bid_value`, `Bid_proposal`,
        //    `Jobseeker_ID`
        //     FROM `dobid`";

$stmt1 = "SELECT  `Bid_value`, `Bid_proposal`,\n"

. "               `Jobseeker_ID`\n"

. "                FROM `dobid`;";

// $stmt1->execute();
// $s=$stmt1->fetchAll();

// return $s;
       $x = $this->db->runQuery($stmt1);
    //    print_r($x);
      // echo "query executed $x";

       return $x;
       

   }

   
}



?>