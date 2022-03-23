// alert("SANDARUWAN");

//buttons
const cancel = document.getElementById("cancel")
const update = document.getElementById("update");

//form
const jobseeker_form = document.getElementById("jobseeker_form");

//for database
const fname = document.querySelector("#fname");
const lname = document.querySelector("#lname");
const email = document.querySelector("#email");
const gender = document.querySelector("#gender");
const age = document.querySelector("#age");
const phonenumber = document.querySelector("#phonenumber");
const address = document.querySelector("#address");
const brief_description = document.querySelector("#brief_description");
const experience = document.querySelector("#experience");
const skills = document.querySelector("#skills");
const education = document.querySelector("#education");
const LinkedIn_link = document.querySelector("#LinkedIn_link");
const Facebook_link = document.querySelector("#Facebook_link");
const Twitter_link = document.querySelector("#Twitter_link");
const website_link = document.querySelector("#website_link");

function loadJobseekerData(){
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/ict_jobseeker_44/Jobseeker/JobSeekerAccount/get_jobseeker_data");
    xhr.onload = function (){
        if(xhr.status == 200){
            console.log(this.responseText);
            const obj = JSON.parse(this.responseText);
           
            fname.value = `${obj.First_name}`;
            lname.value = `${obj.Last_name}`;
            email.value = `${obj.Email}`;
            gender.value = `${obj.Gender}`;
            age.value = `${obj.Age}`;
            phonenumber.value = `${obj.Phone_number}`;
            address.value = `${obj.Address}`;
            skills.value = `${obj.Description}`;
            experience.value = `${obj.Experience}`;
            experience.value = `${obj.Skills}`;
            education.value = `${obj.Education}`;
            linkedin_url.value = `${obj.Jobseeker_In}`;
            fb_url.value = `${obj.Jobseeker_Fb}`;
            twitter_url.value = `${obj.Jobseeker_Twitter}`;
            web_url.value = `${obj.Jobseeker_Web}`;
            
                    
        }
    }

    xhr.send();


}

loadJobseekerData();

// cancel button
var baseUrl = (window.location).href; // You can also use document.URL
var User_ID = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);

function Cancelclick(){
    location.href = "http://localhost/ict_jobseeker_44/Jobseeker/JobSeekerProfile?User="+User_ID;

}

function Update(){
  update.addEventListener("click", (event) => {
      event.preventDefault();
      let value = confirm("Are you sure, you want to update this profile");
        console.log(value);
        if(value == true){
            jobseeker_form.submit();
        }
    });

  
}


//bullet list

const bullet = "\u2022";
const bulletWithSpace = `${bullet} `;
const enter = 13;


//for bullet points

// const handleInput = (event) => {
//     const { keyCode, target } = event;
//     const { selectionStart, value } = target;

//     if (keyCode === enter) {
//         console.log('a');
//         target.value = [...value]
//             .map((c, i) => i === selectionStart - 1
//                 ? `\n${bulletWithSpace}`
//                 : c
//             )
//             .join('');
//         console.log(target.value);

//         target.selectionStart = selectionStart+bulletWithSpace.length;
//         target.selectionEnd = selectionStart+bulletWithSpace.length;
//     }

//     if (value[0] !== bullet) {
//         target.value = `${bulletWithSpace}${value}`;
//     }
// }