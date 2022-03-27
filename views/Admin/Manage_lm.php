<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_lm.css">
    <title>Manage lm</title>
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
        <div class="search-lms">
            <input type="text" name="search-lms" id="search-lms" placeholder="Search Learning Materials" onkeyup="ajaxload(this.value);">
            <!-- <button>Search</button> -->
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_counselling.css">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script defer src="<?php echo URL ?>views/JS/Admin/Manage_counselling.js">

    </script>
    <title>Document</title>
</head>

<body>

<div class="header_div">
    <?php include './views/Header.php' ?>
</div>

<!-- main container -->
<div class="main-container">
    <!--    dashboard part starts here-->
    <div class="left-division">


        <a href="<?php echo URL?>Admin/Admin_home">
            <div class="admin-dashboard-option">

                <div class="dashboard-box-option">
                    <i class="fa fa-dashboard" style="font-size:42px;color:aliceblue"></i>
                    Dashboard
                </div>


            </div>
        </a>

        <div class="admin-options">
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

    <!--    dashboard part ends here-->

    <!--    admin part starts here-->
    <div class="right-division">


        <div class="search-toggle">

            <!--            toggle left-->
            <div class="toggle-dashboard-left">
                <i class='fa fa-chevron-circle-left' style='font-size:40px;color:#003144;margin-top: 2px'></i>
            </div>

            <!--            toggle right-->
            <div class="toggle-dashboard-right">
                <!--                <i class="fa fa-dashboard" style="font-size:38px;color:#003144"></i>-->
                <i class='fa fa-chevron-circle-right' style='font-size:40px;color:#003144'></i>

            </div>


            <!-- search part -->
            <div class="search-counsellor">
                <input type="text" name="search-counsellors" id="search-counsellors" placeholder="Search Counsellors"
                       onkeyup="ajaxload(this.value);">

            </div>
        </div>


        <!-- add counsellors -->
        <div class="add-counsellors">
            <button id = "add-button"><span class="plus">+</span>Add Counsellors</button>
        </div>

        <div id="total-data">

        </div>

        <!-- table
        <div class="table-lms">

        </div> -->

         <!-- table -->
         <div class="table" id="learning_materials_table">
            <table>
                <thead>
                <tr id="columnTopic">
                    <th>Learning Material ID</th>
                    <th>Learning Material link</th>
                    <th>Learning Material Category</th>
                    <th>Learning Material Title</th>
                    <th>Academy Logo</th>
                    <th>Resource Logo</th>

                </tr>
                </thead>

                <tbody id="learningMaterials_tbody">

                </tbody>

                <!-- <tr>
                    <td>1</td>
                    <td>https://www.w3schools.com/html/</td>
                    <td>Tutorials</td>
                    <td>HTML w3 school</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>https://www.youtube.com/watch?v=1Rs2ND1ryYc</td>
                    <td>Videos</td>
                    <td>CSS Tutorial - Zero to Hero (Complete Course)</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>https://www.w3schools.com/js/js_json_intro.asp</td>
                    <td>Tutorials</td>
                    <td>JS JSON w3 school</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>https://www.w3schools.com/angular/</td>
                    <td>Tutorials</td>
                    <td>AngularJS Tutorial</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>https://www.w3schools.com/cpp/default.asp</td>
                    <td>Tutorials</td>
                    <td>C++ Tutorial</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr> -->


            </table>
        </div>

        <!-- table ends here -->

        <!-- load more button -->
        <!-- <div class="load-more">
            <button>Load More</button>
        </div> -->

        <div id="pagination-link">

        </div>

    </div>
    <!--    admin part ends here-->


</div>

    <script src="<?php echo URL ?>views/JS/Manage_lm.js"></script>
</body>

</html>