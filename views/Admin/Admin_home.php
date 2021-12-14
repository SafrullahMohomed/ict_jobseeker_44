<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Admin_home.css"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<!-- header part with css html js -->
<div class="header_div">
    <?php include './views/Header.php' ?>

</div>
<!-- header part end  -->

<body>

<!-- admin dashboard starts here -->

<div class="dashboard">
    <div class="main-part">
        <div class="cpanel">
            <div class="icon-part">
                <i class="fa fa-users" aria-hidden="true"></i><br>
                <small>Jobseekers</small>
                <p>28560</p>
            </div>

        </div>
        <div class="cpanel cpanel-green">
            <div class="icon-part">
                <i class="fa fa-money" aria-hidden="true"></i><br>
                <small>Jobs</small>
                <p>1250</p>
            </div>

        </div>
        <div class="cpanel cpanel-orange">
            <div class="icon-part">
                <i class="fa fa-id-card" aria-hidden="true"></i><br>
                <small>Companies</small>
                <p>55</p>
            </div>

        </div>
        <div class="cpanel cpanel-blue">
            <div class="icon-part">
                <i class="fa fa-tasks" aria-hidden="true"></i><br>
                <small>Contracts</small>
                <p>198</p>
            </div>

        </div>
        <div class="cpanel cpanel-red">
            <div class="icon-part">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
                <small>Contract Providers</small>
                <p>110</p>
            </div>

        </div>
        <div class="cpanel cpanel-skyblue">
            <div class="icon-part">
                <i class="fa fa-comments" aria-hidden="true"></i><br>
                <small>Counsellors</small>
                <p>20</p>
            </div>

        </div>
    </div>
</div>
<!-- admin dashboard ends here -->

<div class="main-container">



    <!-- admin boxes starts here-->
    <div class="admin-boxes">
        <div class="first-row">
            <a href="<?php echo URL ?>Admin/Manage_jobseeker">
                <div class="manage_jobseekers box">Manage Jobseekers</div>
            </a>
            <a href="<?php echo URL ?>Admin/Manage_jobs">
                <div class="manage_jobs box">Manage Jobs</div>
            </a>
            <a href="<?php echo URL ?>Admin/Manage_companies">
                <div class="manage_companies box">Manage Companies</div>
            </a>
            <a href="<?php echo URL ?>Admin/Manage_contracts">
                <div class="manage_contracts box">Manage Contracts</div>
            </a>
            <a href="<?php echo URL ?>Admin/Manage_resume">
                <div class="manage_resume box">Manage Resume</div>
            </a>
        </div>

        <div class="second-row">
            <a href="<?php echo URL ?>Admin/Manage_cp">
                <div class="manage_contract_providers box">
                    Manage Contract Providers
                </div>
            </a>
            <a href="<?php echo URL ?>Admin/Manage_counselling">
                <div class="manage_counsellor box">Manage Counselling</div>
            </a>
            <a href="<?php echo URL ?>Admin/Manage_chat">
                <div class="chat_messages box">Chat Messages</div>
            </a>
            <a href="<?php echo URL ?>Admin/Manage_lm">
                <div class="manage_lm box">Manage Learning Materials</div>
            </a>
        </div>
    </div>
    <!-- admin boxes ends here -->
</div>

</body>

<?php include './views/Footer.php' ?>

</html>