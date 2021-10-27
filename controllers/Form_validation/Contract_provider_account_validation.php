<?php
// define variables and set to empty values

session_start();

$_SESSION["fnameErr"] = "";
$_SESSION["lnameErr"] = "";
$_SESSION["emailErr"] = "";
$_SESSION["addressErr"] = "";
$_SESSION["phone_numberErr"] = "";
$_SESSION["nicErr"] = "";
$_SESSION["Brief_descriptionErr"] = "";
$_SESSION["web_urlErr"] = "";
$_SESSION["fb_urlErr"] = "";
$_SESSION["linkedin_urlErr"] = "";
$_SESSION["twitter_urlErr "] = "";



# $fnameErr =$lnameErr = $emailErr = $addressErr = $phone_numberErr = "";
# $nicErr = $Brief_descriptionErr = $web_url  = $fb_url  =$linkedin_url =$twitter_url = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //validate first name
  if (empty($_POST["fname"])) {
   
    $_SESSION["fnameErr"]= "First Name is required";
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    
  } else {
    echo $_POST["fname"];
    $fname = test_input($_POST["fname"]);
    
  }

  //validate last name
  if (empty($_POST["lname"])) {

    $_SESSION["lnameErr"]= "Last Name is required";
   header('Location: ' . $_SERVER['HTTP_REFERER']);

  } else {
    echo $_POST["lname"];
    $lname = test_input($_POST["lname"]);
  }

  //validate email
  if (empty($_POST["email"])) {

    $_SESSION["emailErr"]= "Email  is required";
   # header('Location: ' . $_SERVER['HTTP_REFERER']);

    
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION["emailErr"]= "Invalid email format";
     # header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  }
    
  

  if (empty($_POST["address"])) {
   
    $_SESSION["addressErr"]= "Address is required";
   # header('Location: ' . $_SERVER['HTTP_REFERER']);

  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["phone_number"])) {
    $_SESSION["phone_numberErr"]= "Phone number is required";
   # header('Location: ' . $_SERVER['HTTP_REFERER']);
   
  } else
   {
    
    $phone_number = test_input($_POST["phone_number"]);
   
    // check if phone number is well-formed
    if (strlen($phone_number) != 10) {
      $_SESSION["phone_numberErr"]= "Invalid phone number(use format 0775869756)";
     # header('Location: ' . $_SERVER['HTTP_REFERER']);
     
    }
  }

  if (empty($_POST["nic"])) {
    $_SESSION["nicErr"]= "NIC is required";
   # header('Location: ' . $_SERVER['HTTP_REFERER']);
  
  } else {
    $nic = test_input($_POST["nic"]);
  }
  

  if (empty($_POST["Brief_description"])) {
    $_SESSION["Brief_descriptionErr"]= "Brief description is required";
   # header('Location: ' . $_SERVER['HTTP_REFERER']);
   
  } else {
    $Brief_description = test_input($_POST["Brief_description"]);
  }

  //validate web url
  if (empty($_POST["web_url"])) {
    $web_url = "";
  } else {
    $web_url = test_input($_POST["web_url"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web_url)) {

      $_SESSION["web_urlErr"]= "Invalid URL";
     # header('Location: ' . $_SERVER['HTTP_REFERER']);
     
    }    
  }
//validate fb url
  if (empty($_POST["fb_url"])) {
    $fb_url = "";
  } else {
    $fb_url = test_input($_POST["fb_url"]);
    // check if URL address syntax is valid
    if (!preg_match("/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i",$fb_url)) {

      $_SESSION["fb_urlErr"]= "Invalid URL";
     # header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    }    
  }


  //validate linkedin url
  /*if (empty($_POST["linkedin_url"])) {
    $linkedin_url = "";
  } else {
    $linkedin_url = test_input($_POST["linkedin_url"]);
    // check if URL address syntax is valid
    if (!preg_match("/(^((https?:\/\/)?((www|\w\w)\.)?)linkedin\.com\/)((([\w]{2,3})?)|([^\/]+\/(([\w|\d-&#?=])+\/?){1,}))$/gmi",$linkedin_url)) {
      $_SESSION["linkedin_urlErr"]= "Invalid URL";
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      $linkedin_urlErr = "Invalid URL";
    }    
  }
*/
  if (empty($_POST["twitter_url"])) {
    $twitter_url = "";
  } else {
    $twitter_url = test_input($_POST["twitter_url"]);
    // check if URL address syntax is valid
    if (!preg_match("/(https:\/\/twitter.com\/(?![a-zA-Z0-9_]+\/)([a-zA-Z0-9_]+))/",$twitter_url)) {
      $_SESSION["twitter_urlErr"]= "Invalid URL";
      header('Location: ' . $_SERVER['HTTP_REFERER']);
 
    }    
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
