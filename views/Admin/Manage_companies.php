<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_companies.css">
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

        <!-- seach part -->
        <div class="search-company">
            <input type="text" name="search-company" id="search-company" placeholder="Search Companies">
            <button>Search</button>
        </div>

        <!-- add company division -->
        <div class="add-company">
            <button><span class="plus">+</span>Add Company</button>
        </div>

        <!-- table -->
        <div class="table-Company">
            Table...
        </div>

        <!-- load more button -->
        <div class="load-more">
            <button>Load More</button>
        </div>

    </div>


</body>

</html>