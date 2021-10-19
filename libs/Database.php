<?php

class Database extends PDO{
    function __construct($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASSWORD)
    {
        parent:: __construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER);
    }

 //function for view cp profile select data from cp table   
public function runQuery($query1){
    $stmt=$this->prepare($query1);
    $stmt->execute();
    return $stmt->fetchAll();
}

//insert cp data into database
public function run_cp_insert_query()
{
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
    $stmt1 =$this->prepare("INSERT INTO user (email,first_name, Last_name, Phone_number,Description)
    VALUES (:email,:fname, :lname,:phone_number,:Brief_description )");
        $stmt1->bindParam(':email', $email);
        $stmt1->bindParam(':fname', $fname);
        $stmt1->bindParam(':lname', $lname);
        $stmt1->bindParam(':phone_number', $phone_number);
        $stmt1->bindParam(':Brief_description', $Brief_description);

    $stmt1->execute();
    $User_ID = $this->lastInsertId();

//Insert data into contractprovider table  
$stmt2 = $this->prepare("INSERT INTO contractprovider (User_ID,ContractProvider_NIC,Website_url,Fb_url, Linkedin_url,Twitter_url)
VALUES ( $User_ID,:nic,:web_url, :fb_url,:linkedin_url,:twitter_url )");
    $stmt2->bindParam(':nic', $nic);
    $stmt2->bindParam(':web_url', $web_url);
    $stmt2->bindParam(':fb_url', $fb_url);
    $stmt2->bindParam(':linkedin_url', $linkedin_url);
    $stmt2->bindParam(':twitter_url', $twitter_url);

$stmt2->execute();
}

//when post a contract insert this data to database
public function run_post_contract_insert_query()
 {
    $contract_name  =$_POST["contract_name"];
    $contract_category 	  = $_POST["contract_category"];
    $description    =$_POST["description"];
    $deadline  =$_POST["deadline"];
    $avg_bid  =$_POST["avg_bid"];
    

// prepare sql and bind parameters 
//Insert data into contract tables
    $stmt1 =$this->prepare("INSERT INTO contract (Contract_title,Contract_description, Contract_deadline, Contract_bid_avg,Contract_category,contract_provider_ID)
    VALUES (:contract_name,:description, :deadline,:avg_bid,:contract_category,1 )");
        $stmt1->bindParam(':contract_name', $contract_name);
        $stmt1->bindParam(':contract_category', $contract_category);
        $stmt1->bindParam(':description', $description);
        $stmt1->bindParam(':deadline', $deadline);
        $stmt1->bindParam(':avg_bid', $avg_bid);

    $stmt1->execute();
   


 }   
}
?>