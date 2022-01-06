<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_companies.css">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script defer src="<?php echo URL ?>views/JS/Admin/Manage_companies.js">

    </script>
    <title>Manage Companies</title>
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
            <div class="search-company">
                <input type="text" name="search-companies" id="search-companies" placeholder="Search Companies"
                       onkeyup="ajaxload(this.value);">

            </div>
        </div>


        <!-- add companies -->
        <div class="add-companies">
            <button id = "add-button"><span class="plus">+</span>Add Company</button>
        </div>

        <div id="total-data">

        </div>

        <!-- table -->
        <div class="Table" id="company_table">
            <table>
                <thead>
                <tr id="columnTopic">
                    <th>ID</th>
                    <th>Email</th>
                    <th>Company Name</th>
                    <th>Total Job Posts</th>
                    <th>Phone Number</th>
                    <th>Actions</th>

                </tr>
                </thead>

                <tbody id="company_tbody">


                </tbody>


            </table>
        </div>

        <!-- table ends here -->


        <!-- pagination link -->
        <div id="pagination-link">
        </div>

    </div>
    <!--    admin part ends here-->


</div>

<?php include './views/Footer.php' ?>


</body>

</html>