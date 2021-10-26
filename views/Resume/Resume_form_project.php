<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_form_project.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- stepper is starts here -->
    <div class="stepper"></div>
    <!-- stepper is ends here -->

    <!-- text field starts here -->
    <div class="title_text">
      <div class="text1">Projects</div>
      <div class="text2">
        you can state your project details here (optional)
      </div>
    </div>

    <!-- text field ends here -->

    <!-- skip -->
    <div class="skip inp"><button>Skip</button></div>

    <!-- project form field starts here -->
    <form action="/" method="get" id="project_form">
      <div class="project_form">
        <!-- project title -->
        <div class="projectTitle inp">
          <label for="projectTitle">Project title</label>
          <br />
          <input type="text" name="projectTitle" id="projectTitle" />
        </div>
        <!-- project details -->
        <div class="projectDetails inp">
          <label class="description">Project Description</label>
          <textarea
            name="projectDetails"
            id="projectDetails"
            cols="30"
            rows="10"
          ></textarea>
        </div>
      </div>
    </form>

    <!-- add another project button -->
    <div class="add-another">
      <button type="button">
        <span class="plus_for_button"> + </span>Add another project
      </button>
    </div>

    <div class="bn_buttons">
      <div class="back">
        <button type="button" form="project_form">Back</button>
      </div>
      <div class="next">
        <button type="submit" form="project_form">Next</button>
      </div>
    </div>
  </body>
</html>
