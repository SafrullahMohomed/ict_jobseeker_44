






<?php
// (A) DATABASE CONNECTION
require "../../models/DB/Connect_db.php";


// insert a row
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
$stmt1 = $conn->prepare("INSERT INTO user (email,first_name, Last_name, Phone_number,Description)
VALUES (:email,:fname, :lname,:phone_number,:Brief_description )");
    $stmt1->bindParam(':email', $email);
    $stmt1->bindParam(':fname', $fname);
    $stmt1->bindParam(':lname', $lname);
    $stmt1->bindParam(':phone_number', $phone_number);
    $stmt1->bindParam(':Brief_description', $Brief_description);

$stmt1->execute();
$User_ID = $conn->lastInsertId();

//Insert data into contractprovider table  
$stmt2 = $conn->prepare("INSERT INTO contractprovider (User_ID,ContractProvider_NIC,Website_url,Fb_url, Linkedin_url,Twitter_url)
VALUES ( $User_ID,:nic,:web_url, :fb_url,:linkedin_url,:twitter_url )");
    $stmt2->bindParam(':nic', $nic);
    $stmt2->bindParam(':web_url', $web_url);
    $stmt2->bindParam(':fb_url', $fb_url);
    $stmt2->bindParam(':linkedin_url', $linkedin_url);
    $stmt2->bindParam(':twitter_url', $twitter_url);

$stmt2->execute();



echo "New records created successfully";
















?>

