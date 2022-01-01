<?php if ( empty(session_id()) ) session_start(); ?>
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
    <!-- Inquire box starts here -->
    <div class="InquireBox">

        <!-- Collapsiable button starts here -->
        <button id="ChatButton" type="button" class="collapsiable">
            <!-- <div class="logo"></div> -->
                <img src='<?php echo URL ?>views/images/Inquire/logo.jpg' >
                ICT JobSeeker
                <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>
        <!-- Collapsiable button ends here -->

        <!-- Content of the inquire box starts here -->
        <div class="content">

            <!-- Full Inquire block starts here-->
            <div class="InquireBlock">

                <!-- Message Container starts here-->
                <div class="MainContainer">

                    <!-- Chat Container starts here-->
                    <div class="Chat">

                        <!-- ChatBox starts here -->
                        <div class="ChatBox" id="ChatBox">

                            <!-- Inquire starting time starts here -->
                            <h5 id="chat-timestamp"></h5>
                            <!-- Inquire starting time ends here -->

                            <!-- Welcome message starts here -->
                            <p id="StarterMessage" class="Text"><span>Loading..</span></p>
                            <!-- Welcome message ends here -->

                            <!-- Question selections starts here -->
                            <p id="QuestionOne" class="QText" onclick="InquireButtonOne()"><span>Loading..</span></p>
                            <p id="QuestionTwo" class="QText" onclick="InquireButtonTwo()"><span>Loading..</span></p>
                            <p id="QuestionThree" class="QText" onclick="InquireButtonThree()"><span>Loading..</span></p>
                            <p id="QuestionFour" class="QText" onclick="InquireButtonFour()"><span>Loading..</span></p>
                            <p id="QuestionFive" class="QText" onclick="InquireButtonFive()"><span>Loading..</span></p>
                            <!-- Question selections ends here -->

                        </div>
                        <!-- ChatBox ends here -->

                        <!-- User Inputs starts here -->
                        <div class="InputContainer1">
                            <div class="Input" id="Input">
                                <input id="TextInput" class="InputBox" type="text" name="msg" placeholder="Enter Your Inquire">
                                <p></p>
                            </div>
                            <div class="Icon">
                                <i id="ChatIcon" style="color: #227093;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
                            </div>
                        </div>
                        <!-- User Inputs ends here -->

                        <!-- Chat bottom starts here -->
                        <div id="ChatBottom">
                            <p></p>
                        </div>
                        <!-- Chat bottom ends here -->

                    </div>
                    <!-- Chat Container ends here-->

                </div>
                <!-- Message Container ends here-->

            </div>
            <!-- Full Inquire block ends here-->

        </div>
        <!-- Content of the inquire box ends here -->
    </div>
     <!-- Inquire box ends here -->

</body>
<!-- <script>alert("GGSS");</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo URL ?>views/JS/Inquire.js"></script>
<script src="<?php echo URL ?>views/JS/chat.js"></script>
<script src="<?php echo URL ?>views/JS/chatting.js"></script>
<script src="<?php echo URL ?>views/JS/Responses.js"></script>

<!-- <script>alert("GGSSsss");</script> -->
</html>
