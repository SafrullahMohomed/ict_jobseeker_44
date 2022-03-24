<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_form_contact.css"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css"/>
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_form_experience.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_form_education.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_form_skill.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_form_project.css">
    <script defer src="<?php echo URL ?>views/JS/Resume/Resume_form.js"></script>
    <title>Document</title>
</head>
<body>

<div class="header_div">
    <?php include './views/Header.php' ?>
</div>
<!-- stepper is starts here -->
<div id="stepProgressBar">
    <div class="step">
        <p class="step_text">Contact</p>
        <div class="bullet">1</div>
    </div>

    <div class="step">
        <p class="step_text">Experience</p>
        <div class="bullet">2</div>
    </div>

    <div class="step">
        <p class="step_text">Education</p>
        <div class="bullet">3</div>
    </div>

    <div class="step">
        <p class="step_text">Skills</p>
        <div class="bullet">4</div>
    </div>

    <div class="step">
        <p class="step_text">Projects</p>
        <div class="bullet">5</div>
    </div>
</div>
<!-- stepper is ends here -->

<!-- form starts here -->

<!-- contact field starts here -->

<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form_1">

    <div class="" id="form1_contact">
        <!-- title field starts here -->
        <div class="title_text">
            <div class="text1">Let’s Complete your resume heading</div>
            <div class="text2">How do you want employers to contact you</div>
        </div>

        <!-- title field ends here -->


        <!-- contact form starts here -->
        <div class="contact_form">
            <!-- profile picture -->
            <div class="profilePic">
                <div class="profilePic_image">
                    <img src="/ict_jobseeker_44/views/images/Resume/Resume.png" alt="image for profile picture"
                         id="profilePicImage"/>
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
                <input type="text" name="firstName" id="firstName"/>
            </div>
            <!-- last name  -->
            <div class="lastName inp">
                <label for="lastName">Last Name</label>
                <br/>
                <input type="text" name="lastName" id="lastName"/>
            </div>

            <!-- email -->
            <div class="email inp">
                <label for="email">Email</label>
                <br/>
                <input type="email" name="email" id="email"/>
            </div>

            <!-- phone number -->
            <div class="phoneNumber inp">
                <label for="phoneNumber">Phone Number</label>
                <br/>
                <input type="tel" name="phoneNumber" id="phoneNumber"/>
            </div>

            <!-- Address -->
            <div class="address inp">
                <label for="address">Address</label>
                <br/>
                <input type="text" name="address" id="address"/>
            </div>

            <!-- city -->
            <div class="city inp">
                <label for="city">City</label>
                <br/>
                <input type="text" name="city" id="city"/>
            </div>


            <!-- About You -->
            <div class="aboutYou inp">
                <label for="aboutYou">About You</label>
                <br/>
                <textarea name="aboutYou" id="aboutYou" cols="30" rows="10"></textarea>
            </div>
        </div>

        <!-- next, back buttons -->

        <div class="bn_buttons">
            <div class="back">
                <button id="back_1" type="button" disabled>
                    Back
                </button>
            </div>
            <div class="next">
                <button id="next_1" type="button">Next</button>
            </div>
        </div>
    </div>


</form>

<!-- contact form ends here -->

<!-- experience field starts here -->
<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form_2">

    <div class="tab" id="form2_experience">
        <!-- text field starts here -->
        <div class="title_text">
            <div class="text1">Work experiences</div>
            <div class="text2">start with your most recent work experiences</div>
        </div>

        <!-- text field ends here -->

        <!-- skip -->
        <div class="skip inp">
            <button>Skip</button>
        </div>

        <!-- experience form field starts here -->
        <div class="experience_form" id=experience_form1>

            <!--            cancel response-->

            <div id="cancelButton${id_experience}" class="cancelButtonExtra">
                <i title="Delete this response" onclick="delete_experience(${id_experience})" class="fa fa-trash-o"
                   aria-hidden="true"></i>
            </div>


            <!-- job title -->
            <div class="jobTitle inp">
                <label for="jobTitle">Job Title</label>
                <br/>
                <input type="text" name="jobTitle" id="jobTitle"/>
            </div>

            <!-- employer -->
            <div class="employer inp">
                <label for="employer">Employer</label>
                <br/>
                <input type="text" name="employer" id="employer"/>
            </div>

            <!-- city -->
            <div class="city inp">
                <label for="city">City</label>
                <br/>
                <input type="text" name="city" id="city_experience"/>
            </div>

            <!-- state -->
            <!-- <div class="state inp">
              <label for="state">State</label>
              <br />
              <input type="tel" name="state" id="state" />
            </div> -->

            <!-- country -->
            <div class="country inp">
                <label for="country">Country</label>
                <br/>
                <input type="text" name="country" id="country_experience"/>
            </div>

            <!-- experience details -->
            <div class="experienceDetails inp">
                <label for="experienceDetails">What did do in this job?</label>
                <br/>
                <textarea name="experienceDetails" id="experienceDetails" cols="30" rows="10"></textarea>
            </div>

            <!-- time period -->
            <div class="time_period inp">
                <div class="from">
                    <label for="from">From</label>
                    <input type="date" name="from" id="from_experience"/>
                </div>
                <div class="to">
                    <label for="to">To</label>
                    <input type="date" name="to" id="to_experience"/>
                </div>
            </div>
            <!-- currently working field starts here -->
            <div class="workingHere inp">
                <input type="checkbox" name="workHere" id="workHere"/>
                <label class="working_label" for="workHere">
                    I currently work here</label>
            </div>


        </div>

        <div id="dynamic_experience">

        </div>
        <!-- add another experience button -->
        <div class="add-another add-button-display-none" id="add-another-experience">
            <button id="add-experience"><span class="plus_for_button">+</span>Add another experience</button>
        </div>

        <!-- next, back buttons -->
        <div class="bn_buttons">
            <div class="back">
                <button id="back_2" type="button">
                    Back
                </button>
            </div>
            <div class="next">
                <button id="next_2" type="button">Next</button>
            </div>
        </div>

    </div>


</form>
<!-- experience field ends here -->

<!-- education field starts here -->
<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form_3">

    <div class="tab" id="form3_education">

        <!-- text field starts here -->
        <div class="title_text">
            <div class="text1">Education qualification</div>
            <div class="text2">start with your most recent qualification</div>
        </div>

        <!-- text field ends here -->

        <!-- skip button -->
        <div class="skip inp">
            <button>Skip</button>
        </div>

        <!-- education form field starts here -->
        <div class="education_form" id="education_form1">
            <!--            cancel response-->

            <div id="cancelButton${id_education}" class="cancelButtonExtra">
                <i title="Delete this response" onclick="delete_education(${id_education})" class="fa fa-trash-o"
                   aria-hidden="true"></i>
            </div>

            <!-- Institute -->
            <div class="institute inp">
                <label for="institute">Institute</label>
                <br/>
                <input type="text" name="institute" id="institute"/>
            </div>

            <!-- Degree -->
            <div class="degree inp">
                <label for="degree">Degree</label>
                <br/>
                <input type="text" name="degree" id="degree"/>
            </div>

            <!-- city -->
            <div class="city inp">
                <label for="city">City</label>
                <br/>
                <input type="text" name="city" id="city_education"/>
            </div>

            <!-- state -->
            <!-- <div class="state inp">
              <label for="state">State</label>
              <br />
              <input type="tel" name="state" id="state" />
            </div> -->

            <!-- country -->
            <div class="country inp">
                <label for="country">Country</label>
                <br/>
                <input type="text" name="Country" id="country_education"/>
            </div>

            <!-- education details -->
            <div class="educationDetails inp">
                <div class="edu_Discription_text">
                    Brief description about education
                </div>
                <textarea name="educationDetails" id="educationDetails" cols="30" rows="10"></textarea>
            </div>

            <!-- time period -->
            <div class="time_period inp">
                <div class="from">
                    <label for="from">From</label>
                    <input type="date" name="from" id="from_education"/>
                </div>
                <div class="to">
                    <label for="to">To</label>
                    <input type="date" name="to" id="to_education"/>
                </div>
            </div>
            <!-- study here field -->
            <div class="studyHere inp">
                <input type="checkbox" name="studyHere" id="studyHere"/>
                <label class="studying_label" for="studyHere">
                    I currently study here</label>
            </div>


        </div>


        <div id="dynamic_education">

        </div>

        <!-- add another education button -->
        <div class="add-another" id="add-another-education">
            <button type="button" id="add-education">
                <span class="plus_for_button"> + </span>Add another education
                qualification
            </button>
        </div>
        <!-- next, back buttons -->

        <div class="bn_buttons">
            <div class="back">
                <button id="back_3" type="button">
                    Back
                </button>
            </div>
            <div class="next">
                <button id="next_3" type="button">Next</button>
            </div>

        </div>
    </div>


</form>
<!-- education field ends here -->

<!-- skills starts here -->
<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form_4">

    <div class="tab" id="form4_skills">
        <!-- text field starts here -->
        <div class="title_text">
            <div class="text1">Skills</div>
            <div class="text2">state your skills (optional)</div>
        </div>

        <!-- text field ends here -->

        <!-- skip -->
        <div class="skip inp">
            <button>Skip</button>
        </div>

        <!-- skill form field starts here -->
        <div class="skill_form">
            <!-- skill details -->
            <div class="skillDetails">
                <textarea name="skillDetails" id="skillDetails" cols="40" rows="10"></textarea>
            </div>
        </div>
        <!-- next, back buttons -->

        <div class="bn_buttons">
            <div class="back">
                <button id="back_4" type="button">
                    Back
                </button>
            </div>
            <div class="next">
                <button id="next_4" type="button">Next</button>
            </div>
        </div>
    </div>


</form>
<!-- skills ends here -->


<!-- projects starts here -->
<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form_5">

    <div class="tab" id="form5_projects">
        <!-- text field starts here -->
        <div class="title_text">
            <div class="text1">Projects</div>
            <div class="text2">
                you can state your project details here (optional)
            </div>
        </div>

        <!-- text field ends here -->

        <!-- skip -->
        <div class="skip inp">
            <button>Skip</button>
        </div>

        <!-- project form field starts here -->
        <div class="project_form" id="project_form1">

            <!--            cancel response-->

            <div id="cancelButton${id_project}" class="cancelButtonExtra">
                <i title="Delete this response" onclick="delete_project(${id_project})" class="fa fa-trash-o"
                   aria-hidden="true"></i>
            </div>

            <!-- project title -->
            <div class="projectTitle inp">
                <label for="projectTitle">Project title</label>
                <br/>
                <input type="text" name="projectTitle" id="projectTitle"/>
            </div>
            <!-- project details -->
            <div class="projectDetails inp">
                <label class="description">Project Description</label>
                <textarea name="projectDetails" id="projectDetails" cols="30" rows="10"></textarea>
            </div>


        </div>

        <div id="dynamic_project">

        </div>

        <!-- add another project button -->
        <div class="add-another" id="add-another-project">
            <button type="button" id="add-project">
                <span class="plus_for_button"> + </span>Add another project
            </button>
        </div>

        <!-- next, back buttons -->
        <div class="bn_buttons">
            <div class="back">
                <button id="back_5" type="button">
                    Back
                </button>
            </div>
            <div class="next">
                <button id="finish_5" type="button">
                    Submit
                </button>
            </div>
        </div>
    </div>
</form>


<!-- projects ends here -->


<!-- <div class="bn_buttons">
  <div class="back">
    <button class="back" form="contact_form">Back</button>
  </div>
  <div class="next">
    <button type="submit" form="contact_form">Next</button>
  </div>
</div> -->

<!-- next, back buttons ends here -->

<!--form output-->

<?php
//
//    if(isset($_POST)){
//        print($_POST['']);
//}
include './views/Footer.php' ?>

</body>

</html>