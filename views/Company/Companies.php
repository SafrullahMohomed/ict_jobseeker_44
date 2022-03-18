<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

<?php include "views/CSS/Company/Companies.css" ?>


 </style>
   
    <title>company main page</title>
</head>
<body onload="all_companies()">
   <!-- header part with css html js -->
   <div class="header_div" >
        <?php include 'views/Header.php'?>
</div>
      <!-- header part end -->
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
              placeholder="Company Name"
            />
          </div>
          <div class="category">
            <select name="Category">
              <option value="none" selected disabled hidden>
                <span id="category-id-home">Select a City</span>
              </option>
              <option value="Ampara ">Ampara  </option>
              <option value="Anuradhapura ">Anuradhapura </option>
              <option value="Badulla ">Badulla </option>
              <option value="Batticaloa ">Batticaloa </option>
              <option value="Colombo">Colombo</option>
              <option value="Galle  ">Galle  </option>
              <option value="Gampaha">Gampaha</option>
              <option value="Hambanthota ">Hambanthota </option>
              <option value="Jaffna  ">Jaffna  </option>
              <option value="Kaluthara ">Kaluthara </option>
              <option value="Kandy  ">Kandy  </option>
              <option value="Kegalle ">Kegalle </option>
              <option value="Kilinochchi ">Kilinochchi </option>
              <option value="Kurunegala ">Kurunegala </option>
              <option value="Mannar ">Mannar </option>
              <option value="Matale  ">Matale  </option>
              <option value="Matara ">Matara </option>
              <option value="Monaragala ">Monaragala </option>
              <option value="Mulathivu  ">Mulathivu  </option>
              <option value="Nuwera Eliya ">Nuwera Eliya </option>
              <option value=" Polonnaruwa "> Polonnaruwa </option>
              <option value="Puttalam ">Puttalam </option>
              <option value="Rathnapura ">Rathnapura </option>
              <option value="Trincomalee  ">Trincomalee </option>
              <option value="Vauniya ">Vauniya </option>
              
            </select>
          </div>
          <div class="search-button">
            <button type="submit" >Search</button>
          </div>
        </div> 
       
      </div>
      <div class="Trending">Companies</div>
      
      <div class="company">
     
      </div>
      
      <?php include 'views/Footer.php'?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script  src="<?php echo URL?>views/JS/Companies.js"></script>
      <script src = "companies_search.js"></script>
</body>
</html>