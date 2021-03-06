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

const content = document.getElementById("content");
const bullets = [...document.querySelectorAll(".bullet")];

//form validation
function validate_contact() {

    //form validations
    const first_name_error = document.getElementById("firstName");
    const email_error = document.getElementById("email");
    const phone_error = document.getElementById("phoneNumber");


//variables for names of error popup

    const first_name_error_message = document.getElementById("error_first_name");
    const email_error_message = document.getElementById("error_email");
    const phone_error_message = document.getElementById("error_phoneNumber");


    let flag = 0;
    let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (first_name_error.value == "") {
        first_name_error_message.innerHTML = 'First Name need to be filled';
        flag = 1;
    } else {
        first_name_error_message.innerHTML = '';

    }

    if (email_error.value == "" || !email_error.value.match(validRegex)) {
        email_error_message.innerHTML = 'Insert a valid email';
        flag = 1;
    } else {
        email_error_message.innerHTML = '';

    }

    // if(){
    //     email_error_message.innerHTML = 'insert a valid email';
    //     flag = 1;
    // }


    if (phone_error.value.length < 10) {
        phone_error_message.innerHTML = 'Phone Number cannot be less than 10 Numbers';
        flag = 1;
    } else {
        phone_error_message.innerHTML = '';

    }

    if (flag === 1) {
        console.log("Hi I am inside flag 1");
        console.log(flag);
        return false;
    }
    console.log("Hi I am inside flag 0");
    console.log(flag);
    return true;
}


//form validation for experience
function validate_experience() {
    let flag = 0;
    const jobTitle2a_error = document.getElementById("jobTitle2a");
    const employer2a_error = document.getElementById("employer2a");
    const jobTitle2b_error = document.getElementById("jobTitle2b");
    const employer2b_error = document.getElementById("employer2b");
    const jobTitle2c_error = document.getElementById("jobTitle2c");
    const employer2c_error = document.getElementById("employer2c");

    //variables for names of error popup
    const jobTitle2a_error_message = document.getElementById("error_jobTitle2a");
    const employer2a_error_message = document.getElementById("error_employer2a");
    const jobTitle2b_error_message = document.getElementById("error_jobTitle2b");
    const employer2b_error_message = document.getElementById("error_employer2b");
    const jobTitle2c_error_message = document.getElementById("error_jobTitle2c");
    const employer2c_error_message = document.getElementById("error_employer2c");

    if (jobTitle2a_error.value != "" && employer2a_error.value == "") {
        employer2a_error_message.innerHTML = 'Employer name need to be filled';
        flag = 1;
    } else {
        employer2a_error_message.innerHTML = '';

    }

    if (jobTitle2b_error.value != "" && employer2b_error.value == "") {
        employer2b_error_message.innerHTML = 'Employer name need to be filled';
        flag = 1;
    } else {
        employer2b_error_message.innerHTML = '';

    }

    if (jobTitle2c_error.value != "" && employer2c_error.value == "") {
        employer2c_error_message.innerHTML = 'Employer name need to be filled';
        flag = 1;
    } else {
        employer2c_error_message.innerHTML = '';

    }

    if (jobTitle2a_error.value == "" && employer2a_error.value != "") {
        jobTitle2a_error_message.innerHTML = 'Job title need to be filled';
        flag = 1;
    } else {
        jobTitle2a_error_message.innerHTML = '';
    }

    if (jobTitle2b_error.value == "" && employer2b_error.value != "") {
        jobTitle2b_error_message.innerHTML = 'Job title need to be filled';
        flag = 1;
    } else {
        jobTitle2b_error_message.innerHTML = '';

    }

    if (jobTitle2c_error.value == "" && employer2c_error.value != "") {
        jobTitle2c_error_message.innerHTML = 'Job title need to be filled';
        flag = 1;
    } else {
        jobTitle2c_error_message.innerHTML = '';

    }

    if (flag === 1) {
        console.log("Hi I am inside flag 1");
        console.log(flag);
        return false;
    }
    console.log("Hi I am inside flag 0");
    console.log(flag);
    return true;

}

//form validation for education
function validate_education() {
    let flag = 0;
    const institute3a_error = document.getElementById("institute3a");
    const degree3a_error = document.getElementById("degree3a");
    const institute3b_error = document.getElementById("institute3b");
    const degree3b_error = document.getElementById("degree3b");
    const institute3c_error = document.getElementById("institute3c");
    const degree3c_error = document.getElementById("degree3c");


    //variables for names of error popup
    const institute3a_error_message = document.getElementById("error_institute3a");
    const degree3a_error_message = document.getElementById("error_degree3a");
    const institute3b_error_message = document.getElementById("error_institute3b");
    const degree3b_error_message = document.getElementById("error_degree3b");
    const institute3c_error_message = document.getElementById("error_institute3c");
    const degree3c_error_message = document.getElementById("error_degree3c");

    if (institute3a_error.value != "" && degree3a_error.value == "") {
        degree3a_error_message.innerHTML = 'Degree need to be filled';
        flag = 1;

    } else {
        degree3a_error_message.innerHTML = '';

    }

    if (institute3b_error.value != "" && degree3b_error.value == "") {
        degree3b_error_message.innerHTML = 'Degree need to be filled';
        flag = 1;
    } else {
        degree3b_error_message.innerHTML = '';

    }

    if (institute3c_error.value != "" && degree3c_error.value == "") {
        degree3c_error_message.innerHTML = 'Degree need to be filled';
        flag = 1;
    } else {
        degree3c_error_message.innerHTML = '';

    }


    if (institute3a_error.value == "" && degree3a_error.value != "") {
        institute3a_error_message.innerHTML = 'Institute need to be filled';
        flag = 1;
    } else {
        institute3a_error_message.innerHTML = '';
    }

    if (institute3b_error.value == "" && degree3b_error.value != "") {
        institute3b_error_message.innerHTML = 'Institute need to be filled';
        flag = 1;
    } else {
        institute3b_error_message.innerHTML = '';
    }

    if (institute3c_error.value == "" && degree3c_error.value != "") {
        institute3c_error_message.innerHTML = 'Institute need to be filled';
        flag = 1;
    } else {
        institute3c_error_message.innerHTML = '';
    }


    if (flag === 1) {
        console.log("Hi I am inside flag 1");
        console.log(flag);
        return false;
    }
    console.log("Hi I am inside flag 0");
    console.log(flag);
    return true;

}



function hideFormError(x) {
    x.value = '';
}

//function to compare date
function compareDate(from, to) {
    if (from > to) {
        return true;
    } else return false;
}

//date validation
function date_validation_experience(){
    let flag = 0;
    const date_error_experience2a = document.getElementById("date_error_experience2a");
    const date_error_experience2b = document.getElementById("date_error_experience2b");
    const date_error_experience2c = document.getElementById("date_error_experience2c");

    //compare from date and to date
    if (compareDate(from_experience2a, to_experience2a)) {
        date_error_experience2a.innerHTML = 'From Date cannot be greater than To Date';
        flag = 1;
    }
    else{
        date_error_experience2a.innerHTML = '';
    }

    if (compareDate(from_experience2b, to_experience2b)) {
        date_error_experience2b.innerHTML = 'From Date cannot be greater than To Date';
        flag = 1;
    }
    else{
        date_error_experience2b.innerHTML = '';
    }

    if (compareDate(from_experience2c, to_experience2c)) {
        date_error_experience2c.innerHTML = 'From Date cannot be greater than To Date';
        flag = 1;
    }
    else{
        date_error_experience2c.innerHTML = '';
    }

    if (flag === 1) {
        console.log("Hi I am inside flag 1 in date");
        console.log(flag);
        return false;
    }
    console.log("Hi I am inside flag 0 in date");
    console.log(flag);
    return true;

}

//date validation education
function date_validation_education(){

    let flag = 0;
    const date_error_education3a = document.getElementById("date_error_education3a");
    const date_error_education3b = document.getElementById("date_error_education3b");
    const date_error_education3c = document.getElementById("date_error_education3c");

    //compare from date and to date
    if (compareDate(from_education3a, to_education3a)) {
        date_error_education3a.innerHTML = 'From Date cannot be greater than To Date';
        flag = 1;
    }
    else{
        date_error_education3a.innerHTML = '';
    }

    if (compareDate(from_education3b, to_education3b)) {
        date_error_education3b.innerHTML = 'From Date cannot be greater than To Date';
        flag = 1;
    }
    else{
        date_error_education3b.innerHTML = '';
    }

    if (compareDate(from_education3c, to_education3c)) {
        date_error_education3c.innerHTML = 'From Date cannot be greater than To Date';
        flag = 1;
    }
    else{
        date_error_education3c.innerHTML = '';
    }

    if (flag === 1) {
        console.log("Hi I am inside flag 1 in date");
        console.log(flag);
        return false;
    }
    console.log("Hi I am inside flag 0 in date");
    console.log(flag);
    return true;
}

//compare to to date and currently study or work
function compareCurrent(current, to_date) {
    if (current == true) {
        let date = new Date();
        to_date = date.toISOString().split('T')[0];
    }
    return to_date;
}


//classes

// to avoid the default enter press
// document.addEventListener('keypress', function (e) {
//     if (e.keyCode === 13 || e.which === 13) {
//         e.preventDefault();
//         return false;
//     }
//
// });

//for bullet points
//bullet list

const bullet = "\u2022";
const bulletWithSpace = `${bullet} `;
const enter = 13;


//for bullet points

const handleInput = (event) => {
    const {keyCode, target} = event;
    const {selectionStart, value} = target;

    if (keyCode === enter) {
        console.log('a');
        target.value = [...value]
            .map((c, i) => i === selectionStart - 1
                ? `\n${bulletWithSpace}`
                : c
            )
            .join('');
        console.log(target.value);

        target.selectionStart = selectionStart + bulletWithSpace.length;
        target.selectionEnd = selectionStart + bulletWithSpace.length;
    }

    if (value[0] !== bullet) {
        target.value = `${bulletWithSpace}${value}`;
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

//education class
class Education {
    constructor(id_education, institute, degree, city, country, from_education, to_education, studyHere, filled) {
        this.id_education = id_education;
        this.institute = institute;
        this.degree = degree;
        this.city = city;
        this.country = country;
        // this.educationDetails = educationDetails;
        this.from_education = from_education;
        this.to_education = to_education;
        this.studyHere = studyHere;
        this.filled = filled;

    }
}

//project class
class Project {
    constructor(id_project, projectTitle, projectDetails, filled) {
        this.id_project = id_project;
        this.projectTitle = projectTitle;
        this.projectDetails = projectDetails;
        this.filled = filled;

    }
}

//main object
function objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
                       jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
                       jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
                       jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
                       institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
                       institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
                       institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
                       projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c) {
    //experience objects
    var exp1 = new Experience('2a', jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a, 0);
    var exp2 = new Experience('2b', jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b, 0);
    var exp3 = new Experience('2c', jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c, 0);


    //education objects
    var edu1 = new Education('3a', institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a, 0);
    var edu2 = new Education('3b', institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b, 0);
    var edu3 = new Education('3c', institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c, 0);

    //project object
    var proj1 = new Project('5a', projectTitle5a, projectDetails5a);
    var proj2 = new Project('5b', projectTitle5b, projectDetails5b);
    var proj3 = new Project('5c', projectTitle5c, projectDetails5c);

    var mainObj = {
        profilePic: null,
        firstName: firstName,
        lastName: lastName,
        email: email,
        phoneNumber: phoneNumber,
        address: address,
        city: city,
        about: aboutYou,
        experience_id: {'2a': true, '2b': false, '2c': false},
        experience: [exp1, exp2, exp3],
        education_id: {'3a': true, '3b': false, '3c': false},
        education: [edu1, edu2, edu3],
        skills: skillDetails,
        project_id: {'5a': true, '5b': false, '5c': false},
        project: [proj1, proj2, proj3]

    }

    console.log(mainObj);
    return mainObj;
}

//to get resume data
function ajax_get_resume_data(){
    //establish connection
    const xhr = new XMLHttpRequest();
    xhr.open("POST", )
    xhr.onload = function (){

    }
}

function variableAssignments() {
    //contact form variables
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var phoneNumber = document.getElementById("phoneNumber").valvaraddress = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var aboutYou = document.getElementById("aboutYou").value;
    var skillDetails = document.getElementById("skillDetails").value;

//experience form variables

//experience 2a
    var jobTitle2a = document.getElementById("jobTitle2a").value;
    var employer2a = document.getElementById("employer2a").value;
    var city_experience2a = document.getElementById("city_experience2a").value;
    var country_experience2a = document.getElementById("country_experience2a").value;
    var experienceDetails2a = document.getElementById("experienceDetails2a").value;
    var from_experience2a = document.getElementById("from_experience2a").value;
    var to_experience2a = document.getElementById("to_experience2a").value;
    var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
    var jobTitle2b = document.getElementById("jobTitle2b").value;
    var employer2b = document.getElementById("employer2b").value;
    var city_experience2b = document.getElementById("city_experience2b").value;
    var country_experience2b = document.getElementById("country_experience2b").value;
    var experienceDetails2b = document.getElementById("experienceDetails2b").value;
    var from_experience2b = document.getElementById("from_experience2b").value;
    var to_experience2b = document.getElementById("to_experience2b").value;
    var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
    var jobTitle2c = document.getElementById("jobTitle2c").value;
    var employer2c = document.getElementById("employer2c").value;
    var city_experience2c = document.getElementById("city_experience2c").value;
    var country_experience2c = document.getElementById("country_experience2c").value;
    var experienceDetails2c = document.getElementById("experienceDetails2c").value;
    var from_experience2c = document.getElementById("from_experience2c").value;
    var to_experience2c = document.getElementById("to_experience2c").valvarworkHere2c = document.getElementById("workHere2c").value;

    //education form variables

// education 3a
    var institute3a = document.getElementById("institute3a").value;
    var degree3a = document.getElementById("degree3a").value;
    var city_education3a = document.getElementById("city_education3a").value;
    var country_education3a = document.getElementById("country_education3a").value;
    // var educationDetails3a = document.getElementById("educationDetails3a").value;
    var from_education3a = document.getElementById("from_education3a").value;
    var to_education3a = document.getElementById("to_education3a").value;
    var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
    var institute3b = document.getElementById("institute3b").value;
    var degree3b = document.getElementById("degree3b").value;
    var city_education3b = document.getElementById("city_education3b").value;
    var country_education3b = document.getElementById("country_education3b").value;
    // var educationDetails3b = document.getElementById("educationDetails3b").value;
    var from_education3b = document.getElementById("from_education3b").value;
    var to_education3b = document.getElementById("to_education3b").value;
    var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
    var institute3c = document.getElementById("institute3c").value;
    var degree3c = document.getElementById("degree3c").value;
    var city_education3c = document.getElementById("city_education3c").value;
    var country_education3c = document.getElementById("country_education3c").value;
    // var educationDetails3c = document.getElementById("educationDetails3c").value;
    var from_education3c = document.getElementById("from_education3c").value;
    var to_education3c = document.getElementById("to_education3c").value;
    var studyHere3c = document.getElementById("studyHere3c").value;

    //project form variables

//project form 5a
    var projectTitle5a = document.getElementById("projectTitle5a").value;
    var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
    var projectTitle5b = document.getElementById("projectTitle5b").value;
    var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
    var projectTitle5c = document.getElementById("projectTitle5c").value;
    var projectDetails5c = document.getElementById("projectDetails5c").value;
}

variableAssignments();

//main obj
const mainObj = {
    profilePic: null,
    firstName: null,
    lastName: null,
    email: null,
    phoneNumber: null,
    address: null,
    city: null,
    about: null,
    experience_id: {'2a': true, '2b': false, '2c': false},
    experience: [],
    education_id: {'3a': true, '3b': false, '3c': false},
    education: [],
    skills: null,
    project_id: {'5a': true, '5b': false, '5c': false},
    project: []
}

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
    if (validate_contact()) {
        const currenBullet = bullets[0];
        currenBullet.classList.add("completed");
        currentStep++;
        showTab(currentStep);
        console.log(currentStep);
        // variableAssignments();

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

//experience 2a
        var jobTitle2a = document.getElementById("jobTitle2a").value;
        var employer2a = document.getElementById("employer2a").value;
        var city_experience2a = document.getElementById("city_experience2a").value;
        var country_experience2a = document.getElementById("country_experience2a").value;
        var experienceDetails2a = document.getElementById("experienceDetails2a").value;
        var from_experience2a = document.getElementById("from_experience2a").value;
        var to_experience2a = document.getElementById("to_experience2a").value;
        var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
        var jobTitle2b = document.getElementById("jobTitle2b").value;
        var employer2b = document.getElementById("employer2b").value;
        var city_experience2b = document.getElementById("city_experience2b").value;
        var country_experience2b = document.getElementById("country_experience2b").value;
        var experienceDetails2b = document.getElementById("experienceDetails2b").value;
        var from_experience2b = document.getElementById("from_experience2b").value;
        var to_experience2b = document.getElementById("to_experience2b").value;
        var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
        var jobTitle2c = document.getElementById("jobTitle2c").value;
        var employer2c = document.getElementById("employer2c").value;
        var city_experience2c = document.getElementById("city_experience2c").value;
        var country_experience2c = document.getElementById("country_experience2c").value;
        var experienceDetails2c = document.getElementById("experienceDetails2c").value;
        var from_experience2c = document.getElementById("from_experience2c").value;
        var to_experience2c = document.getElementById("to_experience2c").value;
        var workHere2c = document.getElementById("workHere2c").value;

        //education form variables

// education 3a
        var institute3a = document.getElementById("institute3a").value;
        var degree3a = document.getElementById("degree3a").value;
        var city_education3a = document.getElementById("city_education3a").value;
        var country_education3a = document.getElementById("country_education3a").value;
        // var educationDetails3a = document.getElementById("educationDetails3a").value;
        var from_education3a = document.getElementById("from_education3a").value;
        var to_education3a = document.getElementById("to_education3a").value;
        var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
        var institute3b = document.getElementById("institute3b").value;
        var degree3b = document.getElementById("degree3b").value;
        var city_education3b = document.getElementById("city_education3b").value;
        var country_education3b = document.getElementById("country_education3b").value;
        // var educationDetails3b = document.getElementById("educationDetails3b").value;
        var from_education3b = document.getElementById("from_education3b").value;
        var to_education3b = document.getElementById("to_education3b").value;
        var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
        var institute3c = document.getElementById("institute3c").value;
        var degree3c = document.getElementById("degree3c").value;
        var city_education3c = document.getElementById("city_education3c").value;
        var country_education3c = document.getElementById("country_education3c").value;
        // var educationDetails3c = document.getElementById("educationDetails3c").value;
        var from_education3c = document.getElementById("from_education3c").value;
        var to_education3c = document.getElementById("to_education3c").value;
        var studyHere3c = document.getElementById("studyHere3c").value;

        //project form variables

//project form 5a
        var projectTitle5a = document.getElementById("projectTitle5a").value;
        var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
        var projectTitle5b = document.getElementById("projectTitle5b").value;
        var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
        var projectTitle5c = document.getElementById("projectTitle5c").value;
        var projectDetails5c = document.getElementById("projectDetails5c").value;

        //function call for object assignment
        objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
            jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
            jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
            jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
            institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
            institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
            institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
            projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c);
    }
    window.scrollTo({top: 0, behavior: 'smooth'});

});

// console.log(firstName);
//exit from experience
back_button2.addEventListener("click", (e) => {
    e.preventDefault();

    const previousBullet = bullets[0];
    previousBullet.classList.remove("completed");
    currentStep--;
    showTab(currentStep);
    console.log(currentStep);
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

//experience 2a
    var jobTitle2a = document.getElementById("jobTitle2a").value;
    var employer2a = document.getElementById("employer2a").value;
    var city_experience2a = document.getElementById("city_experience2a").value;
    var country_experience2a = document.getElementById("country_experience2a").value;
    var experienceDetails2a = document.getElementById("experienceDetails2a").value;
    var from_experience2a = document.getElementById("from_experience2a").value;
    var to_experience2a = document.getElementById("to_experience2a").value;
    var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
    var jobTitle2b = document.getElementById("jobTitle2b").value;
    var employer2b = document.getElementById("employer2b").value;
    var city_experience2b = document.getElementById("city_experience2b").value;
    var country_experience2b = document.getElementById("country_experience2b").value;
    var experienceDetails2b = document.getElementById("experienceDetails2b").value;
    var from_experience2b = document.getElementById("from_experience2b").value;
    var to_experience2b = document.getElementById("to_experience2b").value;
    var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
    var jobTitle2c = document.getElementById("jobTitle2c").value;
    var employer2c = document.getElementById("employer2c").value;
    var city_experience2c = document.getElementById("city_experience2c").value;
    var country_experience2c = document.getElementById("country_experience2c").value;
    var experienceDetails2c = document.getElementById("experienceDetails2c").value;
    var from_experience2c = document.getElementById("from_experience2c").value;
    var to_experience2c = document.getElementById("to_experience2c").value;
    var workHere2c = document.getElementById("workHere2c").value;

    //education form variables

// education 3a
    var institute3a = document.getElementById("institute3a").value;
    var degree3a = document.getElementById("degree3a").value;
    var city_education3a = document.getElementById("city_education3a").value;
    var country_education3a = document.getElementById("country_education3a").value;
    // var educationDetails3a = document.getElementById("educationDetails3a").value;
    var from_education3a = document.getElementById("from_education3a").value;
    var to_education3a = document.getElementById("to_education3a").value;
    var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
    var institute3b = document.getElementById("institute3b").value;
    var degree3b = document.getElementById("degree3b").value;
    var city_education3b = document.getElementById("city_education3b").value;
    var country_education3b = document.getElementById("country_education3b").value;
    // var educationDetails3b = document.getElementById("educationDetails3b").value;
    var from_education3b = document.getElementById("from_education3b").value;
    var to_education3b = document.getElementById("to_education3b").value;
    var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
    var institute3c = document.getElementById("institute3c").value;
    var degree3c = document.getElementById("degree3c").value;
    var city_education3c = document.getElementById("city_education3c").value;
    var country_education3c = document.getElementById("country_education3c").value;
    // var educationDetails3c = document.getElementById("educationDetails3c").value;
    var from_education3c = document.getElementById("from_education3c").value;
    var to_education3c = document.getElementById("to_education3c").value;
    var studyHere3c = document.getElementById("studyHere3c").value;

    //project form variables

//project form 5a
    var projectTitle5a = document.getElementById("projectTitle5a").value;
    var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
    var projectTitle5b = document.getElementById("projectTitle5b").value;
    var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
    var projectTitle5c = document.getElementById("projectTitle5c").value;
    var projectDetails5c = document.getElementById("projectDetails5c").value;
    objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
        jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
        jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
        jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
        institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
        institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
        institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
        projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c);


    window.scrollTo({top: 0, behavior: 'smooth'});

});

//experience form
next_button2.addEventListener("click", (e) => {
    e.preventDefault();
    if (validate_experience()) {


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

//experience 2a
        var jobTitle2a = document.getElementById("jobTitle2a").value;
        var employer2a = document.getElementById("employer2a").value;
        var city_experience2a = document.getElementById("city_experience2a").value;
        var country_experience2a = document.getElementById("country_experience2a").value;
        var experienceDetails2a = document.getElementById("experienceDetails2a").value;
        var from_experience2a = document.getElementById("from_experience2a").value;
        var to_experience2a = document.getElementById("to_experience2a").value;
        var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
        var jobTitle2b = document.getElementById("jobTitle2b").value;
        var employer2b = document.getElementById("employer2b").value;
        var city_experience2b = document.getElementById("city_experience2b").value;
        var country_experience2b = document.getElementById("country_experience2b").value;
        var experienceDetails2b = document.getElementById("experienceDetails2b").value;
        var from_experience2b = document.getElementById("from_experience2b").value;
        var to_experience2b = document.getElementById("to_experience2b").value;
        var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
        var jobTitle2c = document.getElementById("jobTitle2c").value;
        var employer2c = document.getElementById("employer2c").value;
        var city_experience2c = document.getElementById("city_experience2c").value;
        var country_experience2c = document.getElementById("country_experience2c").value;
        var experienceDetails2c = document.getElementById("experienceDetails2c").value;
        var from_experience2c = document.getElementById("from_experience2c").value;
        var to_experience2c = document.getElementById("to_experience2c").value;
        var workHere2c = document.getElementById("workHere2c").value;

        //education form variables

// education 3a
        var institute3a = document.getElementById("institute3a").value;
        var degree3a = document.getElementById("degree3a").value;
        var city_education3a = document.getElementById("city_education3a").value;
        var country_education3a = document.getElementById("country_education3a").value;
        // var educationDetails3a = document.getElementById("educationDetails3a").value;
        var from_education3a = document.getElementById("from_education3a").value;
        var to_education3a = document.getElementById("to_education3a").value;
        var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
        var institute3b = document.getElementById("institute3b").value;
        var degree3b = document.getElementById("degree3b").value;
        var city_education3b = document.getElementById("city_education3b").value;
        var country_education3b = document.getElementById("country_education3b").value;
        // var educationDetails3b = document.getElementById("educationDetails3b").value;
        var from_education3b = document.getElementById("from_education3b").value;
        var to_education3b = document.getElementById("to_education3b").value;
        var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
        var institute3c = document.getElementById("institute3c").value;
        var degree3c = document.getElementById("degree3c").value;
        var city_education3c = document.getElementById("city_education3c").value;
        var country_education3c = document.getElementById("country_education3c").value;
        // var educationDetails3c = document.getElementById("educationDetails3c").value;
        var from_education3c = document.getElementById("from_education3c").value;
        var to_education3c = document.getElementById("to_education3c").value;
        var studyHere3c = document.getElementById("studyHere3c").value;

        //project form variables

//project form 5a
        var projectTitle5a = document.getElementById("projectTitle5a").value;
        var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
        var projectTitle5b = document.getElementById("projectTitle5b").value;
        var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
        var projectTitle5c = document.getElementById("projectTitle5c").value;
        var projectDetails5c = document.getElementById("projectDetails5c").value;

        var from_experience2a_date_validate = document.getElementById("from_experience2a");
        var to_experience2a_date_validate = document.getElementById("to_experience2a");

        var from_experience2b_date_validate = document.getElementById("from_experience2b");
        var to_experience2b_date_validate = document.getElementById("to_experience2b");

        var from_experience2c_date_validate = document.getElementById("from_experience2c");
        var to_experience2c_date_validate = document.getElementById("to_experience2c");

            date_validation_experience();
            const currenBullet = bullets[1];
            currenBullet.classList.add("completed");
            currentStep++;
            showTab(currentStep);
            console.log(currentStep);
            objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
                jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
                jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
                jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
                institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
                institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
                institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
                projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c);
        }
        // if (mainObj.experience.length === 0) {
        //     let experience_object1 = new Experience(1, jobTitle, employer, city_experience, country_experience, experienceDetails, from_experience, to_experience, workHere);
        //     mainObj.experience.push(experience_object1)
        //
        //
        // }


    window.scrollTo({top: 0, behavior: 'smooth'});

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
    // for(let i = 0; i < 5; i++){
    //     if(mainObj.experience_id[i] == false){
    //         flag = true;
    //         id_experience = i;
    //         mainObj.experience_id[i] = true;
    //     }
    //
    // }
});


back_button3.addEventListener("click", (e) => {
    e.preventDefault();
    const previousBullet = bullets[1];
    previousBullet.classList.remove("completed");
    currentStep--;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});

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

//experience 2a
    var jobTitle2a = document.getElementById("jobTitle2a").value;
    var employer2a = document.getElementById("employer2a").value;
    var city_experience2a = document.getElementById("city_experience2a").value;
    var country_experience2a = document.getElementById("country_experience2a").value;
    var experienceDetails2a = document.getElementById("experienceDetails2a").value;
    var from_experience2a = document.getElementById("from_experience2a").value;
    var to_experience2a = document.getElementById("to_experience2a").value;
    var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
    var jobTitle2b = document.getElementById("jobTitle2b").value;
    var employer2b = document.getElementById("employer2b").value;
    var city_experience2b = document.getElementById("city_experience2b").value;
    var country_experience2b = document.getElementById("country_experience2b").value;
    var experienceDetails2b = document.getElementById("experienceDetails2b").value;
    var from_experience2b = document.getElementById("from_experience2b").value;
    var to_experience2b = document.getElementById("to_experience2b").value;
    var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
    var jobTitle2c = document.getElementById("jobTitle2c").value;
    var employer2c = document.getElementById("employer2c").value;
    var city_experience2c = document.getElementById("city_experience2c").value;
    var country_experience2c = document.getElementById("country_experience2c").value;
    var experienceDetails2c = document.getElementById("experienceDetails2c").value;
    var from_experience2c = document.getElementById("from_experience2c").value;
    var to_experience2c = document.getElementById("to_experience2c").value;
    var workHere2c = document.getElementById("workHere2c").value;

    //education form variables

// education 3a
    var institute3a = document.getElementById("institute3a").value;
    var degree3a = document.getElementById("degree3a").value;
    var city_education3a = document.getElementById("city_education3a").value;
    var country_education3a = document.getElementById("country_education3a").value;
    // var educationDetails3a = document.getElementById("educationDetails3a").value;
    var from_education3a = document.getElementById("from_education3a").value;
    var to_education3a = document.getElementById("to_education3a").value;
    var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
    var institute3b = document.getElementById("institute3b").value;
    var degree3b = document.getElementById("degree3b").value;
    var city_education3b = document.getElementById("city_education3b").value;
    var country_education3b = document.getElementById("country_education3b").value;
    // var educationDetails3b = document.getElementById("educationDetails3b").value;
    var from_education3b = document.getElementById("from_education3b").value;
    var to_education3b = document.getElementById("to_education3b").value;
    var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
    var institute3c = document.getElementById("institute3c").value;
    var degree3c = document.getElementById("degree3c").value;
    var city_education3c = document.getElementById("city_education3c").value;
    var country_education3c = document.getElementById("country_education3c").value;
    // var educationDetails3c = document.getElementById("educationDetails3c").value;
    var from_education3c = document.getElementById("from_education3c").value;
    var to_education3c = document.getElementById("to_education3c").value;
    var studyHere3c = document.getElementById("studyHere3c").value;

    //project form variables

//project form 5a
    var projectTitle5a = document.getElementById("projectTitle5a").value;
    var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
    var projectTitle5b = document.getElementById("projectTitle5b").value;
    var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
    var projectTitle5c = document.getElementById("projectTitle5c").value;
    var projectDetails5c = document.getElementById("projectDetails5c").value;

    objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
        jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
        jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
        jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
        institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
        institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
        institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
        projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c);

});

//education form
next_button3.addEventListener("click", (e) => {
    e.preventDefault();
    if (validate_education() && date_validation_education()) {
        const currenBullet = bullets[2];
        currenBullet.classList.add("completed");
        currentStep++;
        showTab(currentStep);
        console.log(currentStep);

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

//experience 2a
        var jobTitle2a = document.getElementById("jobTitle2a").value;
        var employer2a = document.getElementById("employer2a").value;
        var city_experience2a = document.getElementById("city_experience2a").value;
        var country_experience2a = document.getElementById("country_experience2a").value;
        var experienceDetails2a = document.getElementById("experienceDetails2a").value;
        var from_experience2a = document.getElementById("from_experience2a").value;
        var to_experience2a = document.getElementById("to_experience2a").value;
        var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
        var jobTitle2b = document.getElementById("jobTitle2b").value;
        var employer2b = document.getElementById("employer2b").value;
        var city_experience2b = document.getElementById("city_experience2b").value;
        var country_experience2b = document.getElementById("country_experience2b").value;
        var experienceDetails2b = document.getElementById("experienceDetails2b").value;
        var from_experience2b = document.getElementById("from_experience2b").value;
        var to_experience2b = document.getElementById("to_experience2b").value;
        var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
        var jobTitle2c = document.getElementById("jobTitle2c").value;
        var employer2c = document.getElementById("employer2c").value;
        var city_experience2c = document.getElementById("city_experience2c").value;
        var country_experience2c = document.getElementById("country_experience2c").value;
        var experienceDetails2c = document.getElementById("experienceDetails2c").value;
        var from_experience2c = document.getElementById("from_experience2c").value;
        var to_experience2c = document.getElementById("to_experience2c").value;
        var workHere2c = document.getElementById("workHere2c").value;

        //education form variables

// education 3a
        var institute3a = document.getElementById("institute3a").value;
        var degree3a = document.getElementById("degree3a").value;
        var city_education3a = document.getElementById("city_education3a").value;
        var country_education3a = document.getElementById("country_education3a").value;
        // var educationDetails3a = document.getElementById("educationDetails3a").value;
        var from_education3a = document.getElementById("from_education3a").value;
        var to_education3a = document.getElementById("to_education3a").value;
        var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
        var institute3b = document.getElementById("institute3b").value;
        var degree3b = document.getElementById("degree3b").value;
        var city_education3b = document.getElementById("city_education3b").value;
        var country_education3b = document.getElementById("country_education3b").value;
        // var educationDetails3b = document.getElementById("educationDetails3b").value;
        var from_education3b = document.getElementById("from_education3b").value;
        var to_education3b = document.getElementById("to_education3b").value;
        var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
        var institute3c = document.getElementById("institute3c").value;
        var degree3c = document.getElementById("degree3c").value;
        var city_education3c = document.getElementById("city_education3c").value;
        var country_education3c = document.getElementById("country_education3c").value;
        // var educationDetails3c = document.getElementById("educationDetails3c").value;
        var from_education3c = document.getElementById("from_education3c").value;
        var to_education3c = document.getElementById("to_education3c").value;
        var studyHere3c = document.getElementById("studyHere3c").value;

        //project form variables

//project form 5a
        var projectTitle5a = document.getElementById("projectTitle5a").value;
        var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
        var projectTitle5b = document.getElementById("projectTitle5b").value;
        var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
        var projectTitle5c = document.getElementById("projectTitle5c").value;
        var projectDetails5c = document.getElementById("projectDetails5c").value;

        objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
            jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
            jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
            jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
            institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
            institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
            institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
            projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c);

    }
    window.scrollTo({top: 0, behavior: 'smooth'});

});


//add another experience
addEducation.addEventListener("click", (e) => {
    e.preventDefault();

});

back_button4.addEventListener("click", (e) => {
    e.preventDefault();
    const previousBullet = bullets[2];
    previousBullet.classList.remove("completed");
    currentStep--;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});

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

//experience 2a
    var jobTitle2a = document.getElementById("jobTitle2a").value;
    var employer2a = document.getElementById("employer2a").value;
    var city_experience2a = document.getElementById("city_experience2a").value;
    var country_experience2a = document.getElementById("country_experience2a").value;
    var experienceDetails2a = document.getElementById("experienceDetails2a").value;
    var from_experience2a = document.getElementById("from_experience2a").value;
    var to_experience2a = document.getElementById("to_experience2a").value;
    var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
    var jobTitle2b = document.getElementById("jobTitle2b").value;
    var employer2b = document.getElementById("employer2b").value;
    var city_experience2b = document.getElementById("city_experience2b").value;
    var country_experience2b = document.getElementById("country_experience2b").value;
    var experienceDetails2b = document.getElementById("experienceDetails2b").value;
    var from_experience2b = document.getElementById("from_experience2b").value;
    var to_experience2b = document.getElementById("to_experience2b").value;
    var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
    var jobTitle2c = document.getElementById("jobTitle2c").value;
    var employer2c = document.getElementById("employer2c").value;
    var city_experience2c = document.getElementById("city_experience2c").value;
    var country_experience2c = document.getElementById("country_experience2c").value;
    var experienceDetails2c = document.getElementById("experienceDetails2c").value;
    var from_experience2c = document.getElementById("from_experience2c").value;
    var to_experience2c = document.getElementById("to_experience2c").value;
    var workHere2c = document.getElementById("workHere2c").value;

    //education form variables

// education 3a
    var institute3a = document.getElementById("institute3a").value;
    var degree3a = document.getElementById("degree3a").value;
    var city_education3a = document.getElementById("city_education3a").value;
    var country_education3a = document.getElementById("country_education3a").value;
    // var educationDetails3a = document.getElementById("educationDetails3a").value;
    var from_education3a = document.getElementById("from_education3a").value;
    var to_education3a = document.getElementById("to_education3a").value;
    var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
    var institute3b = document.getElementById("institute3b").value;
    var degree3b = document.getElementById("degree3b").value;
    var city_education3b = document.getElementById("city_education3b").value;
    var country_education3b = document.getElementById("country_education3b").value;
    // var educationDetails3b = document.getElementById("educationDetails3b").value;
    var from_education3b = document.getElementById("from_education3b").value;
    var to_education3b = document.getElementById("to_education3b").value;
    var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
    var institute3c = document.getElementById("institute3c").value;
    var degree3c = document.getElementById("degree3c").value;
    var city_education3c = document.getElementById("city_education3c").value;
    var country_education3c = document.getElementById("country_education3c").value;
    // var educationDetails3c = document.getElementById("educationDetails3c").value;
    var from_education3c = document.getElementById("from_education3c").value;
    var to_education3c = document.getElementById("to_education3c").value;
    var studyHere3c = document.getElementById("studyHere3c").value;

    //project form variables

//project form 5a
    var projectTitle5a = document.getElementById("projectTitle5a").value;
    var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
    var projectTitle5b = document.getElementById("projectTitle5b").value;
    var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
    var projectTitle5c = document.getElementById("projectTitle5c").value;
    var projectDetails5c = document.getElementById("projectDetails5c").value;

    objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
        jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
        jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
        jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
        institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
        institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
        institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
        projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c);

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

//experience 2a
    var jobTitle2a = document.getElementById("jobTitle2a").value;
    var employer2a = document.getElementById("employer2a").value;
    var city_experience2a = document.getElementById("city_experience2a").value;
    var country_experience2a = document.getElementById("country_experience2a").value;
    var experienceDetails2a = document.getElementById("experienceDetails2a").value;
    var from_experience2a = document.getElementById("from_experience2a").value;
    var to_experience2a = document.getElementById("to_experience2a").value;
    var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
    var jobTitle2b = document.getElementById("jobTitle2b").value;
    var employer2b = document.getElementById("employer2b").value;
    var city_experience2b = document.getElementById("city_experience2b").value;
    var country_experience2b = document.getElementById("country_experience2b").value;
    var experienceDetails2b = document.getElementById("experienceDetails2b").value;
    var from_experience2b = document.getElementById("from_experience2b").value;
    var to_experience2b = document.getElementById("to_experience2b").value;
    var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
    var jobTitle2c = document.getElementById("jobTitle2c").value;
    var employer2c = document.getElementById("employer2c").value;
    var city_experience2c = document.getElementById("city_experience2c").value;
    var country_experience2c = document.getElementById("country_experience2c").value;
    var experienceDetails2c = document.getElementById("experienceDetails2c").value;
    var from_experience2c = document.getElementById("from_experience2c").value;
    var to_experience2c = document.getElementById("to_experience2c").value;
    var workHere2c = document.getElementById("workHere2c").value;

    //education form variables

// education 3a
    var institute3a = document.getElementById("institute3a").value;
    var degree3a = document.getElementById("degree3a").value;
    var city_education3a = document.getElementById("city_education3a").value;
    var country_education3a = document.getElementById("country_education3a").value;
    // var educationDetails3a = document.getElementById("educationDetails3a").value;
    var from_education3a = document.getElementById("from_education3a").value;
    var to_education3a = document.getElementById("to_education3a").value;
    var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
    var institute3b = document.getElementById("institute3b").value;
    var degree3b = document.getElementById("degree3b").value;
    var city_education3b = document.getElementById("city_education3b").value;
    var country_education3b = document.getElementById("country_education3b").value;
    // var educationDetails3b = document.getElementById("educationDetails3b").value;
    var from_education3b = document.getElementById("from_education3b").value;
    var to_education3b = document.getElementById("to_education3b").value;
    var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
    var institute3c = document.getElementById("institute3c").value;
    var degree3c = document.getElementById("degree3c").value;
    var city_education3c = document.getElementById("city_education3c").value;
    var country_education3c = document.getElementById("country_education3c").value;
    // var educationDetails3c = document.getElementById("educationDetails3c").value;
    var from_education3c = document.getElementById("from_education3c").value;
    var to_education3c = document.getElementById("to_education3c").value;
    var studyHere3c = document.getElementById("studyHere3c").value;

    //project form variables

//project form 5a
    var projectTitle5a = document.getElementById("projectTitle5a").value;
    var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
    var projectTitle5b = document.getElementById("projectTitle5b").value;
    var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
    var projectTitle5c = document.getElementById("projectTitle5c").value;
    var projectDetails5c = document.getElementById("projectDetails5c").value;

    objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
        jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
        jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
        jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
        institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
        institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
        institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
        projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c);

});


back_button5.addEventListener("click", (e) => {
    e.preventDefault();
    const previousBullet = bullets[3];
    previousBullet.classList.remove("completed");
    currentStep--;
    showTab(currentStep);
    console.log(currentStep);
    window.scrollTo({top: 0, behavior: 'smooth'});

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

//experience 2a
    var jobTitle2a = document.getElementById("jobTitle2a").value;
    var employer2a = document.getElementById("employer2a").value;
    var city_experience2a = document.getElementById("city_experience2a").value;
    var country_experience2a = document.getElementById("country_experience2a").value;
    var experienceDetails2a = document.getElementById("experienceDetails2a").value;
    var from_experience2a = document.getElementById("from_experience2a").value;
    var to_experience2a = document.getElementById("to_experience2a").value;
    var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
    var jobTitle2b = document.getElementById("jobTitle2b").value;
    var employer2b = document.getElementById("employer2b").value;
    var city_experience2b = document.getElementById("city_experience2b").value;
    var country_experience2b = document.getElementById("country_experience2b").value;
    var experienceDetails2b = document.getElementById("experienceDetails2b").value;
    var from_experience2b = document.getElementById("from_experience2b").value;
    var to_experience2b = document.getElementById("to_experience2b").value;
    var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
    var jobTitle2c = document.getElementById("jobTitle2c").value;
    var employer2c = document.getElementById("employer2c").value;
    var city_experience2c = document.getElementById("city_experience2c").value;
    var country_experience2c = document.getElementById("country_experience2c").value;
    var experienceDetails2c = document.getElementById("experienceDetails2c").value;
    var from_experience2c = document.getElementById("from_experience2c").value;
    var to_experience2c = document.getElementById("to_experience2c").value;
    var workHere2c = document.getElementById("workHere2c").value;

    //education form variables

// education 3a
    var institute3a = document.getElementById("institute3a").value;
    var degree3a = document.getElementById("degree3a").value;
    var city_education3a = document.getElementById("city_education3a").value;
    var country_education3a = document.getElementById("country_education3a").value;
    // var educationDetails3a = document.getElementById("educationDetails3a").value;
    var from_education3a = document.getElementById("from_education3a").value;
    var to_education3a = document.getElementById("to_education3a").value;
    var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
    var institute3b = document.getElementById("institute3b").value;
    var degree3b = document.getElementById("degree3b").value;
    var city_education3b = document.getElementById("city_education3b").value;
    var country_education3b = document.getElementById("country_education3b").value;
    // var educationDetails3b = document.getElementById("educationDetails3b").value;
    var from_education3b = document.getElementById("from_education3b").value;
    var to_education3b = document.getElementById("to_education3b").value;
    var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
    var institute3c = document.getElementById("institute3c").value;
    var degree3c = document.getElementById("degree3c").value;
    var city_education3c = document.getElementById("city_education3c").value;
    var country_education3c = document.getElementById("country_education3c").value;
    // var educationDetails3c = document.getElementById("educationDetails3c").value;
    var from_education3c = document.getElementById("from_education3c").value;
    var to_education3c = document.getElementById("to_education3c").value;
    var studyHere3c = document.getElementById("studyHere3c").value;

    //project form variables

//project form 5a
    var projectTitle5a = document.getElementById("projectTitle5a").value;
    var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
    var projectTitle5b = document.getElementById("projectTitle5b").value;
    var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
    var projectTitle5c = document.getElementById("projectTitle5c").value;
    var projectDetails5c = document.getElementById("projectDetails5c").value;

    objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
        jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
        jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
        jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
        institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
        institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
        institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
        projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c);

});

//project form
finish_button5.addEventListener("click", () => {

    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var aboutYou = document.getElementById("aboutYou").value;
    var skillDetails = document.getElementById("skillDetails").value;

//experience form variables

//experience 2a
    var jobTitle2a = document.getElementById("jobTitle2a").value;
    var employer2a = document.getElementById("employer2a").value;
    var city_experience2a = document.getElementById("city_experience2a").value;
    var country_experience2a = document.getElementById("country_experience2a").value;
    var experienceDetails2a = document.getElementById("experienceDetails2a").value;
    var from_experience2a = document.getElementById("from_experience2a").value;
    var to_experience2a = document.getElementById("to_experience2a").value;
    var workHere2a = document.getElementById("workHere2a").value;

//experience 2b
    var jobTitle2b = document.getElementById("jobTitle2b").value;
    var employer2b = document.getElementById("employer2b").value;
    var city_experience2b = document.getElementById("city_experience2b").value;
    var country_experience2b = document.getElementById("country_experience2b").value;
    var experienceDetails2b = document.getElementById("experienceDetails2b").value;
    var from_experience2b = document.getElementById("from_experience2b").value;
    var to_experience2b = document.getElementById("to_experience2b").value;
    var workHere2b = document.getElementById("workHere2b").value;

//experience 2c
    var jobTitle2c = document.getElementById("jobTitle2c").value;
    var employer2c = document.getElementById("employer2c").value;
    var city_experience2c = document.getElementById("city_experience2c").value;
    var country_experience2c = document.getElementById("country_experience2c").value;
    var experienceDetails2c = document.getElementById("experienceDetails2c").value;
    var from_experience2c = document.getElementById("from_experience2c").value;
    var to_experience2c = document.getElementById("to_experience2c").value;
    var workHere2c = document.getElementById("workHere2c").value;

    //education form variables

// education 3a
    var institute3a = document.getElementById("institute3a").value;
    var degree3a = document.getElementById("degree3a").value;
    var city_education3a = document.getElementById("city_education3a").value;
    var country_education3a = document.getElementById("country_education3a").value;
    // var educationDetails3a = document.getElementById("educationDetails3a").value;
    var from_education3a = document.getElementById("from_education3a").value;
    var to_education3a = document.getElementById("to_education3a").value;
    var studyHere3a = document.getElementById("studyHere3a").value;


//education 3b
    var institute3b = document.getElementById("institute3b").value;
    var degree3b = document.getElementById("degree3b").value;
    var city_education3b = document.getElementById("city_education3b").value;
    var country_education3b = document.getElementById("country_education3b").value;
    // var educationDetails3b = document.getElementById("educationDetails3b").value;
    var from_education3b = document.getElementById("from_education3b").value;
    var to_education3b = document.getElementById("to_education3b").value;
    var studyHere3b = document.getElementById("studyHere3b").value;


// education 3c
    var institute3c = document.getElementById("institute3c").value;
    var degree3c = document.getElementById("degree3c").value;
    var city_education3c = document.getElementById("city_education3c").value;
    var country_education3c = document.getElementById("country_education3c").value;
    // var educationDetails3c = document.getElementById("educationDetails3c").value;
    var from_education3c = document.getElementById("from_education3c").value;
    var to_education3c = document.getElementById("to_education3c").value;
    var studyHere3c = document.getElementById("studyHere3c").value;

    //project form variables

//project form 5a
    var projectTitle5a = document.getElementById("projectTitle5a").value;
    var projectDetails5a = document.getElementById("projectDetails5a").value;

//project form 5b
    var projectTitle5b = document.getElementById("projectTitle5b").value;
    var projectDetails5b = document.getElementById("projectDetails5b").value;

//project form 5c
    var projectTitle5c = document.getElementById("projectTitle5c").value;
    var projectDetails5c = document.getElementById("projectDetails5c").value;

    const mainObj = objAssignment(firstName, lastName, email, phoneNumber, address, city, aboutYou, skillDetails,
        jobTitle2a, employer2a, city_experience2a, country_experience2a, experienceDetails2a, from_experience2a, to_experience2a, workHere2a,
        jobTitle2b, employer2b, city_experience2b, country_experience2b, experienceDetails2b, from_experience2b, to_experience2b, workHere2b,
        jobTitle2c, employer2c, city_experience2c, country_experience2c, experienceDetails2c, from_experience2c, to_experience2c, workHere2c,
        institute3a, degree3a, city_education3a, country_education3a, from_education3a, to_education3a, studyHere3a,
        institute3b, degree3b, city_education3b, country_education3b, from_education3b, to_education3b, studyHere3b,
        institute3c, degree3c, city_education3c, country_education3c, from_education3c, to_education3c, studyHere3c,
        projectTitle5a, projectDetails5a, projectTitle5b, projectDetails5b, projectTitle5c, projectDetails5c);

//    convert the js object ot json
    const mainObj_json = JSON.stringify(mainObj);
// to send the javascript object via ajax
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/ict_jobseeker_44/Resume/Resume_form_contact/Resume_form_data")
    xhr.setRequestHeader("Content-Type", "application/json")
    xhr.onload = function () {
        if (xhr.status == 200) {
            console.log(xhr.responseText);

            //selecting input values
            // const profilePi

        }
    }

    xhr.send(mainObj_json);
    // location.href = 'http://localhost/ict_jobseeker_44/Resume/Resume_form_contact';

});

id_project = 1;
//add another experience
addProject.addEventListener("click", (e) => {
    e.preventDefault();

});


const form1_contact = document.getElementById("form1_contact");
const form2_experience = document.getElementById("form2_experience2a");
const form3_education = document.getElementById("form3_education3a");
const form4_skills = document.getElementById("form4_skills");
const form5_projects = document.getElementById("form5_projects5a");

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
            xhr.responseText;

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
    for (let i = 0; i < mainObj.experience_id.length; i++) {
        if (mainObj.experience_id[i] === true) {
            total_exp++
        }
    }
    if (total_exp > 1) {
        mainObj.experience_id[exp_id] = false;
    }
    let objName = "exp" + exp_id;
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
    for (let i = 0; i < mainObj.education_id.length; i++) {
        if (mainObj.education_id[i] === true) {
            total_edu++
        }
    }
    if (total_edu > 1) {
        mainObj.education_id[edu_id] = false;
    }
    let objName = "edu" + edu_id;
    objName.institute = null;
    objName.degree = null;
    objName.city = null;
    objName.country = null;
    // objName.educationDetails = null;
    objName.from_education = null;
    objName.to_education = null;
    objName.studyHere = null;


}


//delete project

function delete_project(proj_id) {
    let total_proj = 0;// to store how many slots are reserved
    for (let i = 0; i < mainObj.project_id.length; i++) {
        if (mainObj.project_id[i] === true) {
            total_proj++
        }
    }
    if (total_proj > 1) {
        mainObj.project_id[proj_id] = false;
    }
    let objName = "proj" + proj_id;
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

