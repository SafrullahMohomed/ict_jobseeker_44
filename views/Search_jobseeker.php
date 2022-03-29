
<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

<?php include "CSS/Search_jobseeker.css" ?>


 </style>
   
    <title>Applied Jobseekers</title>
</head>
<body onload="load_jobseeker(<?php echo $data; ?>)">
   <!-- header part with css html js -->
   <div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
    <div class="resource-search-part">
        <div class="theme-image">
       
     <img src='<?php echo URL ?>views/images/Companies/hometheme.jpg' > 
    
          
        </div>
        <!-- theme image ends here -->
       <div class="resource-search-box">
          <div class="search-your-keywords">
            <input
              type="text"
              name="Search your keyword"
              placeholder="Jobseeker name/Qulification"
            />
          </div>
         <!--  <div class="category">
            <select name="Category">
              <option value="none" selected disabled hidden>
                <span id="category-id-home">Select a City</span>
              </option>
              <option value="Tutorials">Colombo</option>
              <option value="Videos">Matara</option>
              <option value="Videos">Galle</option>
              <option value="Videos">Kandy</option>
              <option value="Videos">Anuradhapura</option>
              <option value="Videos">Jaffna</option>
              
            </select>
          </div> -->
          <div class="search-button">
            <button type="submit" >Search</button>
          </div>
        </div> 
       
      </div>
      <p class="Trending_title">Applied Jobseekers</p>
      <div class="Trending"></div>
       
      <!-- load data from db -->
      </div>
      <?php include 'Footer.php'?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="<?php echo URL ?>views/JS/Search_jobseeker.js"></script>
      <script src = "companies_search.js"></script>
</body>
</html>