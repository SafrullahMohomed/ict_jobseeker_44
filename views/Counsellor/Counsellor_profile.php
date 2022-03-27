<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Counsellor/Counsellor_profile.css"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css"/>
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <script defer src="<?php echo URL ?>views/JS/Counsellor/Counsellor_profile.js"></script>
    <title>Counsellor</title>
</head>

<body>
<!-- header part with css html js -->
<?php include './views/Header.php' ?>
<!-- header part end  -->
<div class="main_container">

    <!-- edit your profile -->
    <div class="edit_profile">
        <button id="edit-profile-button">Edit your profile</button>
    </div>


    <div class="main_details">
        <!-- profile picture -->
        <div class="picture">
            <img src="/ict_jobseeker_44/views/images/Counsellor/Counselling.png"/>
        </div>

        <!-- main details -->
        <div class="main_details_text">
            <div class="name"><?php echo $data['First_name']?> <?php echo $data['Last_name']?></div>
            <div class="full_address">
                <div class="address detailsText"><?php echo $data['Address']?></div>
                <div class="city detailsText"><?php echo $data['City']?></div>
            </div>
        </div>
    </div>

    <!-- mock interviews provide -->
    <div class="mi_provider">
        <div class="mk_interview">Mock interview provide</div>
        <div class="tick">
            <?php if ($data['Counsellor_provide_mock_interviews'] == 'yes'){
                echo "<i class='fa fa-check-circle' style='font-size: 40px; color:green;'></i>";
            }else{
                echo "<i class='fa fa-times-circle' style='font-size: 40px; color: red'></i>";
            }   ?>
        </div>
    </div>

    <div class="description">
        <?php echo $data['Description']?>
    </div>
    <div class="sub_parts">

        <p hidden="hidden" id = 'quaulifications_uf'><?php echo $data['Qualifications'] ;?></p>
        <!-- Qualifications -->
        <div class="qualifications subhead">
            <div class="qualifications_text subhead_text">Qualifications</div>
            <div class="qualifications_data">

            </div>
        </div>

        <!-- Contact Details -->
        <div class="Contact_details subhead">
            <div class="Contact_text subhead_text">Contact Details</div>
            <div class="qualificaitons_data">
                <div class="email_text">Email&nbsp;:&nbsp;<a href="#" id="counsellor_email"> <?php echo $data['Email'] ;?> </a>
                </div>
                <div class="phone_number">Contact&nbsp;NO&nbsp;:&nbsp;<?php echo $data['Phone_number'] ;?></div>
            </div>


            <div class="social_media subhead">
                <div class="social_media_text subhead_text">Social media</div>
                <div class="social_media_links">
                    <a href="<?php echo $data['Facebook'] ;?>" target="_blank" id="facebook_icon"><i class="fab fa-facebook-square"></i></a>
                    <a href="<?php echo $data['Linkedin'] ;?>" target="_blank" id="linkedin_icon"><i class="fab fa-linkedin"></i></a>
                    <a href="<?php echo $data['Twitter'] ;?>"  target="_blank" id="twitter_icon"><i class="fab fa-twitter-square"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include './views/Footer.php' ?>
</body>
<!-- footer -->


</html>

?>