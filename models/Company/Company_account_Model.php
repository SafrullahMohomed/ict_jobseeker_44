<?php

class Company_account_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

   //create account data insert to user and company table
   function  insert_company_data($data){
    //$profile_pic  =$data["profile_pic"];
    $name 	  = $data["Company_name"];//here name mean company name
    $phone_number  =$data["phone_number"];
    $Brief_description  =$data["brief_description"];
    $email  =$data["email"];
    $web_url  =$data["url"];
    $fb_url  =$data["fburl"];
    $linkedin_url  =$data["linkedin_url"];
    $twitter_url  =$data["twitter_url"];
    $address  =$data["address"];
   
   
   // prepare sql and bind parameters 
   //Insert data into user table
   
   $query1 = "UPDATE user SET Phone_number= '$phone_number', Description='$Brief_description' WHERE email='$email'";
   $this->db->runQuery($query1);
                        
    
    $User_ID = $_SESSION['User_ID'];

    $query2 = "SELECT Company_name FROM  company  WHERE User_ID='$User_ID '";
    $check=$this->db->runQuery($query2);
 
   //Insert data into company table  

   // first time
   if( $check==null){
    $stmt2 = $this->db->prepare("INSERT INTO company(User_ID,Company_name,Company_facebook,Company_twitter, Company_LinkedIn,Company_website)
    VALUES ( ?,?,?,?,?,?)");
 
    $stmt2->execute([$User_ID, $name,$fb_url, $twitter_url,$linkedin_url,$web_url ]);

   }

   //when update
   else{
      
    $query3 = "UPDATE company SET Company_name= '$name', Company_facebook=' $fb_url ',Company_twitter=' $twitter_url' 
    ,Company_LinkedIn='$linkedin_url' ,Company_website='$web_url'
     WHERE User_ID=' $User_ID'";
     
    $this->db->runQuery($query3);

    $query4 = "UPDATE user SET 	Address= '$address'
     WHERE User_ID=' $User_ID'";
     
    $this->db->runQuery($query4);
   }


   
   
    
       } 


//get company data for auto load when load account page
function getCompanyData($User_ID){
    $query1="SELECT a.Company_name,a.Company_website,a.Company_facebook, a.Company_twitter,
    a.Company_LinkedIn, a.Company_short_intro_video,a.Company_posted_job_count,
    b.Email,b.Phone_number,b.Address,b.Profile_picture,b.Description
    FROM company a,user b
    WHERE a.User_ID=$User_ID AND a.User_ID=b.User_ID";


   $stmt1=$this->db->prepare($query1);   
   $stmt1->execute();
   $s=$stmt1->fetch();

    return $s;
}
}



?>