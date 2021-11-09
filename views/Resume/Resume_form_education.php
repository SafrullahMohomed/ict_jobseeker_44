<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_form_education.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css" />

    <title>Document</title>
  </head>
  <body>

    <!-- stepper is starts here -->
    <div class="stepper"></div>
    <!-- stepper is ends here -->

    <!-- text field starts here -->
    <div class="title_text">
      <div class="text1">Education qualification</div>
      <div class="text2">start with your most recent qualification</div>
    </div>

    <!-- text field ends here -->

    <!-- skip button -->
    <div class="skip inp"><button>Skip</button></div>

    <!-- education form field starts here -->
    <form action="/" method="get" id="education_form">
      <div class="education_form">
        <!-- Institute -->
        <div class="instite inp">
          <label for="institute">Institute</label>
          <br />
          <input type="text" name="institute" id="institute" required />
        </div>

        <!-- Degree -->
        <div class="degree inp">
          <label for="degree">Degree</label>
          <br />
          <input type="text" name="degree" id="degree" required />
        </div>

        <!-- city -->
        <div class="city inp">
          <label for="city">City</label>
          <br />
          <input type="text" name="city" id="city" />
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

        <!-- education details -->
        <div class="educationDetails inp">
          <div class="edu_Discription_text">
            Brief description about education
          </div>
          <textarea
            name="educationDetails"
            id="educationDetails"
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
        <!-- study here field -->
        <div class="studyHere inp">
          <input type="checkbox" name="studyHere" id="studyHere" />
          <label class="studying_label" for="studyHere">
            I currently study here</label
          >
        </div>
      </div>
    </form>

    <!-- add another education button -->
    <div class="add-another">
      <button type="button">
        <span class="plus_for_button"> + </span>Add another education
        qualification
      </button>
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
