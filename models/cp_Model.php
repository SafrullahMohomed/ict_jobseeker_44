<?php

class cp_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    


function insert_query_cp_data(){
 //return $this->db-> run_cp_insert_query();

 $profile_pic  =$_POST["profile_pic"];
 $fname 	  = $_POST["fname"];
 $lname    =$_POST["lname"];
 $phone_number  =$_POST["phone_number"];
 $nic  =$_POST["nic"];
 $Brief_description  =$_POST["brief_description"];
 $email  =$_POST["email"];
 $web_url  =$_POST["web_url"];
 $fb_url  =$_POST["fb_url"];
 $linkedin_url  =$_POST["linkedin_url"];
 $twitter_url  =$_POST["twitter_url"];

// prepare sql and bind parameters 
//Insert data into user table




$query = "UPDATE user SET first_name=$fname,Phone_number= $phone_number,Last_name=$lname, Description=$Brief_description WHERE email='$email'";
$this->db->runQuery($query);
                     
 
 $User_ID = $_SESSION['User_ID'];

//Insert data into contractprovider table  
$stmt2 = $this->db->prepare("INSERT INTO contractprovider (User_ID,ContractProvider_NIC,Website_url,Fb_url, Linkedin_url,Twitter_url)
VALUES ( $User_ID,:nic,:web_url, :fb_url,:linkedin_url,:twitter_url )");
 $stmt2->bindParam(':nic', $nic);
 $stmt2->bindParam(':web_url', $web_url);
 $stmt2->bindParam(':fb_url', $fb_url);
 $stmt2->bindParam(':linkedin_url', $linkedin_url);
 $stmt2->bindParam(':twitter_url', $twitter_url);

$stmt2->execute();





}


//post contract data
function insert_query_post_contract(){
    return $this->db-> run_post_contract_insert_query();
   
   }

}



?>