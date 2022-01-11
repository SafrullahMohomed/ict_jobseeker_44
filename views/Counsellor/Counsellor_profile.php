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
    <title>cousellor</title>
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
            <div class="name">Mosh&nbsp;Hamedani</div>
            <div class="full_address">
                <div class="address detailsText">84, Anagarika Dharmapala Mawatha</div>
                <div class="city detailsText">Matara</div>
            </div>
        </div>
    </div>

    <!-- mock interviews provide -->
    <div class="mi_provider">
        <div class="mk_interview">Mock interview provide</div>
        <div class="tick">
            <i class="fa fa-times-circle" style="font-size: 40px; color: red"></i>
        </div>
    </div>

    <div class="description">
        As a counsellor I would like to provide counselling services to
        jobseekers or any others who willing to take counselling. Lorem ipsum
        dolor sit amet consectetur adipisicing elit. Delectus dolor quod vitae
        voluptatem cupiditate temporibus dolorum natus commodi quo tenetur,
        itaque ullam, officiis autem quos porro nihil minima libero, corrupti
        vero. Inventore omnis adipisci fugiat, officiis tempore odit incidunt
        officia repellat dolore expedita quas aspernatur, amet sit sunt at eius.
    </div>
    <div class="sub_parts">

        <!-- Qualifications -->
        <div class="qualifications subhead">
            <div class="qualifications_text subhead_text">Qualifications</div>
            <div class="qualifications_data">
                <ul>
                    <li>
                        qualification 01
                    </li>
                    <li>
                        qualification 02
                    </li>
                    <li>
                        qualification 03
                    </li>
                    <li>
                        qualification 04
                    </li>
                </ul>


            </div>
        </div>

        <!-- Contact Details -->
        <div class="Contact_details subhead">
            <div class="Contact_text subhead_text">Contact Details</div>
            <div class="qualificaitons_data">
                <div class="email_text">Email&nbsp;:&nbsp;<a href="#" id="counsellor_email"> mosh123@gmail.com </a>
                </div>
                <div class="phone_number">Contact&nbsp;NO&nbsp;:&nbsp;+94 71 244 1238</div>
            </div>


            <div class="social_media subhead">
                <div class="social_media_text subhead_text">Social media</div>
                <div class="social_media_links">
                    <a href="" id="facebook_icon"><i class="fab fa-facebook-square"></i></a>
                    <a href="" id="linkedin_icon"><i class="fab fa-linkedin"></i></a>
                    <a href="" id="twitter_icon"><i class="fab fa-twitter-square"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include './views/Footer.php' ?>
</body>
<!-- footer -->


</html>

