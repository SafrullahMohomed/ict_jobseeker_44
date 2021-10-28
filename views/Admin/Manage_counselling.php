<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_counselling.css">
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

        <!-- seach part -->
        <div class="search-counsellor">
            <input type="text" name="search-counsellors" id="search-counsellors" placeholder="Search Counsellors">
            <button>Search</button>
        </div>

        <!-- add counsellors -->
        <a href="<?php echo URL ?>Admin/Admin_add_counselling">
        <div class="add-counsellors">
            <button><span class="plus">+</span>Add Counsellors</button>
        </div>
        </a>
        
        <!-- table -->
        <div class="table-counsellors">
            Table....
        </div>

        <!-- load more button -->
        <div class="load-more">
            <button>Load More</button>
        </div>

        <!-- counsellor registration request text -->
        <div class="registration-text">
            Counsellor Registration Requests
        </div>

        <!-- counsellor registration request table -->
        <div class="registration-table">
            Table....
        </div>

        <!-- load more button -->
        <div class="load-more">
            <button>Load More</button>
        </div>
    </div>


</body>

</html>