<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_form_experience.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- stepper is starts here -->
    <div class="stepper"></div>
    <!-- stepper is ends here -->

    <!-- text field starts here -->
    <div class="title_text">
      <div class="text1">Work experiences</div>
      <div class="text2">start with your most recent work experiences</div>
    </div>

    <!-- text field ends here -->

    <!-- skip -->
    <div class="skip inp"><button>Skip</button></div>
    
    <!-- experience form field starts here -->
    <form action="/" method="get" id="experience_form">
      <div class="experience_form">
        <!-- job title -->
        <div class="jobTitle inp">
          <label for="jobTitle">Job Title</label>
          <br />
          <input type="text" name="jobTitle" id="jobTitle" required />
        </div>

        <!-- employer -->
        <div class="employer inp">
          <label for="employer">Employer</label>
          <br />
          <input type="text" name="employer" id="employer" />
        </div>

        <!-- city -->
        <div class="city inp">
          <label for="city">City</label>
          <br />
          <input type="email" name="city" id="city" />
        </div>

        <!-- state -->
        <!-- <div class="state inp">
          <label for="state">State</label>
          <br />
          <input type="text" name="state" id="state" />
        </div> -->

        <!-- country -->
        <div class="country inp">
          <label for="country">Country</label>
          <br />
          <input type="text" name="Country" id="country" />
        </div>

        <!-- experience details -->
        <div class="experienceDetails inp">
          <label for="experienceDetails">What did do in this job?</label>
          <br />
          <textarea
            name="experienceDetails"
            id="experienceDetails"
            cols="30"
            rows="10"
          ></textarea>
        </div>

        <!-- time period -->
        <div class="time_period inp">
          <div class="from">
            <label for="from">From</label>
            <input type="date" name="from" id="from" />
          </div>
          <div class="to">
            <label for="to">To</label>
            <input type="date" name="to" id="to" />
          </div>
        </div>
        <!-- currently working field starts here -->
        <div class="workingHere inp">
          <input type="checkbox" name="workHere" id="workHere" />
          <label class="working_label" for="workHere">
            I currently work here</label
          >
        </div>
      </div>
    </form>

    <!-- add another experience button -->
    <div class="add-another">
      <button><span class="plus_for_button">+</span>Add another experience</button>
    </div>

    <div class="bn_buttons">
      <div class="back">
        <button type="button" form="contact_form">Back</button>
      </div>
      <div class="next">
        <button type="submit" form="contact_form">Next</button>
      </div>
    </div>
  </body>
</html>
