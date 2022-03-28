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

<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form1">

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
                <label for="firstName" class="required">First Name <span class="error_message" id="error_first_name"></span></label>
                <br/>
                <input type="text" name="firstName" id="firstName" onfocus="hideFormError(error_first_name)"/>
            </div>
            <!-- last name  -->
            <div class="lastName inp">
                <label for="lastName">Last Name</label>
                <br/>
                <input type="text" name="lastName" id="lastName"/>
            </div>

            <!-- email -->
            <div class="email inp">
                <label for="email" class="required">Email <span class="error_message" id="error_email"></span></label>
                <br/>
                <input type="email" name="email" id="email"/>
            </div>

            <!-- phone number -->
            <div class="phoneNumber inp">
                <label for="phoneNumber">Phone Number <span class="error_message" id="error_phoneNumber"></span></label>
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

<!--experience form 1-->
<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form2a">

    <div class="tab" id="form2_experience2a">
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
        <div class="experience_form" id=experience_form2a>

            <!--            cancel response-->

            <div id="cancelButton2a" class="cancelButtonExtra">
                <i title="Delete this response" onclick="delete_experience()" class="fa fa-trash-o"
                   aria-hidden="true"></i>
            </div>


            <!-- job title -->
            <div class="jobTitle inp">
                <label for="jobTitle" class="required">Job Title <span class="error_message" id="error_jobTitle2a"></span> </label>
                <br/>
                <input type="text" name="jobTitle" id="jobTitle2a"/>
            </div>

            <!-- employer -->
            <div class="employer inp">
                <label for="employer" class="required">Employer <span class="error_message" id="error_employer2a"></span></label>
                <br/>
                <input type="text" name="employer" id="employer2a"/>
            </div>

            <!-- city -->
            <div class="city inp">
                <label for="city">City</label>
                <br/>
                <input type="text" name="city" id="city_experience2a"/>
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
                <input type="text" name="country" id="country_experience2a"/>
            </div>

            <!-- experience details -->
            <div class="experienceDetails inp">
                <label for="experienceDetails">What did do in this job?</label>
                <br/>
                <textarea name="experienceDetails" id="experienceDetails2a" cols="30" rows="10"></textarea>
            </div>

            <!-- time period -->
            <div class="time_period inp">
                <div class="from">
                    <label for="from">From <span class="error_message" id="date_error_experience2a"></span></label>
                    <input type="date" name="from" id="from_experience2a"/>
                </div>
                <div class="to">
                    <label for="to">To</label>
                    <input type="date" name="to" id="to_experience2a"/>
                </div>
            </div>
            <!-- currently working field starts here -->
            <div class="workingHere inp">
                <input type="checkbox" name="workHere" id="workHere2a"/>
                <label class="working_label" for="workHere2a">
                    I currently work here</label>
            </div>


        </div>

        <div id="dynamic_experience">
            <form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" id="form2b">
                <div class="experience_form" id=experience_form${id_experience}>

                    <!--cancel button-->
                    <div id="cancelButton2b" class="cancelButtonExtra">
                        <i title="Delete this response" onclick="delete_experience()"
                           class="fa fa-trash-o" aria-hidden="true"></i>
                    </div>

                    <!-- job title -->
                    <div class="jobTitle inp">
                        <label for="jobTitle" class="required">Job Title <span class="error_message" id="error_jobTitle2b"></span></label>
                        <br/>
                        <input type="text" name="jobTitle" id="jobTitle2b"/>
                    </div>

                    <!-- employer -->
                    <div class="employer inp">
                        <label for="employer" class="required">Employer <span class="error_message" id="error_employer2b"></span></label>
                        <br/>
                        <input type="text" name="employer" id="employer2b"/>
                    </div>

                    <!-- city -->
                    <div class="city inp">
                        <label for="city">City</label>
                        <br/>
                        <input type="text" name="city" id="city_experience2b"/>
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
                        <input type="text" name="country" id="country_experience2b"/>
                    </div>

                    <!-- experience details -->
                    <div class="experienceDetails inp">
                        <label for="experienceDetails">What did do in this job?</label>
                        <br/>
                        <textarea name="experienceDetails" id="experienceDetails2b" cols="30" rows="10"></textarea>
                    </div>

                    <!-- time period -->
                    <div class="time_period inp">
                        <div class="from">
                            <label for="from">From <span class="error_message" id="date_error_experience2b"></span></label>
                            <input type="date" name="from" id="from_experience2b"/>
                        </div>
                        <div class="to">
                            <label for="to">To</label>
                            <input type="date" name="to" id="to_experience2b"/>
                        </div>
                    </div>
                    <!-- currently working field starts here -->
                    <div class="workingHere inp">
                        <input type="checkbox" name="workHere" id="workHere2b"/>
                        <label class="working_label" for="workHere">
                            I currently work here</label>
                    </div>


                </div>
            </form>
            <!--        experience 2b form ends here-->

            <form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" id="form2c">
                <div class="experience_form" id=experience_form2c>

                    <!--cancel button-->
                    <div id="cancelButton2c" class="cancelButtonExtra">
                        <i title="Delete this response" onclick="delete_experience()"
                           class="fa fa-trash-o" aria-hidden="true"></i>
                    </div>

                    <!-- job title -->
                    <div class="jobTitle inp">
                        <label for="jobTitle" class="required">Job Title <span class="error_message" id="error_jobTitle2c"></span></label>
                        <br/>
                        <input type="text" name="jobTitle" id="jobTitle2c"/>
                    </div>

                    <!-- employer -->
                    <div class="employer inp">
                        <label for="employer" class="required">Employer <span class="error_message" id="error_employer2c"></span></label>
                        <br/>
                        <input type="text" name="employer" id="employer2c"/>
                    </div>

                    <!-- city -->
                    <div class="city inp">
                        <label for="city">City</label>
                        <br/>
                        <input type="text" name="city" id="city_experience2c"/>
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
                        <input type="text" name="country" id="country_experience2c"/>
                    </div>

                    <!-- experience details -->
                    <div class="experienceDetails inp">
                        <label for="experienceDetails">What did do in this job?</label>
                        <br/>
                        <textarea name="experienceDetails" id="experienceDetails2c" cols="30" rows="10"></textarea>
                    </div>

                    <!-- time period -->
                    <div class="time_period inp">
                        <div class="from">
                            <label for="from">From <span class="error_message" id="date_error_experience2c"></span></label>
                            <input type="date" name="from" id="from_experience2c" onfocus="hideFormError(date_error_experience2c)"/>
                        </div>
                        <div class="to">
                            <label for="to">To</label>
                            <input type="date" name="to" id="to_experience2c"/>
                        </div>
                    </div>
                    <!-- currently working field starts here -->
                    <div class="workingHere inp">
                        <input type="checkbox" name="workHere" id="workHere2c"/>
                        <label class="working_label" for="workHere">
                            I currently work here</label>
                    </div>


                </div>
            </form>
            <!--        experience 2c form ends here-->

        </div>
        <!--        dynamic experience ends here -->

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

<!--education 3a-->
<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form3a">

    <div class="tab" id="form3_education3a">

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
        <div class="education_form" id="education_form3a">
            <!--            cancel response-->

            <div id="cancelButton3a" class="cancelButtonExtra">
                <i title="Delete this response" onclick="delete_education(${id_education})" class="fa fa-trash-o"
                   aria-hidden="true"></i>
            </div>

            <!-- Institute -->
            <div class="institute inp">
                <label for="institute" class="required">Institute <span class="error_message" id="error_institute3a"></label>
                <br/>
                <input type="text" name="institute" id="institute3a"/>
            </div>

            <!-- Degree -->
            <div class="degree inp">
                <label for="degree" class="required">Degree <span class="error_message" id="error_degree3a"></label>
                <br/>
                <input type="text" name="degree" id="degree3a"/>
            </div>

            <!-- city -->
            <div class="city inp">
                <label for="city">City</label>
                <br/>
                <input type="text" name="city" id="city_education3a"/>
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
                <input type="text" name="Country" id="country_education3a"/>
            </div>

            <!-- education details -->
<!--            <div class="educationDetails inp">-->
<!--                <div class="edu_Discription_text">-->
<!--                    Brief description about education-->
<!--                </div>-->
<!--                <textarea name="educationDetails" id="educationDetails3a" cols="30" rows="10"></textarea>-->
<!--            </div>-->

            <!-- time period -->
            <div class="time_period inp">
                <div class="from">
                    <label for="from">From</label>
                    <input type="date" name="from" id="from_education3a"/>
                </div>
                <div class="to">
                    <label for="to">To</label>
                    <input type="date" name="to" id="to_education3a"/>
                </div>
            </div>
            <!-- study here field -->
            <div class="studyHere inp">
                <input type="checkbox" name="studyHere" id="studyHere3a"/>
                <label class="studying_label" for="studyHere">
                    I currently study here</label>
            </div>


        </div>


        <div id="dynamic_education">

            <!--            education 3b-->
            <form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form3b">

                <div class="education_form" id="education_form3b">

                    <!--cancel button-->
                    <div id="cancelButton3b" class="cancelButtonExtra">
                        <i title="Delete this response" onclick="delete_education()" class="fa fa-trash-o"
                           aria-hidden="true"></i>
                    </div>
                    <!-- Institute -->
                    <div class="institute inp">
                        <label for="institute" class="required">Institute <span class="error_message" id="error_institute3b"></label>
                        <br/>
                        <input type="text" name="institute" id="institute3b"/>
                    </div>

                    <!-- Degree -->
                    <div class="degree inp">
                        <label for="degree" class="required">Degree <span class="error_message" id="error_degree3b"></label>
                        <br/>
                        <input type="text" name="degree" id="degree3b"/>
                    </div>

                    <!-- city -->
                    <div class="city inp">
                        <label for="city">City</label>
                        <br/>
                        <input type="text" name="city" id="city_education3b"/>
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
                        <input type="text" name="Country" id="country_education3b"/>
                    </div>

                    <!-- education details -->
<!--                    <div class="educationDetails inp">-->
<!--                        <div class="edu_Discription_text">-->
<!--                            Brief description about education-->
<!--                        </div>-->
<!--                        <textarea name="educationDetails" id="educationDetails3b" cols="30" rows="10"></textarea>-->
<!--                    </div>-->

                    <!-- time period -->
                    <div class="time_period inp">
                        <div class="from">
                            <label for="from">From</label>
                            <input type="date" name="from" id="from_education3b"/>
                        </div>
                        <div class="to">
                            <label for="to">To</label>
                            <input type="date" name="to" id="to_education3b"/>
                        </div>
                    </div>
                    <!-- study here field -->
                    <div class="studyHere inp">
                        <input type="checkbox" name="studyHere" id="studyHere3b"/>
                        <label class="studying_label" for="studyHere">
                            I currently study here</label>
                    </div>


                </div>
            </form>
            <!--            education 3b ends here -->

            <!--            education 3c-->
            <form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form3c">

                <div class="education_form" id="education_form3c">

                    <!--cancel button-->
                    <div id="cancelButton3c" class="cancelButtonExtra">
                        <i title="Delete this response" onclick="delete_education()" class="fa fa-trash-o"
                           aria-hidden="true"></i>
                    </div>
                    <!-- Institute -->
                    <div class="institute inp">
                        <label for="institute" class="required">Institute <span class="error_message" id="error_institute3c"></label>
                        <br/>
                        <input type="text" name="institute" id="institute3c"/>
                    </div>

                    <!-- Degree -->
                    <div class="degree inp">
                        <label for="degree" class="required">Degree <span class="error_message" id="error_degree3c"></label>
                        <br/>
                        <input type="text" name="degree" id="degree3c"/>
                    </div>

                    <!-- city -->
                    <div class="city inp">
                        <label for="city">City</label>
                        <br/>
                        <input type="text" name="city" id="city_education3c"/>
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
                        <input type="text" name="Country" id="country_education3c"/>
                    </div>

                    <!-- education details -->
<!--                    <div class="educationDetails inp">-->
<!--                        <div class="edu_Discription_text">-->
<!--                            Brief description about education-->
<!--                        </div>-->
<!--                        <textarea name="educationDetails" id="educationDetails3c" cols="30" rows="10"></textarea>-->
<!--                    </div>-->

                    <!-- time period -->
                    <div class="time_period inp">
                        <div class="from">
                            <label for="from">From</label>
                            <input type="date" name="from" id="from_education3c"/>
                        </div>
                        <div class="to">
                            <label for="to">To</label>
                            <input type="date" name="to" id="to_education3c"/>
                        </div>
                    </div>
                    <!-- study here field -->
                    <div class="studyHere inp">
                        <input type="checkbox" name="studyHere" id="studyHere3c"/>
                        <label class="studying_label" for="studyHere">
                            I currently study here</label>
                    </div>


                </div>
            </form>
            <!--            education 3c ends here -->
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
<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form4">

    <div class="tab" id="form4_skills">
        <!-- text field starts here -->
        <div class="title_text">
            <div class="text1">Skills</div>
            <div class="text2" >state your skills (optional)</div>
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
                <textarea name="skillDetails" id="skillDetails" cols="40" rows="10" onkeyup="handleInput(event)"></textarea>
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

<!--project 5a starts here -->
<form action="http://localhost/ict_jobseeker_44/Resume/Resume_form_contact" method="post" id="form5a">

    <div class="tab" id="form5_projects5a">
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
        <div class="project_form" id="project_form5a">

            <!--            cancel response-->

            <div id="cancelButton5a" class="cancelButtonExtra">
                <i title="Delete this response" onclick="delete_project()" class="fa fa-trash-o"
                   aria-hidden="true"></i>
            </div>

            <!-- project title -->
            <div class="projectTitle inp">
                <label for="projectTitle">Project title</label>
                <br/>
                <input type="text" name="projectTitle" id="projectTitle5a"/>
            </div>
            <!-- project details -->
            <div class="projectDetails inp">
                <label class="description">Project Description</label>
                <textarea name="projectDetails" id="projectDetails5a" cols="30" rows="10" onkeyup="handleInput(event)"></textarea>
            </div>


        </div>

<!--        project 5a ends here-->

        <div id="dynamic_project">

<!--project 5b starts here-->
            <form action="" id="form5b">
                <div class="project_form" id="project_form5b">

                    <!--cancel button-->
                    <div id="cancelButton5b" class="cancelButtonExtra">
                        <i title="Delete this response" onclick="delete_project()" class="fa fa-trash-o" aria-hidden="true"></i>
                    </div>

                    <!-- project title -->
                    <div class="projectTitle inp">
                        <label for="projectTitle">Project title</label>
                        <br/>
                        <input type="text" name="projectTitle" id="projectTitle5b"/>
                    </div>
                    <!-- project details -->
                    <div class="projectDetails inp">
                        <label class="description">Project Description</label>
                        <textarea name="projectDetails" id="projectDetails5b" cols="30" rows="10" onkeyup="handleInput(event)"></textarea>
                    </div>


                </div>
            </form>
            <!--project 5b ends here-->

            <!--project 5c starts here-->
            <form action="" id="form5c">
                <div class="project_form" id="project_form5c">

                    <!--cancel button-->
                    <div id="cancelButton5c" class="cancelButtonExtra">
                        <i title="Delete this response" onclick="delete_project()" class="fa fa-trash-o" aria-hidden="true"></i>
                    </div>

                    <!-- project title -->
                    <div class="projectTitle inp">
                        <label for="projectTitle">Project title</label>
                        <br/>
                        <input type="text" name="projectTitle" id="projectTitle5c"/>
                    </div>
                    <!-- project details -->
                    <div class="projectDetails inp">
                        <label class="description">Project Description</label>
                        <textarea name="projectDetails" id="projectDetails5c" cols="30" rows="10" onkeyup="handleInput(event)"></textarea>
                    </div>


                </div>
            </form>
            <!--project 5c ends here-->


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