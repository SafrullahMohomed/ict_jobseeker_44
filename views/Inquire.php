<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="Inquire.css"> -->
    <title>Inquire</title>
    <style>
        <?php include "CSS/Inquire.css" ?>
    </style>
</head>
<body>
    <!-- Chat bar header starts here -->
    <div class="InquireBox">
        <button id="ChatButton" type="button" class="collapsiable">
            <!-- <div class="logo"></div> -->
                <img src='<?php echo URL ?>views/images/Inquire/logo.jpg' >
                ICT JobSeeker
                <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>
        <div class="content">
            <div class="InquireBlock">
                <div class="MainContainer">
                    <div class="Chat">
                        <div class="ChatBox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="StarterMessage" class="Text"><span>Loading...</span></p>
                        </div>
                        <!-- User Inputs starts here -->
                        <div class="InputContainer">
                            <div class="Input">
                                <input id="TextInput" class="InputBox" type="text" name="msg" placeholder="Enter Your Inquire">
                                <p></p>
                            </div>
                            <div class="Icon">
                                <i id="ChatIcon" style="color: #333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
                            </div>
                        </div>
                        <div id="ChaBottom">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo URL ?>views/JS/Inquire.js"></script>
</html>