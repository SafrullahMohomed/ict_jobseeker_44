<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/cv/stepper.css" />
    <title>Document</title>

    <script defer src="/JS/cv/stepper.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Step Progress Bar</h1>
      <div id="stepProgressBar">
        <div class="step">
          <p class="step_text">Step 01</p>
          <div class="bullet">1</div>
        </div>

        <div class="step">
          <p class="step_text">Step 02</p>
          <div class="bullet">2</div>
        </div>

        <div class="step">
          <p class="step_text">Step 03</p>
          <div class="bullet">3</div>
        </div>

        <div class="step">
          <p class="step_text">Step 04</p>
          <div class="bullet">4</div>
        </div>
      </div>
      <!-- stepper finishes here -->

      <!-- main content begins here -->
      <div class="main_content">
        <div id="content">content 01</div>

        <!-- buttons -->
        <div class="bn_buttons">
          <div class="back">
            <button id="back" type="button" form="contact_form" disabled>
              Back
            </button>
          </div>
          <div class="next">
            <button id="next" type="button" form="contact_form">Next</button>
          </div>
          <div class="next">
            <button id="finish" type="submit" form="contact_form" disabled>
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
