<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Counsellor/Counsellor_home_js.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="http://localhost/ict_jobseeker_44/views/JS/Counsellor/Counsellor_home_js.js"></script>
    <title>Document</title>
</head>

<body>

<div class="header_div">
    <?php include './views/Header.php' ?>
</div>
<div class="main_container">
    <div class="counsellor_title"> Find&nbsp; Counsellor</div>
    <div class="counsellor_text"> Contact Counsellors and find suitable jobs for your qualificaitons.</div>

    <!-- find mock interviews part -->
    <a href="<?php echo URL ?>Counsellor/Counsellor_mock">
        <div class="mock_interviews">Find Mock interviews providing counsellors</div>
    </a>

    <!-- seach part -->
    <div class="search-counsellor">
        <input type="text" name="search-counsellors" id="search-counsellors" placeholder="Search Counsellors"
               onkeyup="counsellor_search(this.value)">
    </div>
    <!-- search part ends here -->

    <div id="total-data">

    </div>
    <!-- counsellor list starts here -->


    <div id="counsellors">

    </div>




    <!-- load more button -->
    <div id="pagination-link">
    </div>


</div>

<!-- footer -->
<?php include './views/Footer.php' ?>

</body>

</html>