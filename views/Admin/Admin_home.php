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
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script defer src="<?php echo URL ?>views/JS/Admin/Admin_home.js"></script>

    <title>Document</title>
</head>
<!-- header part with css html js -->
<div class="header_div">
    <?php include './views/Header.php' ?>

</div>
<!-- header part end  -->

<body>


<div class="main-container">


    <!-- admin dashboard starts here-->
    <div class="left-division">

        <a href="<?php echo URL ?>Admin/Admin_home">
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
    <!-- admin dashboard ends here -->


    <!-- admin details starts here -->
    <div class="right-division">
        <div class="dashboard-content">
            <div class="main-part">
                <div class="cpanel">
                    <div class="icon-part">
                        <i class="fa fa-users" aria-hidden="true"></i><br>
                        Jobseekers
                        <p id="jobseeker-count"></p>
                    </div>

                </div>
                <div class="cpanel cpanel-green">
                    <div class="icon-part">
                        <i class="fa fa-money" aria-hidden="true"></i><br>
                        Jobs
                        <p id="job-count"></p>
                    </div>

                </div>
                <div class="cpanel cpanel-orange">
                    <div class="icon-part">
                        <i class="fa fa-id-card" aria-hidden="true"></i><br>
                        Companies
                        <p id="company-count"></p>
                    </div>

                </div>
                <div class="cpanel cpanel-blue">
                    <div class="icon-part">
                        <i class="fa fa-tasks" aria-hidden="true"></i><br>
                        Contracts
                        <p id="contract-count"></p>
                    </div>

                </div>
                <div class="cpanel cpanel-red">
                    <div class="icon-part">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
                        Contract Providers
                        <p id="cp-count"></p>
                    </div>

                </div>
                <div class="cpanel cpanel-skyblue">
                    <div class="icon-part">
                        <i class="fa fa-comments" aria-hidden="true"></i><br>
                        Counsellors
                        <p id="counsellor-count"></p>
                    </div>

                </div>
            </div>
        </div>
        <!-- admin details ends here -->

        <!--        graphs starts here-->
        <div class="graphs_div">
            <!--       category graph starts here -->
            <div class="category_graph_div">
                <!--            job category count-->
                <div class="graph_data" id="job_category">
                    <canvas id="job_category_chart" width="350px" height="350px"></canvas>
                </div>

                <!--            contract category count-->
                <div class="graph_data" id="contract_category">
                    <canvas id="contract_category_chart" width="400px" height="400px"></canvas>
                </div>
            </div>
            <!--            category graph ends here -->

            <!--           monthly user registered count -->
            <div class="graph_second_row">
                <div id="user_monthly_data">
                    <form id="user_year_form" action="http://localhost/ict_jobseeker_44/Admin/get_monthly_user_registered" method="post">
                        <!--from date/time-->
                        <label for="year">Select the year</label>
                        <input type="number" id="user_year" name="user_year" value="2021">

                        <button type="submit" id="user_year_but" name="user_year_but">See the graph</button>
                    </form>
                    <div class="job_category">
                        <canvas id="monthly-user-count" width="400px" height="200px"></canvas>
                    </div>
                </div>
            </div>

            <!--           monthly user registered count ends here -->

        </div>


        <div id="reportGen">
            <form action="http://localhost/ict_jobseeker_44/Admin/Report_generator" method="post">
                <!--from date/time-->
                <label for="from-date">from</label>
                <input type="datetime-local" id="from-date" , name="from-date"> <br>

                <!--to date/time-->
                <label for="to-date">from</label>
                <input type="datetime-local" id="to-date" , name="to-date"> <br>
                <button type="submit" id="reportGen" name="reportGen">Generate Report</button>

            </form>
        </div>

    </div>


</div>


</body>

<?php include './views/Footer.php' ?>

</html>