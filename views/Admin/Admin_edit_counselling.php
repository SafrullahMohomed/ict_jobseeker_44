<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Counsellor/Counsellor_account.css" />
  <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css" />
  <title>Document</title>
</head>

 <div class="header_div" >
        <?php include './views/Header.php'?>
</div>
</div>


<body>
  <!-- title field starts here -->
  <div class="title_text">
    <div class="text1">Edit Counsellor Profile</div>
    <div class="text2"></div>
  </div>

  <!-- title field ends here -->

  <!-- counsellor form field starts here -->
  <form action="/" method="get" id="contact_form">
    <div class="counsellor_form">
      <!-- profile picture -->
      <div class="profilePic">
        <div class="profilePic_image">
          <img src="/ict_jobseeker_44/views/images/Counsellor/Counselling.png" alt="image for profile picture" />
        </div>
        <div class="image_insertion">
          <label for="profilePic">Profile Picture</label>
          <br />
          <input type="file" name="profilePicture" id="profilePicture" accept="image/*" />
        </div>
      </div>

      <!-- first name -->
      <div class="firstName inp">
        <label for="firstName">First Name</label>
        <br />
        <input type="text" name="firstName" id="firstName" />
      </div>
      <!-- last name  -->
      <div class="lastName inp">
        <label for="lastName">Last Name</label>
        <br />
        <input type="text" name="lastName" id="lastName" required />
      </div>

      <!-- email -->
      <div class="email inp">
        <label for="email">Email</label>
        <br />
        <input type="email" name="email" id="email" required />
      </div>


      <!-- phone number -->
      <div class="phoneNumber inp">
        <label for="phoneNumber">Phone Number</label>
        <br />
        <input type="tel" name="phoneNumber" id="phoneNumber" />
      </div>

      <!-- Address -->
      <div class="address inp">
        <label for="address">Address</label>
        <br />
        <input type="text" name="Address" id="firstName" />
      </div>

      <!-- city -->
      <div class="city inp">
        <label for="city">City</label>
        <br />
        <input type="text" name="city" id="city" />
      </div>

      <!-- Qualification -->
      <div class="qualification inp">
        <label for="qualification">Qualification</label>
        <br />
        <input type="text" name="quaulification" id="qualification" />
      </div>

      <!--  -->

      <?php include "../richtext.php" ?>


      <!-- Facebook -->
      <div class="facebook inp">
        <label for="facebook">Facebook</label>
        <br />
        <input type="url" name="facebook" id="facebook" />
      </div>

      <!-- LinkedIn -->
      <div class="linkedin inp">
        <label for="linkedin">LinkedIn</label>
        <br />
        <input type="text" name="linkedin" id="linkedin" />
      </div>

      <!-- Twitter -->
      <div class="twitter inp">
        <label for="twitter">Twitter</label>
        <br />
        <input type="text" name="twitter" id="twitter" />
      </div>


      <!-- About You -->
      <div class="aboutYou inp">
        <label for="aboutYou">About You</label>
        <br />
        <textarea name="aboutYou" id="aboutYou" cols="30" rows="10"></textarea>
      </div>

      <!-- add another qualifications button
        <div class="add-another">
          <button type="button">
            <span class="plus_for_button"> + </span>Add another qualification
          </button>
        </div> -->


    </div>
  </form>

  <!-- next, back buttons -->

  <div class="cu_buttons">
    <a href="<?php echo URL ?>Admin/Manage_counselling">
      <div class="cancel">
        <button class="cancel" form="myForm">Cancel</button>
      </div>
    </a>
    <div class="update">
      <button type="submit" form="contact_form">Update</button>
    </div>
  </div>

  <!-- next, back buttons ends here -->
  <?php include './views/Footer.php' ?>
  <script src="<?php echo URL ?>views/JS/Post_contract.js"></script>
</body>

</html>