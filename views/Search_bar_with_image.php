<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html> 

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    
     <style>

    <?php include "CSS/Home.css" ?>
    <?php include "CSS/normalize.css" ?>

     </style>
    
   <!--  <link rel="stylesheet" href="C:/xampp new/htdocs/ict_jobseeker_44/views/CSS/Home.css"/> -->
  
    <!-- link to font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script   src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script   src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script   src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
   
  </head>
<body>


</body>
<div class="job-search-box">
        <div class="search-your-keywords">
          <input
            type="text"
            name="Search your keyword"
            placeholder="Search your keyword"
          />
        </div>
        <div class="category">
          <select name="Category">
            <option value="none" selected disabled hidden>
              <span id="category-id-home">Select a Catogory</span>
            </option>
            <option value="Software Engineering">Software Engineering</option>
            <option value="Qaulity Assurance">Qaulity Assurance</option>
            <option value="Frontend Developing">Frontend Developing</option>
            <option value="Backend Developing">Backend Developing</option>
            <option value="Senior Sofware Engineering">
              Senior Sofware Engineering
            </option>
            <option value="Fullstack developing">Fullstack developing</option>
            <option value="Data Science">Data Science</option>
          </select>
        </div>
        <div class="location">
          <input type="text" name="location" placeholder="location" />
        </div>
        <div class="search-button">
          <button type="submit">Search</button>
        </div>
      </div>
    </div>

  </html>