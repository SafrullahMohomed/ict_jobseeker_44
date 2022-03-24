<?php

class Company_account_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

   //create account data insert to user and company table
   function  insert_company_data($data){
    //$profile_pic  =$data["profile_pic"];
    $name 	  = $data["name"];//here name mean company name
    $phone_number  =$data["phone_number"];
    $Brief_description  =$data["brief_description"];
    $email  =$data["email"];
    $web_url  =$data["url"];
    $fb_url  =$data["fburl"];
    $linkedin_url  =$data["linkedin_url"];
    $twitter_url  =$data["twitter_url"];
   
   // prepare sql and bind parameters 
   //Insert data into user table
   
  print_r($data);
   
   
   $query = "UPDATE user SET Phone_number= '$phone_number', Description='$Brief_description' WHERE email='$email'";
   $this->db->runQuery($query);
                        
    
    $User_ID = $_SESSION['User_ID'];
   
   //Insert data into contractprovider table  
   $stmt2 = $this->db->prepare("INSERT INTO company(User_ID,Company_name,Company_facebook,Company_twitter, Company_LinkedIn,Company_website)
   VALUES ( ?,?,?,?,?,?)");

   
   $stmt2->execute([$User_ID, $name,$fb_url, $twitter_url,$linkedin_url,$web_url ]);
   
   
    
       } 
}



?>