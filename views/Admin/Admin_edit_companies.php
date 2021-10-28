<?php if (empty(session_id())) session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Admin_add_companies.css">
    <style>

    </style>
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <script src="company_account.js"></script>
    <title>company_account</title>
</head>

<body>
    <!-- header part with css html js -->
    <div class="header_div">
        <?php include 'Header.php' ?>
    </div>
    <!-- header part end with css html js -->
    <div class="all">
        <form class="main_container" name="myForm">
            <div class="picture_bar">
                <img src='<?php echo URL ?>views/images/Company/user.png' id="output">

                <div class="row">
                    <label for="profile_pic" class="labelfield">Profile picture</label><br>
                    <input type="file" id="profile_pic" name="profilepic" placeholder="profile picture" class="inputfield" accept="image/*" onchange="loadFile(event)"><br>
                </div>
            </div>
            <div class="row">
                <label for="name" class="labelfield">Company Name</label><br>
                <input type="text" name="name" placeholder="Name" class="inputfield" required onfocus=" hideFormError(name_error)"><br>
                <span id="name_error" class="error"></span>
            </div>
            <div class="row">
                <label for="address" class="labelfield">Company Address</label><br>
                <input type="text" id="address" name="address" placeholder="Company address " class="inputfield" required><br>

            </div>
            <div class="row">
                <label for="phonenumber" class="labelfield">Phone number</label><br>
                <input type="tel" name="Phone_number" placeholder="0774225687" class="inputfield" required onfocus=" hideFormError(phonenumber_error)"><br>
                <span id="phonenumber_error" class="error"></span>
            </div>

            <div class="row">
                <label for="brief_description" class="labelfield"> Brief description</label><br>

                <textarea id="brief_description" rows="4" name="brief_description" placeholder="Breif introduction about your company" class="inputfield" required> </textarea><br>
            </div>

            <div class="row">
                <label for="email" class="labelfield">Email</label><br>
                <input type="email" id="email" name="email" placeholder="Email" class="inputfield" required onfocus=" hideFormError(email_error)"><br>
                <span id="email_error" class="error"></span>
            </div>


            <div class="row">

                <label for="website_link" class="labelfield">Websitelink</label><br>
                <input type="url" id="website_link" name="url" placeholder="website link" class="inputfield" onfocus=" hideFormError(url_error)"><br>
                <span id="url_error"></span>
            </div>

            <div class="row">
                <label for="fburl" class="labelfield">Facebook link</label><br>
                <input type="url" id="Facebook_link" name="fburl" placeholder="Facebook link" class="inputfield" onfocus=" hideFormError(fburl_error)"><br>
                <span id="fburl_error" class="error"></span>
            </div>

            <div class="row">
                <label for="linkedin_url" class="labelfield">LinkedIn link</label><br>
                <input type="url" id="LinkedIn_link" name="linkedin_url" placeholder="LinkedIn link" class="inputfield" onfocus=" hideFormError(linkedin_url_error)"><br>
                <span id="linkedin_url_error" class="error"></span>

            </div>
            <div class="row">
                <label for="twitter_url" class="labelfield">Twitter link</label><br>
                <input type="url" id="Twitter_link" name="twitter_url" placeholder="Twitter link" class="inputfield" onfocus=" hideFormError(twitter_url_error)"><br>
                <span id="twitter_url_error" class="error"></span>
            </div>

            <div class="row">
                <label for="short_introduction_video" class="labelfield">Short Introduction video</label><br>
                <input type="file" id="short_introduction_video" name="shortintroductionvideo" placeholder="Short Introduction Video" class="inputfield" accept="video/*"><br>
            </div>

            <!-- <div class="submit">
                <label for="submit" class="labelfield"></label><br>
                <input type="submit" id="submit" submit="submit" class="submit_button" onclick="return validateForm()"><br>
            </div> -->
        </form>

        <!-- update, cancel buttons -->

        <div class="cu_buttons">
            <div class="cancel">
                <button class="cancel" form="myForm">Cancel</button>
            </div>
            <div class="update">
                <button type="submit" form="myForm">Update</button>
            </div>
        </div>

        <!-- cancel, update buttons ends here -->
    </div>
    <?php include 'Footer.php' ?>
    <script src="<?php echo URL ?>views/JS/Company_account.js"></script>
</body>

</html>