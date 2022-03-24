<?php

class View_contract_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    // function select_query_bid_contract(){
    //     return $this->db-> run_bid_contract_select_query();
       
    //    } 
//        function select_data_table()
//        {
//         //    $sql = "SELECT user.User_ID, Email, First_name, Last_name, Counsellor_provide_mock_interviews, Phone_number\n"
   
//         //        . "                FROM user\n"
   
//         //        . "                JOIN counsellor ON user.User_ID = counsellor.User_ID\n"
   
//         //        . "                ORDER BY user.User_ID;";;

//             //    $stmt1="SELECT  `Bid_value`, `Bid_proposal`,
//             //    `Jobseeker_ID`
//             //     FROM `dobid`";

// $stmt1 = "SELECT  `Bid_value`, `Bid_proposal`,\n"

// . "               `Jobseeker_ID`\n"

// . "                FROM `dobid`;";

// // $stmt1->execute();
// // $s=$stmt1->fetchAll();

// // return $s;
//            $x = $this->db->runQuery($stmt1);
//         //    print_r($x);
//           echo "query executed $x";
   
//            return $x;
           
   
//        }

       function select_Contract_data($Contract_ID){
        $query1 =" SELECT a.Contract_title, a.Contract_description, a.Contract_deadline, a.Contract_bid_avg,a.Contract_category,
         b.Email,b.Phone_number,b.Profile_picture,b.First_name,b.Last_name,
         d.Fb_url,d.Linkedin_url,d.Twitter_url,b.User_ID 
         FROM contract a, user b,contract_post c,contractprovider d
         WHERE a.Contract_ID=$Contract_ID AND a.Contract_ID=c.Contract_ID AND c.User_ID=d.User_ID AND c.User_ID=b.User_ID";
   
       $stmt1=$this->db->prepare($query1);
   
       $stmt1->execute();
       $s=$stmt1->fetch();
      
       return $s;
       }
    }
 ?>   
