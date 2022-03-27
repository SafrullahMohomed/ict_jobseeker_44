<?php if ( empty(session_id()) ) session_start(); ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="" content="">
  ​<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contract</title>
   <link rel="stylesheet" href="contract.css">
   <style>

<?php include "CSS/Contracts_main_page.css" ?>
 </style>
   <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
</head>


<body >
      <!-- header part with css html js -->
      <div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->

   <!--search bar start-->
   <div class="resource-search-part">
        <div class="theme-image">
       
     <img src='<?php echo URL ?>views/images/Companies/hometheme.jpg' > 
    
          
        </div>
       <!-- theme image start here -->
      <div class="job-search-box">
        <div class="search-your-keywords">
          <input
            type="text"
            name="Search your keyword"
            placeholder="Search for a contract"
            onkeyup="ajaxload(this.value);"
          />
        </div>
        <div class="category">
        <select name="Category"  onchange="ajaxload(this.value);" >
                    <option value="none" selected disabled hidden>
                        <span id="category-id-home">Select a Catogory</span>
                    </option>
                    <?php 
        $data_count=count($data['ContractCategory']);
      
        for($x = 0; $x < $data_count; $x++  )
        {
          echo "<option value=' " .$data['ContractCategory'][$x]['Contract_category'] ." '>" ;
          echo $data['ContractCategory'][$x]['Contract_category'];
          echo"</option>";
        
        }
        
        ?>
                </select>
          
        </div>
        <!-- <div class="location">
          <input type="text" name="location" placeholder="location" />
        </div> -->
        <!-- <div class="search-button">
          <button type="submit">Search</button>
        </div> -->
      </div>
    </div>
    <!-- themes image and job search part ends here -->

  <div class="main_container" id="main_container">
  <!--   Top trending contracts category start -->
  <div class="top_trending_categories_title" id="title">Top Trending Categories </div>
  <div class="top_trending_categories_container" id="top_trending_categories_container">
   
  <!-- load top contract categories from database -->
    </div>
    <!-- top trending category contracts end -->
    <!-- features contracts start -->
<div class="features_contract">

<div class="features_contract_row">
<!-- load data from  database -->
</div>
 
<!-- contract row start -->

<!-- contract row end -->

  </div>
<!-- pagination link -->
<div id="pagination-link">
        </div>
  <!-- Footer part with css html js -->
  <div class="Footer_div" >
        <?php include 'Footer.php'?>
</div>
      <!-- Footer part end  -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="<?php echo URL?>views/JS/Contracts_main_page.js"></script>
 
</body>
</html>