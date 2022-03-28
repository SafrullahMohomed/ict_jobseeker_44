<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
 <?php include ("views/CSS/Post_job.css" )?>

    </style>
  
  <title>Edit Jobs</title>
</head>
<body>
     <!-- header part with css html js -->
 <div class="header_div" >
        <?php include ("views/Header.php" )?>
</div>
      <!-- header part end  -->

<!-- check user is company or not -->
      <?php if ( isset($_SESSION['User_ID']) && $_SESSION['User_type']=="Company" ): ?>

  

<div class="post_job">
<p> Job Details</p>
<div class="main_container">
  <form name="myForm" id="form"action="<?php echo URL ?>Jobs/Edit_job/update_post_job_data/<?php echo $data['Job_ID']?>" method="post"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
    <label for="Company_name" class="labelfield required">Company Name</label><br>
    <input  id="Companyname" name="Company_name"
    <?php
    if($data['Company_name']!=null) {
      $value= $data['Company_name']; 
    }
    else{
      $value= "";
    }

    if($data['Job_salary']!='0') {
      $data['Job_salary']= $data['Job_salary']; 
    }
    else{
      $data['Job_salary']= "";
    }
    
    ?>
    
    
   value="<?php  echo  $value  ?>" autocomplete="Company_name" onkeyup="passCompanyName(this.value);" placeholder="" class="inputfield " required onfocus=" hideFormError(Company_name_error)"><br>
    <span class="err" id="Company_name_error"><?php echo $data['Company_name_err']?></span><br>


    <label for="Job_Title" class="labelfield required">Job Title</label><br>
    <input value="<?php  echo  $data['Job_title']  ?>" autocomplete type="text" id="JobTitle" name="Job_Title" placeholder="" class="inputfield" required onfocus=" hideFormError(Job_Title_error)"><br>
    <span class="err" id="Job_Title_error"><?php echo $data['Job_Title_err']?></span><br>

    <label for="Job_Category" class="labelfield required">Job Category</label><br>
    <select id="JobCategory" name="Job_Category" class="inputfield" onfocus=" hideFormError(Job_Category_error)" require>
    <option value="" autocomplete selected>Select job category</option> 
        <?php 
        $data_count=count($data['jobCategory']);
       
        for($x = 0; $x < $data_count; $x++  )
        {
          echo "<option value=' " .$data['jobCategory'][$x]['JobCategory_ID'] ." '>" ;
          echo $data['jobCategory'][$x]['JobCategory_name'];
           echo"</option>";
        
        }
        
        ?>

       
      </select>
      <br>
      <span class="err" id="Job_Category_error"><?php echo $data['Job_Category_err']?></span><br>



    <label for="Brief_Description" class="labelfield required"> Brief Description</label><br>
    <textarea  value="<?php  echo $data['Job_description']  ?>"  autocomplete ="on" onkeyup="" id="description" rows="6"  placeholder="Type here small description about the job (qulifications/other)..." class="inputfield" name="Brief_Description" require><?php  echo $data['Job_description']  ?>"</textarea><br>

    <label for="Job_Type" class="labelfield">Job Type</label><br>
    <select  id="JobType" name="Job_Type" class="inputfield">
    <option  value="<?php  echo $data['Job_Type']  ?>"  autocomplete selected ><?php  echo $data['Job_Type']  ?> </option>  
    <option value="Full Time">Full Time</option>
        <option value="Part time">Part time</option>
        <option value="Intern">Intern</option>
      </select><br>

    <label for="Sallary_Offered" class="labelfield">Sallary Offered (Optional)</label><br>
    <input value="<?php  echo $data['Job_salary']  ?>"  autocomplete type="text" id="SallaryOffered" name="Sallary_Offered" placeholder="LKR 50 000 / LKR 20 000-50000" class="inputfield"><br> 

    <!-- <label for="Year_Of_Experience" class="labelfield">Year Of Experience</label><br>
    <input type="text" id="Year_Of_Experience" name="Year_Of_Experience" placeholder="" class="inputfield"><br> -->

    <!-- <label for="Education_Level" class="labelfield">Education Level</label><br>
    <input type="text" id="EducationLevel" name="Education_Level" placeholder="" class="inputfield"><br> -->

    <!-- <label for="Country" class="labelfield">Country</label><br>
    <input type="text" id="Country" name="Country" placeholder="" class="inputfield"><br> -->

    <label for="City" class="labelfield required">District</label><br>
    <select type="text" id="City" name="City" placeholder="" class="inputfield" require><br>
    <option  value="<?php  echo $data['Job_city']  ?>"  autocomplete selected ><?php  echo $data['Job_city']  ?> </option>
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
    
    </select><br>
    <!-- <label for="Full_Address" class="labelfield">Full Address</label><br>
    <input type="text" id="Full_Address" name="Full_Address" placeholder="" class="inputfield"><br> -->

    <label for="Phone_Number" class="labelfield">Phone Number</label><br>
    <input  value="<?php  echo $data['Job_phone_no']  ?>"  autocomplete   type="tel" id="PhoneNumber" name="Phone_Number" placeholder="" class="inputfield"><br>

    <label for="Email" class="labelfield required" >E-mail</label><br>
    <input  value="<?php  echo $data['email']  ?>"  autocomplete  readonly type="email" id="Email" name="Email"require placeholder="" class="inputfield"onfocus=" hideFormError(Email_error)"><br>
    <span class="err" id="Email_error"><?php echo $data['Email_err']?></span><br>

    <!-- <label for="Fax_Number" class="labelfield">Fax Number</label><br>
    <input type="text" id="FaxNumber" name="Fax_Number" placeholder="" class="inputfield"><br> -->

    <label for="Deadline" class="labelfield required">Deadline</label><br>
    <input value="<?php  echo $data['Job_deadline'] ?>"  autocomplete type="date" id="Deadline" name="Deadline"require placeholder="" class="inputfield" onfocus=" hideFormError(Deadline_error)"><br>
    <span class="err" id="Deadline_error"><?php echo $data['Deadline_err']?></span><br>

    <!-- <label for="Company_Logo" class="labelfield">Company_Logo(JPEG/PNG)</label><br>
    <input type="file" id="CompanyLogo" name="Company_Logo" placeholder="" class="inputfield" accept="image/*"><br> -->
    
    <label for="Job_image" class="labelfield">Job post image(JPEG/PNG)</label><br>
    <input value="<?php  echo $data['Job_image'] ?>"  autocomplete  type="file" id="CompanyLogo" name="Job_image" placeholder="" class="inputfield" accept="image/*"><br>

    <div class="radiobutton_class" onmouseover=" hideFormError(Supply_Mock_Interviews_answer_error)">
        <span class="labelfield required">Provide Mock Interviews</span>
     <div class="radiobutton_style">
        <div class="radiobutton_style">
      <input 
      <?php  if ($data['Job_provide_mock_interviews'] =='1'): ?>
        checked
        <?php endif;?>
      
      autocomplete type="radio" id="Supply_Mock_Interviews_yes" name="Supply_Mock_Interviews_answer" required value="Yes" class="radiobutton">
      <label for="Supply_Mock_Interviews_answer" class="radiolabel">Yes</label>
 

      <input 
       <?php  if ($data['Job_provide_mock_interviews'] =='0'): ?>
        checked
        <?php endif;?>
      type="radio" id="Supply_Mock_Interviews_no" name="Supply_Mock_Interviews_answer"required  value="No" class="radiobutton">
      <label for="Supply_Mock_Interviews_answer" class="radiolabel">No</label>
    

        </div>
      
        
</div>
         
        <br>
        <span class="err" id="Supply_Mock_Interviews_answer_error"><?php echo $data['Supply_Mock_Interviews_answer_err']?></span><br>
    </div>

   <!--  <div class="radiobutton_class" onmouseover=" hideFormError(Post_a_forum_answer_error)">
      <span class="labelfield required">Post a forum</span>
    <div class="radiobutton_style">

    <input type="radio" id="Post_a_forum_yes" name="Post_a_forum_answer"required value="Yes" class="radiobutton">
    <label for="Post_a_forum_answer" class="radiolabel">Yes</label>

    <input type="radio" id="Post_a_forum_no" name="Post_a_forum_answer"required value="No" class="radiobutton">
    <label for="Post_a_forum_answer" class="radiolabel">No</label>

     </div> -->
       
        
      <br>
      <span class="err" id="Post_a_forum_answer_error"><?php echo $data['Post_a_forum_answer_err']?></span><br>
  </div>
  <div class="btn">
  <!-- <button type="submit" class="post_New_Job_submit" onclick="successPost()">Post New Job</button> -->
  <button type="submit" class="post_New_Job_submit">Update Job</button>
</div>

   

</form>

</div>

</div>

<?php endif; ?>
<!-- user is not company -->
<?php if ( !isset($_SESSION['User_ID'])||$_SESSION['User_type']!="Company") : ?>
        <div class="login_msg"> Before post a job you should login as a Company</div>
        <a id="a_tag_login" href="<?php echo URL?>Login"><button class="submit_button"id="login_button">Login</button></a>
<?php endif; ?>  

<?php include  ("views/Footer.php" )?>
<script  src="<?php echo URL?>views/JS/Post_job.js"></script>

</body>
</html>


