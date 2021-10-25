
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- <link rel="stylesheet" href="CSS/normalize.css"> -->
        




 
   <style>
            @import url("https://fonts.googleapis.com/css2?family=Quicksand&display=swap");

* {
  font-family: "Quicksand", sans-serif;

}
html, body {
  margin: 0 !important;
  padding: 0 !important;
  background-color: #ffffff;
  border-radius: 7px;
  margin-bottom: 50px;
}

/*header division* starts here*/
.header_div {
  position: fixed;
  width: 100%;
 
  top: 0;
  z-index: 10;
  overflow-x:hidden;
  display: flex;
  flex-direction: column;
  margin-bottom: 50px !important;
}

/*This is for login bar of the header*/
.login-bar {
  background-color: #004867;
  width: 100%;
  height: 35px;
  border-radius: 0px;
}

.login-bar ul {
  float: right;
  background-color: rgba(226, 226, 226, 0);
  padding-right: 6px;
  margin-top: 9px;
  margin-right: 12px;
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
  text-decoration: none;
  color: white;
  font-weight: xx-large;
  transition: ease-in-out 0.2s;
}

.login-list a:hover {
  color: rgb(127, 135, 245);
  font-weight: xx-large;
}

/*here login bar of the header ends*/

/*here navigation menu and logo starts*/

/*navigation header style*/

.navigation-header {
  display: flex;
  width: 100%;
  height: 90px;
  background-color: #1d6989;
  border-radius: 0 0 7px 7px;
  justify-content: space-between;
}

/*navigation logo style*/

.navigation-header .logo img {
  float: left;
  border-radius: 7px;
  object-fit: cover;
  height: 85px;
  margin-top: 2px !important;
  width: 90px;

}

/*navigation menu main division*/

.navigation-menu {
  align-self: flex-end;
  float: right;
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
  color: white;
  font-size: 22px;
  margin-right: 20px;
  transition: ease-in-out 0.2s;
}

/*make the navigation menu hover property*/
.navigation-menu a:hover {
  color: rgb(127, 135, 245);
  font-weight: xx-large;
}

/*header part ends here*/



/* media queries */

@media only screen and (max-width: 690px) {
/* header starts here */
/* login */
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

.navigation-menu a{
  font-size: 16px;
}
.navigation-header{
  height: 100%;
  display:flex;
  align-items: center;
  justify-content: flex-start
}}

        </style>


    </head>
    <body>
    <header>
    <!-- login bar starts here  -->
    <div class="login-bar">
        <ul>
            <li class="login-list"><a href="<?php echo URL?>Login">Login</a></li>
            <li class="login-list">|</li>
            <li class="login-list"><a href="<?php echo URL?>Registration">Register</a></li>
        </ul>
    </div>
    <!-- login bar ends here  -->

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
                <li><a href="<?php echo URL?>Home">Home</a></li>
                <li><a href="<?php echo URL?>Jobs_main_page">Jobs</a></li>
                <li><a href="<?php echo URL?>Companies">Companies</a></li>
                <li> <a href="<?php echo URL?>Contracts_main_page">Freelancing&nbsp;Projects</a> </li>
                <li><a href="#Contact us">Contact&nbsp;Us</a></li>
            </ul>
        </div>
        <!-- navigates menu ends here -->
    </div>
</header>
    </body>
    </html>
