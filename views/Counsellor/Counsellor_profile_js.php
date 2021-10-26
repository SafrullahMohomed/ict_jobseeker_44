<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Counsellor/Counsellor_profile_js.css" />
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css" />
    <script
      src="https://kit.fontawesome.com/f299a8aeaa.js"
      crossorigin="anonymous"
    ></script>
    <title>cousellor</title>
  </head>
  <body>
    <!-- header part with css html js -->
    <div class="header_div">
      <?php include 'Header.php'?>
    </div>
    <!-- header part end  -->
    <div class="main_container">
      <div class="main_details">
        <!-- profile picture -->
        <div class="picture">
          <img src="/images/counsellor/counselling.png" />
        </div>

        <!-- main details -->
        <div class="main_details_text">
          <div class="name">Mosh&nbsp;Hamedani</div>
          <div class="address detailsText">52,Senayaka Road</div>
          <div class="city detailsText">Colombo 07</div>
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
        <div class="qualificaitons">
          <div class="qualificaitons_text">Qualificaitons</div>
          <div class="qualificaitons_data">
            <div class="qualification_1">qualification 01</div>
            <div class="qualification_2">qualification 02</div>
            <div class="qualification_3">qualification 03</div>
            <div class="qualification_4">qualification 04</div>
          </div>
        </div>

        <!-- Contact Details -->
        <div class="Contact Details">
          <div class="email_text">Email :  <a href="#"> mosh123@gmail.com </a></div>
          <div class="phone_number">+94 71 244 1238</div>
        </div>


        <div class="social_media">
          <div class="social_media_text">Social media</div>
          <div class="social_media_links">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-twitter-square"></i>
          </div>
        </div>
      </div>
    </div>
    <?php include 'Footer.php'?>
  </body>
</html>
