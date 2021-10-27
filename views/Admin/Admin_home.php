<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Admin_home.css" />
  <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css" />


  <title>Document</title>
</head>
<!-- header part with css html js -->
<!-- <div class="header_div">
 
</div> -->
<!-- header part end  -->

<body>

  <div class="main-container">
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
</body>

</html>