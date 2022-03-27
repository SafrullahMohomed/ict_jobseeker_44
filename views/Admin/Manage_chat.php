<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_chat.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <title>Manage Chat</title>
</head>

<body>
    <!-- main container -->
    <div class="main-conatainer">
        <!-- divisoin for admin home -->
        <a href="<?php echo URL ?>Admin/Admin_home">
            <div class="admin-home-button">
                <button>Admin Home</button>
            </div>
        </a>


        <!-- search part -->
        <div class="search-chats">
            <input type="text" name="search-chats" id="search-chats" placeholder="Search Chats" onkeyup="ajaxload(this.value)">
            <!-- <button>Search</button> -->
        </div>

        <!-- add chats -->
        <!-- <div class="add-chats">
            <button><span class="plus">+</span>Add Chats</button>
        </div> -->

        <!-- <div class="MsgRow">

            <div class="InquiryFrom">
                Java Script Java Script Java Script
            </div>
            <div class="Inquiry">
                Java Script Tutorial chat-messages chat-messageschat-messages
            </div>
            <div class="InquiryStatus">
                Java Script 
            </div>
            
        </div> -->

        <!-- message list starts here -->

        <div id="chat-messages">

        </div>

        <div id="pagination-link">

        </div>

    </div>

    <script  src="<?php echo URL?>views/JS/Manage_chat.js"></script>
</body>

</html>