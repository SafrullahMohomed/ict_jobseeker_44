<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Admin_add_counselling.css"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css"/>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!--    include script-->
    <script defer src="<?php echo URL ?>views/JS/Admin/Admin_add/Admin_add_counselling.js"></script>

    <title>Document</title>
</head>

<div class="header_div">
    <?php include './views/Header.php' ?>
</div>


<body>
<!-- title field starts here -->
<div class="title_text">
    <div class="text1">Add a counsellor</div>
    <!-- <div class="text2">update your profile</div> -->
</div>

<!-- title field ends here -->

<!-- counsellor form field starts here -->
<form action="http:/ict_jobseeker_44/Admin/Admin_add_counselling/insert_counsellor_admin" method="post"
      id="admin_counsellor_form" name="admin_counsellor_form">
    <div class="counsellor_form">
        <!-- profile picture -->
        <div class="profilePic">
            <div class="profilePic_image">
                <img src="/ict_jobseeker_44/views/images/Counsellor/Counselling.png" alt="image for profile picture"/>
            </div>
            <div class="image_insertion">
                <label for="profilePic">Profile Picture</label>
                <br/>
                <input type="file" name="profilePicture" id="profilePicture" accept="image/*"/>
            </div>
        </div>

        <!-- first name -->
        <div class="firstName inp">
            <label for="firstName">First Name</label>
            <br/>
            <input type="text" name="firstName" id="firstName" onfocus="hideFormError(firstName_error)" required/>
            <span id="firstName_error" class="input_error"></span>
        </div>

        <!-- last name  -->
        <div class="lastName inp">
            <label for="lastName">Last Name</label>
            <br/>
            <input type="text" name="lastName" id="lastName" onfocus="hideFormError(lastName_error)" required/>
            <span id="lastName_error" class="input_error"></span>
        </div>

        <!-- email -->
        <div class="email inp">
            <label for="email">Email</label>
            <br/>
            <input type="email" name="email" id="email" onfocus="hideFormError(email_error)" required/>
            <span id="email_error" class="input_error"></span>
        </div>


        <!-- phone number -->
        <div class="phoneNumber inp">
            <label for="phoneNumber">Phone Number</label>
            <br/>
            <input type="tel" name="phoneNumber" id="phoneNumber" onfocus="hideFormError(phoneNumber_error)"/>
            <span id="phoneNumber_error" class="input_error"></span>
        </div>


        <!-- Address -->
        <div class="address inp">
            <label for="address">Address</label>
            <br/>
            <input type="text" name="address" id="firstName"/>
        </div>


        <!-- city -->
        <div class="city inp">
            <label for="city">City</label>
            <br/>
            <input type="text" name="city" id="city"/>
        </div>

        <!-- Qualification -->


        <div class="qualification inp">
            <label for="qualification">Qualification</label>
            <br/>
            <button
                    type="button"
                    data-command="insertUnorderedList"
                    id="qualification_button"
            >
                <i class="fa fa-list-ul"></i>
            </button>
            <br>
            <textarea name="qualification_box" id="qualification_box" contenteditable="true"></textarea>
        </div>


        <!-- Facebook -->
        <div class="facebook inp">
            <label for="facebook">Facebook</label>
            <br/>
            <input type="url" name="facebook" id="facebook"/>
        </div>

        <!-- LinkedIn -->
        <div class="linkedin inp">
            <label for="linkedin">LinkedIn</label>
            <br/>
            <input type="url" name="linkedin" id="linkedin"/>
        </div>

        <!-- Twitter -->
        <div class="twitter inp">
            <label for="twitter">Twitter</label>
            <br/>
            <input type="url" name="twitter" id="twitter"/>
        </div>


        <!-- About You -->
        <div class="aboutYou inp">
            <label for="aboutYou">Description</label>
            <br/>
            <textarea name="aboutYou" id="aboutYou" cols="30" rows="10"></textarea>
        </div>

        <!--        provide mock interviews-->
        <div class="provideMi">
            <p class="inp">Provide Mock Interviews</p>
            <br>
            <div class="radio_inputs">
                <div class="mi_yes">
                    <input type="radio" name="provideMi" id="yes" value="yes" required><label for="yes">Yes</label><br>
                </div>
                <div class="mi_no">
                    <input type="radio" name="provideMi" id="no" value="no"><label for="no">No</label><br>
                </div>
            </div>


        </div>

        <!-- add another qualifications button
          <div class="add-another">
            <button type="button">
              <span class="plus_for_button"> + </span>Add another qualification
            </button>
          </div> -->

        <!-- password -->
        <div class="password inp">
            <input type="hidden" name="password" id="password" value=Counsellor@123>
        </div>

        <!--        admin approve-->
        <div class="adminApprove">
            <input type="hidden" name="adminApprove" id="adminApprove" value="1">
        </div>

    </div>

    <div class="cu_buttons">
        <a href="<?php echo URL ?>Admin/Manage_counselling">
            <div class="cancel">
                <button type="button" class="cancel" form="myForm">Cancel</button>
            </div>
        </a>
        <div class="update">
            <button type="submit" onclick="return validateForm()">Add</button>
        </div>
    </div>
</form>

<!-- next, back buttons -->

<!-- next, back buttons ends here -->
</body>
<?php include './views/Footer.php' ?>

</html>