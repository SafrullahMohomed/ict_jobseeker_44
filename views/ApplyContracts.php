<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Contracts</title>
    <style>
        <?php include "CSS/ApplyContracts.css" ?>
    </style>
</head>
<body>
    <form class="MainContainer">
        <div class="Title">
            Bid on this project
        </div>
        <div class="row" id="description">
            You will be able to edit your bid until the project is awarded to someone.
        </div>
        <div class="row">
            <label for="bid" class="labelfield">Bid</label><br>
            <input type="text" id="bid" name="bid" placeholder= "Enter Your Bid Rs." class="inputfield" required><br>
        </div>
        <div class="row">
            <label for="proposal" class="labelfield">Proposal</label><br>
            <textarea  id="proposal" rows="8"  class="inputfield" placeholder="Describe your proposal here to get more chance..." required></textarea><br>
        </div>   
       <div class="submit">
            <label for="submit" class="labelfield"></label><br>
            <input type="submit" id="submit" submit="submit"  class="submit_button"><br>
        </div> 
    </form>

</body>
</html>