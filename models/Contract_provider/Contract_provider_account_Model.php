<?php

class Contract_provider_account_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }
   function  insert_query_cp_data(){

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
    $address=$_POST["address"];
   // prepare sql and bind parameters 
   //Insert data into user table
   
   
   
   
   $query1 = "UPDATE user SET first_name=$fname,Phone_number= $phone_number,Last_name=$lname, Description=$Brief_description WHERE email='$email'";
   $this->db->runQuery($query1);
                        
    
    $User_ID = $_SESSION['User_ID'];
   
   //Insert data into contractprovider table  
  

$query2 = "SELECT ContractProvider_NIC FROM contractprovider  WHERE User_ID='$User_ID '";
$check=$this->db->runQuery($query2);

//Insert data into company table  

// first time
if( $check==null){
$stmt2 = $this->db->prepare("INSERT INTO contractprovider(User_ID,ContractProvider_NIC,Website_url,Fb_url, Linkedin_url,Twitter_url)
VALUES ( ?,?,?,?,?,?)");

$stmt2->execute([$User_ID, $nic,$web_url,$fb_url,$linkedin_url , $twitter_url]);

}

//when update
else{
  
$query3 = "UPDATE contractprovider 
SET 
ContractProvider_NIC='$nic',
Fb_url=' $fb_url ',
Twitter_url='$twitter_url', 
Linkedin_url='$linkedin_url' ,
Website_url='$web_url'
 WHERE User_ID='$User_ID'";
$this->db->runQuery($query3);

$query4 = "UPDATE user SET
 First_name= '$fname',
Last_name='$lname', 
Phone_number= '$phone_number',
Description='$Brief_description',
Address= '$address'
 WHERE User_ID='$User_ID'";
 
$this->db->runQuery($query4);
}


   }




function getCpData($User_ID){
//get cp data for auto load when load account page

   
    $query1="SELECT a.Website_url,a.Fb_url, a.Twitter_url,
    a.Linkedin_url,
    b.First_name,b.Last_name, b.Email,b.Phone_number,b.Address,
    b.Profile_picture,b.Description,a.ContractProvider_NIC
    FROM contractprovider a,user b
    WHERE a.User_ID=$User_ID AND a.User_ID=b.User_ID";


   $stmt1=$this->db->prepare($query1);   
   $stmt1->execute();
   $s=$stmt1->fetch();

    return $s;


}


//select cp contracts when loading
function select_contracts($User_ID){
        $query1="SELECT Contract_ID  ,Contract_title
         FROM contract 
         WHERE Contract_provider_ID=$User_ID";

        $stmt1=$this->db->prepare($query1);
        $stmt1->execute();
        $s=$stmt1->fetchAll();
      
        return $s;
       
       } 

//delet contract
function delete_contract($contract_ID){
   $query1="DELETE FROM `contract` WHERE `contract`.`Contract_ID` = $contract_ID";
   $stmt1=$this->db->prepare($query1);
   $stmt1->execute();
}
   
}



?>