<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
 <?php include "CSS/Post_job.css" ?>

    </style>
  
  <title>Post Jobs</title>
</head>
<body>
     <!-- header part with css html js -->
 <div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
  <div class="post_job_description" style="background-image:url('<?php echo URL?>views/images/Post_job/1.png');" >
    <div class="post_job_description_left">

      <div class="post_job_description_left_text">If you are NEW <br>
        try with our initial <br>
        SIX-month
         <br>
         FREE trial<br> and get more<br> and more benefits.<br>Oh!!! Do not worry,<br>otherwise
          you can go with <br>flexible packages</div>

              <button  class="post_job_description_left_button">FREE Trial</button>
        
              <button class="post_job_description_left_button">Pay</button>
    </div>
    

<div class="post_job_description_text">It is time to post your new job </div>

  </div>

<div class="post_job">
<p> Job Details</p>
<div class="main_container">
  <form>
    <label for="Company_name" class="labelfield">Company Name</label><br>
    <input type="text" id="Companyname" name="Company_name" placeholder="" class="inputfield"><br>

    <label for="Job_Title" class="labelfield">Job Title</label><br>
    <input type="text" id="JobTitle" name="Job_Title" placeholder="" class="inputfield"><br>

    <label for="Job_Category" class="labelfield">Job Category</label><br>
    <select id="JobCategory" name="Job_Category" class="inputfield">
        <option value="Type1">Type1</option>
        <option value="Type2">Type2</option>
        <option value="Type3">Type3</option>
      </select>
      <br>



    <label for="Brief_Description" class="labelfield"> Brief Description</label><br>
    <textarea  id="description" rows="6"  placeholder="Type here small description about the job (qulifications/other)..." class="inputfield" required></textarea><br>

    <label for="Job_Type" class="labelfield">Job Type</label><br>
    <select id="JobType" name="Job_Type" class="inputfield">
        <option value="Type1">Full Time</option>
        <option value="Type2">Part time</option>
        <option value="Type3">Intern</option>
      </select><br>

    <label for="Sallary_Offered" class="labelfield">Sallary Offered</label><br>
    <input type="text" id="SallaryOffered" name="Sallary_Offered" placeholder="LKR 50 000 / LKR 20 000-50000" class="inputfield"><br>

    <label for="Year_Of_Experience" class="labelfield">Year Of Experience</label><br>
    <input type="text" id="Year_Of_Experience" name="Year Of Experience" placeholder="" class="inputfield"><br>

    <label for="Education_Level" class="labelfield">Education Level</label><br>
    <input type="text" id="EducationLevel" name="Education_Level" placeholder="" class="inputfield"><br>

    <label for="Country" class="labelfield">Country</label><br>
    <input type="text" id="Country" name="Country" placeholder="" class="inputfield"><br>

    <label for="City" class="labelfield">City</label><br>
    <input type="text" id="City" name="City" placeholder="" class="inputfield"><br>

    <label for="Full_Address" class="labelfield">Full Address</label><br>
    <input type="text" id="Full_Address" name="Full_Address" placeholder="" class="inputfield"><br>

    <label for="Phone_Number" class="labelfield">Phone Number</label><br>
    <input type="text" id="PhoneNumber" name="Phone_Number" placeholder="" class="inputfield"><br>

    <label for="Email" class="labelfield">E-mail</label><br>
    <input type="email" id="Email" name="Email" placeholder="" class="inputfield"><br>

    <label for="Fax_Number" class="labelfield">Fax Number</label><br>
    <input type="text" id="FaxNumber" name="Fax_Number" placeholder="" class="inputfield"><br>

    <label for="Deadline" class="labelfield">Deadline</label><br>
    <input type="date" id="Deadline" name="Deadline" placeholder="" class="inputfield"><br>
   
    <label for="Company_Logo" class="labelfield">Company_Logo(JPEG/PNG)</label><br>
    <input type="file" id="CompanyLogo" name="Company_Logo" placeholder="" class="inputfield" accept="image/*"><br>
    
    <label for="job_image" class="labelfield">Job post image(JPEG/PNG)</label><br>
    <input type="file" id="CompanyLogo" name="job_image" placeholder="" class="inputfield" accept="image/*"><br>



    <div class="radiobutton_class">
        <span class="labelfield">Urgent</span>




          <div class="radiobutton_style">
          <input type="radio" id="urgent_yes" name="urgent_answer" value="Yes" class="radiobutton">
            <label for="urgent_answer" class="radiolabel">Yes</label>
      
            <input type="radio" id="urgent_no" name="urgent_answer" value="No" class="radiobutton">
            <label for="urgent_answer" class="radiolabel">No</label>

        </div>
          
          
        <br>


    </div>
    <div class="radiobutton_class">
        <span class="labelfield">Supply Mock Interviews</span>
<div class="radiobutton_style">
        <div class="radiobutton_style">
<input type="radio" id="Supply_Mock_Interviews_yes" name="Supply_Mock_Interviews_answer" value="Yes" class="radiobutton">
      <label for="Supply_Mock_Interviews_answer" class="radiolabel">Yes</label>

      <input type="radio" id="Supply_Mock_Interviews_no" name="Supply_Mock_Interviews_answer" value="No" class="radiobutton">
      <label for="Supply_Mock_Interviews_answer" class="radiolabel">No</label>
    

        </div>
      

</div>
         
        <br>

    </div>

    <div class="radiobutton_class">
      <span class="labelfield">Post a forum</span>
<div class="radiobutton_style">
  <input type="radio" id="Post_a_forum_yes" name="Post_a_forum_answer" value="Yes" class="radiobutton">
    <label for="Post_a_forum_answer" class="radiolabel">Yes</label>

    <input type="radio" id="Post_a_forum_no" name="Post_a_forum_answer" value="No" class="radiobutton">
    <label for="Post_a_forum_answer" class="radiolabel">No</label>

</div>
       
        
      <br>

  </div>
   
   

</form>
<div class="btn">
  <button type="submit" class="post_New_Job_submit" onclick="successPost()">Post New Job</button>
</div>
</div>

</div>
<?php include 'Footer.php'?>
<script  src="<?php echo URL?>views/JS/Post_job.js"></script>

</body>
</html>


