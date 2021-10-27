<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_chat.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <title>Document</title>
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
            <input type="text" name="search-chats" id="search-chats" placeholder="Search Chats">
            <button>Search</button>
        </div>

        <!-- add chats -->
        <!-- <div class="add-chats">
            <button><span class="plus">+</span>Add Chats</button>
        </div> -->

        <!-- table -->
        <div class="table-chats">
        Table
        </div>

        <!-- load more button -->
        <div class="load-more">
            <button>Load More</button>
        </div>

    </div>


</body>

</html>