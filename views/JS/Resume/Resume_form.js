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

// const finish_button = document.getElementById("finish");
const content = document.getElementById("content");
const bullets = [...document.querySelectorAll(".bullet")];
// const form1 = document.getElementById("form_1");
// const form2 = document.getElementById("form_2");
// const form3 = document.getElementById("form_3");
// const form4 = document.getElementById("form_4");
// const form5 = document.getElementById("form_5");
// form5.querySelector()

//input field assignments

//contact form variables
var firstName = document.getElementById("firstName").value;
var lastName = document.getElementById("lastName").value;
var email = document.getElementById("email").value;
var phoneNumber = document.getElementById("phoneNumber").value;
var address = document.getElementById("address").value;
var city = document.getElementById("city").value;
var aboutYou = document.getElementById("aboutYou").value;
var skillDetails = document.getElementById("skillDetails").value;

//experience form variables
var jobTitle = document.getElementById("jobTitle").value;
var employer = document.getElementById("employer").value;
var city_experience = document.getElementById("city_experience").value;
var country_experience = document.getElementById("country_experience").value;
var experienceDetails = document.getElementById("experienceDetails").value;
var from_experience = document.getElementById("from_experience").value;
var to_experience = document.getElementById("to_experience").value;
var workHere = document.getElementById("workHere").value;

//education form variables
var institute = document.getElementById("institute").value;
var degree = document.getElementById("degree").value;
var city_education = document.getElementById("city_education").value;
var country_education = document.getElementById("country_education").value;
var educationDetails = document.getElementById("educationDetails").value;
var from_education = document.getElementById("from_education").value;
var to_education = document.getElementById("to_education").value;
var studyHere = document.getElementById("studyHere").value;


//project form variables
var projectTitle = document.getElementById("projectTitle").value;
var projectDetails = document.getElementById("projectDetails").value;


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
// let id_experience = 1;
// let id_education = 1;
// let id_project = 1;

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


    if (mainObj.experience.length === 0) {
        let experience_object1 = new Experience(1, jobTitle, employer, city_experience, country_experience, experienceDetails, from_experience, to_experience, workHere);
        mainObj.experience.push(experience_object1)


    }


    console.log(mainObj);
});

//to add or remove the add-another response button
// window.addEventListener("click", () => {
//     if (id_experience >= 5) {
//         addExperienceDiv.classList.add("tab");
//         console.log(addExperienceDiv.classList);
//         console.log("I reached the limit")
//     } else {
//         console.log(addExperienceDiv.classList);
//         if (addExperienceDiv.classList.contains("tab")) {
//             addExperienceDiv.classList.remove("tab");
//
//         }
//     }
//
//     if (id_education >= 5) {
//         addEducationDiv.classList.add("tab");
//
//     } else {
//         if (addEducationDiv.classList.contains("tab")) {
//             addEducationDiv.classList.remove("tab");
//
//         }
//     }
//
//     if (id_project >= 5) {
//         addProjectDiv.classList.add("tab");
//
//     } else {
//         if (addProjectDiv.classList.contains("tab")) {
//             addProjectDiv.classList.remove("tab");
//
//         }
//     }
// })


//add another experience
addExperience.addEventListener("click", (e) => {
    e.preventDefault();
    let flag = false;
    let id_experience;
    for(let i = 0; i < 5; i++){
        if(mainObj.experience_id[i] == false){
            flag = true;
            id_experience = i;
            mainObj.experience_id[i] = true;
        }

    }
    if (flag == true) {

        let experience_html = `<div class="experience_form" id = experience_form${id_experience}>

            <!--cancel button-->
            <div id="cancelButton${id_experience}" class="cancelButtonExtra">
                <i title="Delete this response" onclick="delete_experience(${id_experience})" class="fa fa-trash-o" aria-hidden="true"></i>
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

            <!--cancel button-->
            <div id="cancelButton${id_education}" class="cancelButtonExtra">
                <i title="Delete this response" onclick="delete_education(${id_education})" class="fa fa-trash-o" aria-hidden="true"></i>
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

            <!--cancel button-->
            <div id="cancelButton${id_project}" class="cancelButtonExtra">
                <i title="Delete this response" onclick="delete_project(${id_project})" class="fa fa-trash-o" aria-hidden="true"></i>
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
`;
        // mainObj.experience.push()
        dynamic_project.innerHTML += project_html;
        console.log(id_project);
    } else {
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
    constructor(id_experience, jobTitle, employer, city, country, experienceDetails, from_experience, to_experience, workHere, filled) {
        this.id_experience = id_experience;
        this.jobTitle = jobTitle;
        this.employer = employer;
        this.city = city;
        this.country = country;
        this.experienceDetails = experienceDetails;
        this.from_experience = from_experience;
        this.to_experience = to_experience;
        this.workHere = workHere;
        this.filled = filled;


    }
}

//experience objects
var exp1 = new Experience(1,null, null, null, null, null, null, null, null);
var exp2 = new Experience(2,null, null, null, null, null, null, null, null);
var exp3 = new Experience(3,null, null, null, null, null, null, null, null);
var exp4 = new Experience(4,null, null, null, null, null, null, null, null);
var exp5 = new Experience(5,null, null, null, null, null, null, null, null);


//education class
class Education {
    constructor(id_education, institute, degree, city, country, educationDetails, from_education, to_education, studyHere, filled) {
        this.id_education = id_education;
        this.institute = institute;
        this.degree = degree;
        this.city = city;
        this.country = country;
        this.educationDetails = educationDetails;
        this.from_education = from_education;
        this.to_education = to_education;
        this.studyHere = studyHere;
        this.filled = filled;

    }
}

//education objects
var edu1 = new Education(1, null, null, null, null, null, null, null, null);
var edu2 = new Education(2, null, null, null, null, null, null, null, null);
var edu3 = new Education(3, null, null, null, null, null, null, null, null);
var edu4 = new Education(4, null, null, null, null, null, null, null, null);
var edu5 = new Education(5, null, null, null, null, null, null, null, null);


//project class
class Project {
    constructor(id_project, projectTitle, projectDetails, filled) {
        this.id_project = id_project;
        this.projectTitle = projectTitle;
        this.projectDetails = projectDetails;
        this.filled = filled;

    }
}

//project object
var proj1 = new Project(1, null, null);
var proj2 = new Project(2, null, null);
var proj3 = new Project(3, null, null);
var proj4 = new Project(4, null, null);
var proj5 = new Project(5, null, null);


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
    experience_id: {0:true, 1:false, 2:false, 3:false, 4:false},
    experience: [exp1, exp2, exp3, exp4, exp5],
    education_id: {0:true, 1:false, 2:false, 3:false, 4:false},
    education: [edu1, edu2, edu3, edu4, edu5],
    skills: null,
    project_id: {0:true, 1:false, 2:false, 3:false, 4:false},
    project: [proj1, proj2, proj3, proj4, proj5]

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

//functions for delete responses

//delete experiences
function delete_experience(exp_id) {
        let total_exp = 0;// to store how many slots are reserved
        for (let i = 0; i < mainObj.experience_id.length; i++){
            if(mainObj.experience_id[i] === true){
                total_exp++
            }
        }
        if (total_exp > 1){
            mainObj.experience_id[exp_id] = false;
        }
        let objName = "exp"+exp_id;
        objName.jobTitle = null;
        objName.employer = null;
        objName.city = null;
        objName.country = null;
        objName.experienceDetails = null;
        objName.from_experience = null;
        objName.to_experience = null;
        objName.workHere = null;


}


//delete education

function delete_education(edu_id) {
    let total_edu = 0;// to store how many slots are reserved
    for (let i = 0; i < mainObj.education_id.length; i++){
        if(mainObj.education_id[i] === true){
            total_edu++
        }
    }
    if (total_edu > 1){
        mainObj.education_id[edu_id] = false;
    }
    let objName = "edu"+edu_id;
    objName.institute = null;
    objName.degree = null;
    objName.city = null;
    objName.country = null;
    objName.educationDetails = null;
    objName.from_education = null;
    objName.to_education = null;
    objName.studyHere = null;


}



//delete project

function delete_project(proj_id) {
    let total_proj = 0;// to store how many slots are reserved
    for (let i = 0; i < mainObj.project_id.length; i++){
        if(mainObj.project_id[i] === true){
            total_proj++
        }
    }
    if (total_proj > 1){
        mainObj.project_id[proj_id] = false;
    }
    let objName = "proj"+proj_id;
    objName.projectTitle = null;
    objName.projectDetails = null;


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

