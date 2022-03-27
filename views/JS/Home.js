// counting parts for 
// window.onload = $(".posted-jobs-value").counterUp({delay:10, time:1000});
// window.onload = $(".companies-value").counterUp({delay:10, time:1000});
// window.onload = $(".jobseekers-value").counterUp({delay:10, time:1000});

function loadRateAndreview(){
   
    window.open("http://localhost/ict_jobseeker_44/Sys_rate","_self");
}

//to change the view of service boxes when hover
const service_box_resume = document.getElementById("create-resume");
const service_box_jobr = document.getElementById("job-rankings");
const service_box_lm = document.getElementById("learning-materials");
const service_box_counselling = document.getElementById("counselling-services");

//main boxes
const service_box_resume_main = document.getElementById("service-main-content-resume");
const service_box_jobr_main = document.getElementById("service-main-content-job-ranking");
const service_box_lm_main = document.getElementById("service-main-content-learning-materials");
const service_box_counselling_main = document.getElementById("service-main-content-counselling");

//box headers and texts
const service_resume_header = document.getElementById("create-resume-header");
const service_resume_text = document.getElementById("create-resume-text");
const service_jobr_header = document.getElementById("job-rankings-header");
const service_jobr_text = document.getElementById("job-rankings-text");
const service_lm_header = document.getElementById("learning-materials-header");
const service_lm_text = document.getElementById("learning-materials-text");
const service_counselling_header = document.getElementById("counselling-header");
const service_counselling_text = document.getElementById("counselling-text");

//default text for service boxes
const service_box_resume_default = document.getElementById("service-default-content-resume");
const service_box_jobr_default = document.getElementById("service-default-content-jobr");
const service_box_lm_default = document.getElementById("service-default-content-lm");
const service_box_counselling_default = document.getElementById("service-default-content-counselling");

//resume
service_box_resume_main.addEventListener("mouseover", ()=>{
    service_resume_header.innerHTML = `Create and manage create resume`;
    service_resume_text.innerHTML = `By clicking this section you can create a resume for free and can manage it as a jobseeker. we provide different templates to create your own resume`;
    service_box_resume_default.innerHTML = ``;

});

service_box_resume_main.addEventListener("mouseout", ()=>{
    service_resume_header.innerHTML = ``;
    service_resume_text.innerHTML = ``;
    service_box_resume_default.innerHTML = `Create and manage create resume`;

});

//job ranking
service_box_jobr_main.addEventListener("mouseover", ()=>{
    service_jobr_header.innerHTML = `Job Rankings`;
    service_jobr_text.innerHTML = `In this field you can explore job rankings according to posted jobs in our system.`;
    service_box_jobr_default.innerHTML = ``;

});

service_box_jobr_main.addEventListener("mouseout", ()=>{
    service_jobr_header.innerHTML = ``;
    service_jobr_text.innerHTML = ``;
    service_box_jobr_default.innerHTML = `Job Rankings`;

});
// Learning Materials
service_box_lm_main.addEventListener("mouseover", ()=>{
    service_lm_header.innerHTML = `Learning Materials`;
    service_lm_text.innerHTML = `We provide learning material's links which are recommended by the ICT community`;
    service_box_lm_default.innerHTML = ``;

});

service_box_lm_main.addEventListener("mouseout", ()=>{
    service_lm_header.innerHTML = ``;
    service_lm_text.innerHTML = ``;
    service_box_lm_default.innerHTML = `Learning Materials`;

});

//Counselling and mock interviews
service_box_counselling_main.addEventListener("mouseover", ()=>{
    service_counselling_header.innerHTML = `Counselling & Mock interviews`;
    service_counselling_text.innerHTML = `Before selecting a job you can consume a counselling service from our expertise and you can take mock interviews to get a better experience before facing an interview`;
    service_box_counselling_default.innerHTML = ``;

});

service_box_counselling_main.addEventListener("mouseout", ()=>{
    service_counselling_header.innerHTML = ``;
    service_counselling_text.innerHTML = ``;
    service_box_counselling_default.innerHTML = `Counselling & Mock interviews`;

});

