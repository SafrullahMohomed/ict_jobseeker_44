<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "CSS/LearningMaterials.css" ?> 
    </style>
    <title>Learning Materials</title>
</head>
<body>
    <div class="header_div" >
        <?php include 'Header.php'?>
    </div>
    <div class="resource-search-part">
        <div class="theme-image">
          <img src='<?php echo URL ?>views/images/LearningMaterials/hometheme.jpg' >
        </div>
        <!-- theme image ends here -->
        <div class="resource-search-box">
          <div class="search-your-keywords">
            <input
              type="text"
              name="Search your keyword"
              placeholder="Search your resource"
            />
          </div>
          <div class="category">
            <select name="Category">
              <option value="none" selected disabled hidden>
                <span id="category-id-home">Select a Catogory</span>
              </option>
              <option value="Tutorials">Tutorials</option>
              <option value="Videos">Videos</option>
              <!-- <option value="Exercises">Exercises</option>
              <option value="Quizes">Quizes</option> -->
            </select>
          </div>
          <div class="search-button">
            <button type="submit">Search</button>
          </div>
        </div>
      </div>
      <div class="Trending">Top Trending Resources</div>
      <div class="ResourceRow">
          <div class="Academy">
            <img src='<?php echo URL ?>views/images/LearningMaterials/w3.png' >
          </div>
          <div class="Tutorial">
              HTML Tutorial
          </div>
          <div class="Lesson">
            <img src='<?php echo URL ?>views/images/LearningMaterials/html.png' >
          </div>
      </div>
      <div class="ResourceRow">
        <div class="Academy">
          <img src='<?php echo URL ?>views/images/LearningMaterials/JavaT.png' >
        </div>
        <div class="Tutorial">
            Java Script Tutorial
        </div>
        <div class="Lesson">
          <img src='<?php echo URL ?>views/images/LearningMaterials/js.png' >
        </div>
      </div>
        <div class="ResourceRow">
            <div class="Academy">
              <img src='<?php echo URL ?>views/images/LearningMaterials/gg.jpg' >
            </div>
            <div class="Tutorial">
                CSS Tutorial
            </div>
            <div class="Lesson">
              <img src='<?php echo URL ?>views/images/LearningMaterials/css3-.png' >
            </div>
        </div>
      <!-- <div class="resource-boxes">
        <div class="first-row">
          <div class="Resource"><a href="#" id="link">Tutorials</a></div>
          <div class="Resource"><a href="#" id="link">Videos</a></div>
        </div> -->
        <!-- <div class="second-row">
          <div class="Resource"><a href="#" id="link">Exercises</a></div>
          <div class="Resource"><a href="#" id="link">Quizes</a></div>
        </div> -->
      </div>
      <?php include 'Footer.php'?>
    <script src="<?php echo URL ?>views/JS/LearningMaterials.js"></script>
</body>
</html>