// get elements to perform button operations

// console.log("Hi I am from js");
const back_button = document.getElementById("back");
const next_button = document.getElementById("next");
const finish_button = document.getElementById("finish");
const content = document.getElementById("content");
const bullets = [...document.querySelectorAll(".bullet")];
const form = document.getElementById("form_resume");

//for add another feilds

const addExperience = document.getElementById("add-experience");
const addEducation = document.getElementById("add-education");
const addProject = document.getElementById("add-project");

// console.log(bullets);
const MAX_STEPS = 5;
let currentStep = 1;
// showTab(currentStep);


next_button.addEventListener("click", () => {
  const currenBullet = bullets[currentStep - 1];
  currenBullet.classList.add("completed");
  currentStep += 1;
  showTab(currentStep);
  console.log(currentStep);

  back_button.disabled = false;
  if (currentStep == MAX_STEPS) {
    next_button.disabled = true;
    finish_button.disabled = false;
  }
  window.scrollTo({ top: 0, behavior: 'smooth' });


  // content.innerText = `Step Number ${currentStep}`;
});


back_button.addEventListener("click", () => {

  const previousBullet = bullets[currentStep - 2];
  previousBullet.classList.remove("completed");
  currentStep--;

  showTab(currentStep);
  console.log(currentStep);
  next_button.disabled = false;
  finish_button.disabled = true;
  if (currentStep == 1) {
    back_button.disabled = true;
  }
  window.scrollTo({ top: 0, behavior: 'smooth' });


  // content.innerText = `Step Number ${currentStep}`;
});


//to submit the form
// finish_button.addEventListener("click", () => {
//   document.getElementById("form_resume").submit();
// });

function showTab(n) {
  const form1_contact = document.getElementById("form1_contact");
  const form2_experience = document.getElementById("form2_experience");
  const form3_education = document.getElementById("form3_education");
  const form4_skills = document.getElementById("form4_skills");
  const form5_projects = document.getElementById("form5_projects");

  if (n == 1) {
    form1_contact.classList.remove("tab");
    form2_experience.classList.add("tab");



  } else if (n == 2) {
    form1_contact.classList.add("tab");
    form2_experience.classList.remove("tab");
    form3_education.classList.add("tab");

  }
  else if(n == 3){
    form2_experience.classList.add("tab");
    form3_education.classList.remove("tab");
    form4_skills.classList.add("tab");
  }

  else if(n == 4){
    form3_education.classList.add("tab");
    form4_skills.classList.remove("tab");
    form5_projects.classList.add("tab");
  }

  else if( n == 5){
    form4_skills.classList.add("tab");
    form5_projects.classList.remove("tab");
  }

}

//ajax call
function ajaxcall(){
  const xhr = new XMLHttpRequest();

  xhr.open("POST", "http://localhost/ict_jobseeker_44/Resume/Resume_form_contact/Resume_form_data")
  xhr.onload = function (){
    if(xhr.status == 200){
      console.log(this.responseText);
    }
  }

  xhr.send();

}

form.addEventListener("submit", (e) =>
{
  e.preventDefault();
  console.log("I submitted");
  const inputs =  [];
  form.querySelectorAll("input").forEach((input) =>
  {
    const { name, value} = input;
    inputs.push({name, value});
  });
  console.log(inputs);
  // form.reset();
});


finish_button.addEventListener("click", (e) => {
  e.preventDefault();
  console.log("I am clicked");
  form.submit();
  ajaxcall();

  // window.location.href = "http://localhost/ict_jobseeker_44/Resume/Resume_form_contact/Resume_form_contact"
});

//add another feilds

addExperience.addEventListener("click", () => {
  document.querySelector(".experience_form").append(`<div class="jobTitle inp">
                <label for="jobTitle">Job Title</label>
                <br/>
                <input type="text" name="jobTitle[]" id="jobTitle"/>
            </div>

            <!-- employer -->
            <div class="employer inp">
                <label for="employer">Employer</label>
                <br/>
                <input type="text" name="employer[]" id="employer"/>
            </div>

            <!-- city -->
            <div class="city inp">
                <label for="city">City</label>
                <br/>
                <input type="email" name="city[]" id="city"/>
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
                <input type="text" name="Country[]" id="country"/>
            </div>

            <!-- experience details -->
            <div class="experienceDetails inp">
                <label for="experienceDetails">What did do in this job?</label>
                <br/>
                <textarea name="experienceDetails[]" id="experienceDetails" cols="30" rows="10"></textarea>
            </div>

            <!-- time period -->
            <div class="time_period inp">
                <div class="from">
                    <label for="from">From</label>
                    <input type="date" name="from[]" id="from"/>
                </div>
                <div class="to">
                    <label for="to">To</label>
                    <input type="date" name="to[]" id="to"/>
                </div>
            </div>
            <!-- currently working field starts here -->
            <div class="workingHere inp">
                <input type="checkbox" name="workHere[]" id="workHere"/>
                <label class="working_label" for="workHere">
                    I currently work here</label>
            </div>`)
});

// const formData = {
//   profilePicture:;
//   firstName:;
//   lastName:;
//   email:;
//   phoneNumber:;
//   address:;
//   city:;
//   aboutYou:;
// experience:[]
//   jobTitle:;
//   employer:;
//   city:;
//   country:;
//
//
// };