<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_lm.css">
    <title>Document</title>
</head>

<body>

<!-- header part starts here -->
<div class="header_div">
    <?php include './views/Header.php' ?>
</div>

<!-- header part ends here -->

    <!-- main container -->
    <div class="main-conatainer">
        <!-- divisoin for admin home -->
        <a href="<?php echo URL ?>Admin/Admin_home">
            <div class="admin-home-button">
                <button>Admin Home</button>
            </div>
        </a>
        <!-- search part -->
        <div class="search-lms">
            <input type="text" name="search-lms" id="search-lms" placeholder="Search Learning Materials">
            <button>Search</button>
        </div>

        <!-- add lms -->
        <a href="<?php echo URL ?>Admin/Admin_add_lm">
            <div class="add-lms">
                <button><span class="plus">+</span>Add Learning Materials</button>
            </div>
        </a>

        <!-- table -->
        <div class="table-lms">

        </div>

        <!-- load more button -->
        <div class="load-more">
            <button>Load More</button>
        </div>

    </div>

<?php include './views/Footer.php' ?>

</body>

</html>