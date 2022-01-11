<?php

class View_contract_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    function select_query_bid_contract(){
        return $this->db-> run_bid_contract_select_query();
       
       } 

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
