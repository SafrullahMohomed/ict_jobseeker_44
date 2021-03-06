<?php if (empty(session_id())) session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>



  <style>
    @import url("https://fonts.googleapis.com/css2?family=Quicksand&display=swap");

    * {
      font-family: "Quicksand", sans-serif;

    }

    html,
    body {
      margin: 0 !important;
      padding: 0 !important;
      background-color: #ffffff;
      border-radius: 7px;
      margin-bottom: 50px;
    }

    /*header division* starts here*/
    /*.header_div{*/

    /* display: block;*/
    /*}*/

    header {
      /*position: fixed;*/
      width: 100%;

      height: 167px;

      top: 0;
      z-index: 2;
      /*overflow-x: hidden;*/
      display: flex;
      flex-direction: column;


    }
    /*This is for login bar of the header*/
    .login-bar {
      background-color: #1d6d86;
      width: 100%;
      height: 35px;
      border-radius: 0px;
    }

    .login-bar ul {
      float: right;
      background-color: rgba(226, 226, 226, 0);
      padding-right: 6px !important;
      margin-top: 9px !important;
      margin-right: 12px !important;
      margin-bottom: 0 !important;
    }

    .login-list {
      list-style: none;
      text-decoration: none;
      display: inline-block;
      color: rgb(255, 255, 255);
      padding: 0%;
      background-color: #04293500;
      margin-left: 5px;

    }

    .login-list a {
      text-decoration: none !important;
      color: white;
      font-weight: xx-large !important;
      transition: ease-in-out 0.2s;

    }

    .login-list a:hover {
      color: rgb(127, 135, 245);
      font-weight: xx-large !important;
    }

    #user {
      width: 22px;
      height: 22px;
      border-radius: 100px;
      margin-left: 4px;
      float: right;


    }

    #user_name {
      margin-bottom: 2px !important;
    }



    /*here login bar of the header ends*/

    /*here navigation menu and logo starts*/

    /*navigation header style*/

    .navigation-header {
      /*display: flex;*/
      width: 100%;

      height: 40px;
      background-color: white;
      border-radius: 0 0 7px 7px;
      justify-content: space-between;
        align-items: center;
        box-shadow:  0 1px 3px 0 rgb(41 43 48 / 45%), 0 6px 20px 0 rgb(90 127 210 / 15%);
    }

    /*navigation logo style*/

    .navigation-header .logo img {
      float: left;
      border-radius: 50%;
      object-fit: cover;
      height: 35px;
      margin: 0
      px 7px !important;
      width: 50px;

    }

    /*navigation menu main division*/

    .navigation-menu {
      align-self: flex-end;
      float: right;

    }

    ul {
      margin-top: 16px !important;
      margin-bottom: 20px !important;
    }

    /* make the ul as right in that div*/
    .navigation-menu ul {
      margin-bottom: 20px;
      float: right;
      list-style: none;
      font-weight: 400;
    }

    /*make the lists to one horizontal block*/
    .navigation-menu ul li {
      display: inline-block;
      margin-right: 10px;
    }

    /*menu items property*/
    .navigation-menu a {
      letter-spacing: 1px;
      display: block;
      text-decoration: none;
      color: #1d6989;
      /*font-size: 22px;*/
      margin-right: 20px;
      transition: ease-in-out 0.2s;
        font-weight: bold;
    }

    /*make the navigation menu hover property*/
    .navigation-menu a:hover {
      color: rgb(127, 135, 245);
      /*font-weight: xx-large;*/
    }

    /*header part ends here*/



    /* media queries */
    @media only screen and (max-width: 885px) {
        .navigation-menu a {
            /*font-size: 18px;*/
        }
    }

    @media only screen and (max-width: 780px) {
        .navigation-menu ul li {
            display: flex;
            flex-direction: column;
            margin-right: 10px;
        }

        .navigation-menu a {
            /*font-size: 17px;*/
        }

        .navigation-header {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start
        }

        header{
            height: 175px;
            position: unset;
        }


    }

    @media only screen and (max-width: 690px) {
      /* header starts here */
      /* login */

      .header_div {
        position: unset;
      }

      .login-list a {
        text-decoration: none;
        color: white;
        font-weight: xx-large;
        transition: ease-in-out 0.2s;
        font-size: 16px;
      }
    }


    @media only screen and (max-width: 570px) {

      /* navigation list starts here */
      .navigation-menu ul li {
        display: flex;
        flex-direction: column;
        margin-right: 10px;
      }

      .navigation-menu a {
        /*font-size: 16px;*/
      }

      .navigation-header {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start
      }
    }

    /*style for drop down menu start here*/
    /*.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}*/

    .dropbtn:hover,
    .dropbtn:focus {
      background-color: #2980B9;
    }

    .dropdown {
      position: relative;
      display: inline-block;

    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      top: 25px;
      right: 25px;
      min-width: 180px;
      height: 95px;
      overflow: hidden;
      overflow-y: hidden;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 10;
      font-size: 15px;
    }

    /*.dropdown-content::-webkit-scrollbar {
  display: none;
}*/


    .dropdown-content a {
      color: black;
      padding: 5px 10px;
      text-decoration: none;
      display: block;
    }

    .dropdown a:hover {
      background-color: #ddd;
    }

    .show {
      display: block;
    }

    /*style for drop down menu end*/
    #line_among_loging_reg {
      opacity: 0.7;
    }

    .username_icon_bar{
display: flex;
flex-direction: row;
align-items: center;

    }
  
    #Jobs:focus
    {
 color:black;
    }
  </style>


</head>

<body>




  <!-- if user is logged in -->

  <?php if (isset($_SESSION['User_ID'])) : ?>
    <header>
      <!-- login bar starts here  -->
      <div class="header-main">
        <div class="login-bar">
          <ul>

                <div class="username_icon_bar">
                <!-- <img src='<?php echo URL ?>views/images/Contract_provider/user.png'id="user"> -->

                <li class="login-list"> <?php echo $_SESSION['First_name'] . " " . $_SESSION['Last_name'] ?></li>

                <!-- <li class="login-list">|</li> -->
                <!-- <li class="login-list"><a href="<?php echo URL ?>Registration">Logout</a></li> -->


                <div class="dropdown">
                  <img src='<?php echo URL ?>views/images/Contract_provider/user.png' id="user" onclick="myFunction()" class="dropbtn">
                  <div id="myDropdown" class="dropdown-content">

                  
              <!-- check user type -->
              <?php
              // if user is company
              if ($_SESSION['User_type'] == "Company") :
                $My_profile = "Company/Company_profile/Company_profilejs/".$_SESSION['User_ID'];
              endif;
              // if user is Contract_provider
              if ($_SESSION['User_type'] == "Contract provider") :
                $My_profile = "Contract_provider/Contract_provider_profile/Cp_profilejs/".$_SESSION['User_ID'];
              endif;
               // if user is Jobseeker
               if ($_SESSION['User_type'] == "Jobseeker") :
                $My_profile = "Jobseeker/JobSeekerProfile?User=".$_SESSION['User_ID'];
              endif;
              // if user is Counsellor
              if ($_SESSION['User_type'] == "Counsellor") :
                  $My_profile = "Counsellor/Counsellor_profile?User=".$_SESSION['User_ID'];
              endif;
              if ($_SESSION['User_type'] == "Admin44") :
                  $Admin_home = "<?php echo URL?>.'Admin/Admin_home'";
              endif;


              ?>
                <?php

                $URL = "http://localhost/ict_jobseeker_44/";
                if ($_SESSION['User_type'] == 'Admin44') {
                    echo '<a href="';
                    echo $URL . 'Admin/Admin_home">Admin Home</a>
                    <a href="';
                    echo $URL . 'Login/logout">Logout</a>';
                } elseif ($_SESSION['User_type'] == 'Company' or 'Contract provider' or 'Jobseeker' or 'Counsellor') {
                    echo '<a href="';
                    echo $URL . $My_profile . '">My profile</a>
                    <a href="';
                    echo $URL . 'ChangePassword">Change password</a>
                    <a href="';
                    echo $URL . 'Login/logout">Logout</a>';
                }

                ?>
            </div>
          </div>

        </ul>
      </div>

          </ul>
        </div>
        <!-- logo and navigation bar starts here -->
        <div class="navigation-header">
          <div class="logo">
            <?php
            echo "<img src='http://localhost/ict_jobseeker_44/views/images/Home/logo_old.jpg' >";
            ?>
          </div>
          <!-- logo ends here -->

          <!-- navigation menu starts here -->
          <div class="navigation-menu">
            <ul>
              <li><a id="Home" href="<?php echo URL ?>Home" >Home</a></li>
              <li><a id="Jobs" href="<?php echo URL ?>Jobs_main_page">Jobs</a></li>
              <li><a href="<?php echo URL ?>Company/Companies">Companies</a></li>
              <li> <a href="<?php echo URL ?>Contracts_main_page">Freelancing&nbsp;Projects</a> </li>
              <li><a href="<?php echo URL ?>Contact_us">Contact&nbsp;Us</a></li>
            </ul>
          </div>
          <!-- navigates menu ends here -->
        </div>
        <!-- login bar ends here  -->
    </header>
  <?php endif; ?>


  <!-- if user is not logged in -->
  <?php if (!isset($_SESSION['User_ID'])) : ?>

    <header>

      <!-- login bar starts here  -->
      <div class="login-bar">
        <ul style="margin-bottom: 0px;">
          <li class="login-list"><a href="<?php echo URL ?>Login">Login</a></li>
          <li class="login-list" id="line_among_loging_reg">|</li>
          <li class="login-list"><a href="<?php echo URL ?>Registration">Register</a></li>
        </ul>
      </div>
      <!-- login bar ends here  -->

      <!-- logo and navigation bar starts here -->
      <div class="navigation-header">
        <div class="logo">


          <!-- logo and navigation bar starts here -->
          <div class="navigation-header">
            <div class="logo">

              <?php
              echo "<img src='http://localhost/ict_jobseeker_44/views/images/Home/logo_old.jpg' >";
              ?>
            </div>
            <!-- logo ends here -->

            <!-- navigation menu starts here -->
            <div class="navigation-menu">
              <ul>
                <li><a href="<?php echo URL ?>Home">Home</a></li>
                <li><a href="<?php echo URL ?>Jobs_main_page">Jobs</a></li>
                <li><a href="<?php echo URL ?>Company/Companies">Companies</a></li>
                <li> <a href="<?php echo URL ?>Contracts_main_page">Freelancing&nbsp;Projects</a> </li>
                <li><a href="<?php echo URL ?>Contact_us">Contact&nbsp;Us</a></li>
              </ul>
            </div>
            <!-- navigates menu ends here -->
          </div>
        </div>


    </header>
  <?php endif; ?>

  <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {

      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script></body>

</html>