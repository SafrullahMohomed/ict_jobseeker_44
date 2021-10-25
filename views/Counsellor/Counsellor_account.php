<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/counsellor/counsellor_account.css" />
    <link rel="stylesheet" href="/CSS/normalize/normalize.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- title field starts here -->
    <div class="title_text">
      <div class="text1">Edit Your Profile</div>
      <div class="text2">How do you want employers to contact you</div>
    </div>

    <!-- title field ends here -->

    <!-- counsellor form field starts here -->
    <form action="/" method="get" id="contact_form">
      <div class="counsellor_form">
        <!-- profile picture -->
        <div class="profilePic">
          <div class="profilePic_image">
            <img
              src="/images/counsellor/counselling.png"
              alt="image for profile picture"
            />
          </div>
          <div class="image_insertion">
            <label for="profilePic">Profile Picture</label>
            <br />
            <input
              type="file"
              name="profilePicture"
              id="profilePicture"
              accept="image/*"
            />
          </div>
        </div>

        <!-- first name -->
        <div class="firstName inp">
          <label for="firstName">First Name</label>
          <br />
          <input type="text" name="firstName" id="firstName" />
        </div>
        <!-- last name  -->
        <div class="lastName inp">
          <label for="lastName">Last Name</label>
          <br />
          <input type="text" name="lastName" id="lastName" required />
        </div>

        <!-- email -->
        <div class="email inp">
          <label for="email">Email</label>
          <br />
          <input type="email" name="email" id="email" required />
        </div>

        <!-- email 2 -->
        <div class="email2 inp">
          <label for="email2">Email 2 (optional)</label>
          <br />
          <input type="email" name="email2" id="email2" />
        </div>

        <!-- phone number -->
        <div class="phoneNumber inp">
          <label for="phoneNumber">Phone Number</label>
          <br />
          <input type="tel" name="phoneNumber" id="phoneNumber" />
        </div>

        <!-- Address -->
        <div class="address inp">
          <label for="address">Address</label>
          <br />
          <input type="text" name="Address" id="firstName" />
        </div>

        <!-- city -->
        <div class="city inp">
          <label for="city">City</label>
          <br />
          <input type="text" name="city" id="city" />
        </div>

        <!-- Qualification -->
        <div class="qualification inp">
          <label for="qualification">Qualification</label>
          <br />
          <input type="text" name="quaulification" id="qualification" />
        </div>

        <!-- About You -->
        <div class="aboutYou inp">
          <label for="aboutYou">About You</label>
          <br />
          <textarea
            name="aboutYou"
            id="aboutYou"
            cols="30"
            rows="10"
          ></textarea>
        </div>

        <!-- add another qualifications button -->
        <div class="add-another">
          <button type="button">
            <span class="plus_for_button"> + </span>Add another qualification
          </button>
        </div>
      </div>
    </form>

    <!-- next, back buttons -->

    <div class="buttons">
      <div class="back">
        <button class="back" form="contact_form">Back</button>
      </div>
      <div class="next">
        <button type="submit" form="contact_form">Next</button>
      </div>
    </div>

    <!-- next, back buttons ends here -->
  </body>
</html>
