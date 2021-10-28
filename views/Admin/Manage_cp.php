<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_cp.css">
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
        <div class="search-contract-provider">
            <input type="text" name="search-contract-provider" id="search-contract-provider" placeholder="Search Contract Providers">
            <button>Search</button>
        </div>

        <!-- add contract-provider division -->
        <a href="<?php echo URL ?>Admin/Admin_add_cp">
        <div class="add-contract-provider">
            <button><span class="plus">+</span>Add contract-provider</button>
        </div>
        </a>

        <!-- table -->
        <div class="table-contract-provider">

        </div>

        <!-- load more button -->
        <div class="load-more">
            <button>Load More</button>
        </div>

    </div>


</body>

</html>