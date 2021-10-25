<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/cv/cv_form_skill.css">
    <link rel="stylesheet" href="/CSS/normalize/normalize.css">
    <title>Document</title>
  </head>
  <body>
    <!-- stepper is starts here -->
    <div class="stepper"></div>
    <!-- stepper is ends here -->

    <!-- text field starts here -->
    <div class="title_text">
      <div class="text1">Skills</div>
      <div class="text2">state your skills (optional)</div>
    </div>

    <!-- text field ends here -->

    <!-- skip -->
    <div class="skip inp"><button>Skip</button></div>

    <!-- skill form field starts here -->
    <form action="/" method="get" id="skill_form">
      <div class="skill_form">
        <!-- skill details -->
        <div class="skillDetails">
          <textarea
            name="skillDetails"
            id="skillDetails"
            cols="40"
            rows="10"
          ></textarea>
        </div>
      </div>
    </form>

    <div class="bn_buttons">
      <div class="back">
        <button type="button" form="skill_form">Back</button>
      </div>
      <div class="next">
        <button type="submit" form="skill_form">Next</button>
      </div>
    </div>
  </body>
</html>
