// get elements to perform button operations

const back_button1 = document.getElementById("back_1");
const next_button1 = document.getElementById("next_1");
const back_button2 = document.getElementById("back_2");
const next_button2 = document.getElementById("next_2");
const back_button3 = document.getElementById("back_3");
const next_button3 = document.getElementById("next_3");
const back_button4 = document.getElementById("back_4");
const next_button4 = document.getElementById("next_4");
const back_button5 = document.getElementById("back_5");
const finish_button5 = document.getElementById("finish_5");

const finish_button = document.getElementById("finish");
const content = document.getElementById("content");
const bullets = [...document.querySelectorAll(".bullet")];
// const form1 = document.getElementById("form_1");
// const form2 = document.getElementById("form_2");
// const form3 = document.getElementById("form_3");
// const form4 = document.getElementById("form_4");
// const form5 = document.getElementById("form_5");
// form5.querySelector()


//for add another fields

const addExperience = document.getElementById("add-experience");
const addEducation = document.getElementById("add-education");
const addProject = document.getElementById("add-project");

//to hide and show buttons
const addExperienceDiv = document.getElementById("add-another-experience");
const addEducationDiv = document.getElementById("add-another-education");
const addProjectDiv = document.getElementById("add-another-project");

//add another dynamic fields
const dynamic_experience = document.getElementById("dynamic_experience");
const dynamic_education = document.getElementById("dynamic_education");
const dynamic_project = document.getElementById("dynamic_project");

//id variables for dynamically add
let id_experience = 1;
let id_education = 1;
let id_project = 1;

// console.log(bullets);
const MAX_STEPS = 5;
let currentStep = 1;
// showTab(currentStep);

//contact form
next_button1.addEventListener("click", (e) => {
    e.preventDefault();
    const currenBullet = bullets[0];
    currenBullet.classList.add("completed");
    currentStep++;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});

    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const email = document.getElementById("email").value;
    const phoneNumber = document.getElementById("phoneNumber").value;
    const address = document.getElementById("address").value;
    const city = document.getElementById("city").value;
    const aboutYou = document.getElementById("aboutYou").value;
    const skillDetails = document.getElementById("skillDetails").value;

    mainObj.firstName = firstName;
    mainObj.lastName = lastName;
    mainObj.email = email;
    mainObj.phoneNumber = phoneNumber;
    mainObj.address = address;
    mainObj.city = city;
    mainObj.about = aboutYou;
    mainObj.skills = skillDetails;
    console.log(mainObj);

});


back_button2.addEventListener("click", (e) => {
    e.preventDefault();
    const previousBullet = bullets[0];
    previousBullet.classList.remove("completed");
    currentStep--;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});


});

//experience form
next_button2.addEventListener("click", (e) => {
    e.preventDefault();
    const currenBullet = bullets[1];
    currenBullet.classList.add("completed");
    currentStep++;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});

    const jobTitle = document.getElementById("jobTitle").value;
    const employer = document.getElementById("employer").value;
    const city_experience = document.getElementById("city_experience").value;
    const country_experience = document.getElementById("country_experience").value;
    const experienceDetails = document.getElementById("experienceDetails").value;
    const from_experience = document.getElementById("from_experience").value;
    const to_experience = document.getElementById("to_experience").value;
    const workHere = document.getElementById("workHere").value;


    if (mainObj.experience.length === 0) {
        let experience_object1 = new Experience(1, jobTitle, employer, city_experience, country_experience, experienceDetails, from_experience, to_experience, workHere);
        mainObj.experience.push(experience_object1)


    }


    console.log(mainObj);
});

//to add or remove the add-another response button
window.addEventListener("click",() =>{
    if(id_experience >= 5){
        addExperienceDiv.classList.add("tab");
        console.log(addExperienceDiv.classList);
        console.log("I reached the limit")
    }
    else{
        console.log(addExperienceDiv.classList);
        if(addExperienceDiv.classList.contains("tab")){
            addExperienceDiv.classList.remove("tab");

        }
    }

    if(id_education >= 5){
        addEducationDiv.classList.add("tab");

    }
    else{
        if(addEducationDiv.classList.contains("tab")){
            addEducationDiv.classList.remove("tab");

        }
    }

    if(id_project >= 5){
        addProjectDiv.classList.add("tab");

    }
    else{
        if(addProjectDiv.classList.contains("tab")){
            addProjectDiv.classList.remove("tab");

        }
    }
})


//add another experience
addExperience.addEventListener("click", (e) => {
    e.preventDefault();
    // if (id_experience < 5)
    if (mainObj.experience.length < 5){
        id_experience++;

        let experience_html = `<div class="experience_form" id = experience_form${id_experience}>
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
`;
        // mainObj.experience.push()
        dynamic_experience.innerHTML += experience_html;

        // dynamic_experience.append(experience_html);
        console.log(id_experience);
    }

});



back_button3.addEventListener("click", (e) => {
    e.preventDefault();
    const previousBullet = bullets[1];
    previousBullet.classList.remove("completed");
    currentStep--;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});

});

//education form
next_button3.addEventListener("click", (e) => {
    e.preventDefault();
    const currenBullet = bullets[2];
    currenBullet.classList.add("completed");
    currentStep++;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});

    const institute = document.getElementById("institute").value;
    const degree = document.getElementById("degree").value;
    const city_education = document.getElementById("city_education").value;
    const country_education = document.getElementById("country_education").value;
    const educationDetails = document.getElementById("educationDetails").value;
    const from_education = document.getElementById("from_education").value;
    const to_education = document.getElementById("to_education").value;
    const studyHere = document.getElementById("studyHere").value;

    if (mainObj.education.length === 0) {
        mainObj.education.push(new Education(institute, degree, city_education, country_education, educationDetails, from_education, to_education, studyHere));
    }

    console.log(mainObj);

});


//add another experience
addEducation.addEventListener("click", (e) => {
    e.preventDefault();
    if (id_education < 5) {
        id_education++;

        let education_html = `<div class="education_form" id = "education_form${id_education}">
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
`;
        // mainObj.experience.push()
        dynamic_education.innerHTML += education_html;
        console.log(id_education);
    }
});

back_button4.addEventListener("click", (e) => {
    e.preventDefault();
    const previousBullet = bullets[2];
    previousBullet.classList.remove("completed");
    currentStep--;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});

});

//skills form
next_button4.addEventListener("click", (e) => {
    e.preventDefault();
    const currenBullet = bullets[3];
    currenBullet.classList.add("completed");
    currentStep++;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});

    mainObj.skills = document.getElementById("skillDetails").value;

});


back_button5.addEventListener("click", (e) => {
    e.preventDefault();
    const previousBullet = bullets[3];
    previousBullet.classList.remove("completed");
    currentStep--;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});


});

//project form
finish_button5.addEventListener("click", () => {

    const projectTitle = document.getElementById("projectTitle").value;
    const projectDetails = document.getElementById("projectDetails").value;

    if (mainObj.project.length === 0) {
        mainObj.project.push(new Project(projectTitle, projectDetails));
    }

    console.log(mainObj);
});

id_project = 1;
//add another experience
addProject.addEventListener("click", (e) => {
    e.preventDefault();
    if (id_project < 5) {
        id_project++;

        let project_html = `<div class="project_form" id="project_form${id_project}">
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
`;
        // mainObj.experience.push()
        dynamic_project.innerHTML += project_html;
        console.log(id_project);
    }
    else{
        addProjectDiv.classList.add("tab");
    }

});


//to submit the form
// finish_button.addEventListener("click", () => {
//   document.getElementById("form_resume").submit();
// });
const form1_contact = document.getElementById("form1_contact");
const form2_experience = document.getElementById("form2_experience");
const form3_education = document.getElementById("form3_education");
const form4_skills = document.getElementById("form4_skills");
const form5_projects = document.getElementById("form5_projects");

function showTab(n) {

    if (n === 1) {
        form1_contact.classList.remove("tab");
        form2_experience.classList.add("tab");


    } else if (n === 2) {
        form1_contact.classList.add("tab");
        form2_experience.classList.remove("tab");
        form3_education.classList.add("tab");

    } else if (n === 3) {
        form2_experience.classList.add("tab");
        form3_education.classList.remove("tab");
        form4_skills.classList.add("tab");
    } else if (n === 4) {
        form3_education.classList.add("tab");
        form4_skills.classList.remove("tab");
        form5_projects.classList.add("tab");
    } else if (n === 5) {
        form4_skills.classList.add("tab");
        form5_projects.classList.remove("tab");
    }

}

//experience class
class Experience {
    constructor(id_experience, jobTitle, employer, city, country, experienceDetails, from_experience, to_experience, workHere) {
        this.id_experience = id_experience;
        this.jobTitle = jobTitle;
        this.employer = employer;
        this.city = city;
        this.country = country;
        this.experienceDetails = experienceDetails;
        this.from_experience = from_experience;
        this.to_experience = to_experience;
        this.workHere = workHere;

    }
}

//education class
class Education {
    constructor(id_education, institute, degree, city, country, educationDetails, from_education, to_education, studyHere) {
        this.id_education = id_education;
        this.institute = institute;
        this.degree = degree;
        this.city = city;
        this.country = country;
        this.educationDetails = educationDetails;
        this.from_education = from_education;
        this.to_education = to_education;
        this.studyHere = studyHere;

    }
}

//project class
class Project {
    constructor(id_project, projectTitle, projectDetails) {
        this.id_project = id_project;
        this.projectTitle = projectTitle;
        this.projectDetails = projectDetails;
    }
}

//main object
const mainObj = {
    profilePic: null,
    firstName: null,
    lastName: null,
    email: null,
    phoneNumber: null,
    address: null,
    city: null,
    about: null,
    experience: [],
    education: [],
    skills: null,
    project: []

}
//main object for data
// next_button.addEventListener("click", () => {
//
//
//     const projectTitle = document.getElementById("projectTitle").value;
//     const projectDetails = document.getElementById("projectDetails").value;
//
//
// });



function ajaxcall() {
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/ict_jobseeker_44/Resume/Resume_form_contact")
    xhr.onload = function () {
        if (xhr.status == 200) {


            //selecting input values
            // const profilePi

        }
    }

    xhr.send();

}

// form.addEventListener("submit", (e) => {
//     e.preventDefault();
//
//     console.log("I submitted");
//     const inputs = [];
//     form.querySelectorAll("input").forEach((input) => {
//         const {
//             name
//             ,
//             value
//         }
//
//             = input;
//         inputs.push({name, value});
//     });

// ajaxcall();
//     console.log(mainObj);
// console.log(firstName);
// console.log(lastName);
// form.reset();
// })
// ;


// finish_button.addEventListener("click", (e) => {
//     e.preventDefault();
//     console.log("I am clicked");
//     form.submit();
//     ajaxcall();
//
//     // window.location.href = "http://localhost/ict_jobseeker_44/Resume/Resume_form_contact/Resume_form_contact"
// });

