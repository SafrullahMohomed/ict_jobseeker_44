<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Counsellor/Counsellor_account.css"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css"/>
    <script defer src="<?php echo URL ?>views/JS/Counsellor/Counsellor_account.js"></script>

    <title>Document</title>
</head>

<!-- <div class="header_div">
 
</div> -->


<body>

<div class="header_div">
    <?php include './views/Header.php' ?>
</div>
<!-- title field starts here -->
<div class="title_text">
    <div class="text1">Edit Your Profile</div>
    <div class="text2">update your profile</div>
</div>

<!-- title field ends here -->

<!-- counsellor form field starts here -->
<form action="http://localhost/ict_jobseeker_44/Counsellor/Counsellor_account/update_counsellor_data" method="post" id="counsellor_form">
    <input type="hidden" name="User_ID" value="<?php echo $_GET['User'] ?>">
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
            <label for="firstName" class="required">First Name</label>
            <br/>
            <input type="text" name="firstName" id="firstName" value = "<?php echo $data['First_name'] ?>" required/>

        </div>
        <!-- last name  -->
        <div class="lastName inp">
            <label for="lastName" class="required">Last Name</label>
            <br/>
            <input type="text" name="lastName" id="lastName" value = "<?php echo $data['Last_name'] ?>"required/>
        </div>

        <!-- email -->
        <div class="email inp">
            <label for="email" class="required">Email</label>
            <br/>
            <input type="email" name="email" id="email" value="<?php echo $data['Email'] ;?>" required/>
        </div>


        <!-- phone number -->
        <div class="phoneNumber inp">
            <label for="phoneNumber" class="required">Phone Number</label>
            <br/>
            <input type="tel" name="phoneNumber" id="phoneNumber" value="<?php echo $data['Phone_number'] ;?>"/>
        </div>

        <!-- Address -->
        <div class="address inp">
            <label for="address">Address</label>
            <br/>
            <input type="text" name="address" id="address" value="<?php echo $data['Address']?>"/>
        </div>

        <!-- city -->
        <div class="city inp">
            <label for="city">City</label>
            <br/>
            <input type="text" name="city" id="city" value="<?php echo $data['City']?>"/>
        </div>

        <!-- Qualification -->
        <div class="qualification inp">
            <label for="qualification">Qualification</label>
            <br/>
            <textarea name="qualification_box" onkeyup="handleInput(event)" id="qualification" cols="30" rows="10" ><?php echo $data['Qualifications'] ;?></textarea>
        </div>

        <!--  -->


        <!-- Facebook -->
        <div class="facebook inp">
            <label for="facebook">Facebook</label>
            <br/>
            <input type="url" name="facebook" id="facebook" value="<?php echo $data['Facebook'] ;?>"/>
        </div>

        <!-- LinkedIn -->
        <div class="linkedin inp">
            <label for="linkedin">LinkedIn</label>
            <br/>
            <input type="text" name="linkedin" id="linkedin" value="<?php echo $data['Linkedin'] ;?>"/>
        </div>

        <!-- Twitter -->
        <div class="twitter inp">
            <label for="twitter">Twitter</label>
            <br/>
            <input type="text" name="twitter" id="twitter" value="<?php echo $data['Twitter'] ;?>"/>
        </div>


        <!-- About You -->
        <div class="description inp">
            <label for="description">Description</label>
            <br/>
            <textarea name="description" id="description" cols="30" rows="10"><?php echo $data['Description']?></textarea>
        </div>

        <!-- add another qualifications button
          <div class="add-another">
            <button type="button">
              <span class="plus_for_button"> + </span>Add another qualification
            </button>
          </div> -->

        <!--        provide mock interviews-->
        <div class="provideMi">
            <p class="inp">Provide Mock Interviews</p>
            <br>
            <div class="radio_inputs">
                <?php if ($data['Counsellor_provide_mock_interviews'] == 'yes'){
                    echo '<div class="mi_yes">
                    <input type="radio" name ="result_mi" id="mi_yes" value="yes" required checked><label for="yes">Yes</label><br>
                </div>
                <div class="mi_no">
                    <input type="radio" name ="result_mi" id="mi_no" value="no"><label for="no">No</label><br>
                </div>';
                }else{
                    echo '<div class="mi_yes">
                    <input type="radio" name ="result_mi" id="mi_yes" value="yes" required ><label for="yes">Yes</label><br>
                </div>
                <div class="mi_no">
                    <input type="radio" name ="result_mi" id="mi_no" value="no" checked><label for="no" >No</label><br>
                </div>';
                }   ?>

            </div>

    </div>
    </div>
</form>

<!-- next, back buttons -->

<div class="cu_buttons">
    <div class="cancel">
        <button onclick="Cancelclick(<?php echo $data['User_ID'] ?>)" id="cancel" >Cancel</button>
    </div>
    <div class="update">
        <button onclick="Update(<?php echo $data['User_ID'] ?>)" type="submit" id="update" form="contact_form">Update</button>
    </div>
</div>

<!-- next, back buttons ends here -->
<!-- footer -->
<?php include './views/Footer.php' ?>

</body>

</html>