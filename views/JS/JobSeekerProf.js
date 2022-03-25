// alert("GGSS")
//edit profile button
const edit_profile_button = document.getElementById("edit-profile-button");

//for database
const firstName = document.querySelector("#fname");
// console.log(firstName);
const lastName = document.querySelector("#lname");
const email = document.querySelector("#email");
const phoneNumber = document.querySelector("#phone_number");
const address = document.querySelector("#address");


// const description = document.querySelector("#Description");
// const counsellor_email = document.querySelector("#counsellor_email");
// const phone_number = document.querySelector(".phone_number");
// const qualifications = document.querySelector(".qualifications_data");
// const facebook = document.getElementById("facebook_icon");
// const linkedin = document.getElementById("linkedin_icon");
// const twitter = document.getElementById("twitter_icon");

// const experience_uf = document.getElementById("experience").innerText;
// console.log(experience_uf);

// const experience_list = experience_uf.split('• ').filter(n => n.length > 0).map(n => `<li> ${n} </li><br>`);
// experience_bullets = '<ul>' + experience_list.join('') + '</ul>';

// experiences.innerHTML = experience_bullets;


function JobSeekerProfilerData() {
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/ict_jobseeker_44/Jobseeker/JobSeekerProfile/get_JobSeeker_data");
    xhr.onload = function () {
        if(xhr.status == 200){
            // console.log(this.responseText);
            // const obj = JSON.parse(this.responseText);
            // console.log(obj.Email);
        //     name.innerHTML = `${obj.First_name} ${obj.Last_name}`;
        //     address.innerHTML = `${obj.Address}`;
        //     city.innerHTML = `${obj.City}`;
        //
        //     //to mock interview icon
        //     if(obj.Counsellor_provide_mock_interviews == 'yes')
        //     {
        //         tick.innerHTML = `<i class='fa fa-check-circle' style="font-size: 40px; color:green;"></i>`;
        //
        //     }
        //     else {
        //         tick.innerHTML = `<i class="fa fa-times-circle" style="font-size: 40px; color: red"></i>`;
        //
        //     }
        //     description.innerHTML = `${obj.Description}`;
        //     counsellor_email.innerHTML = `${obj.Email}`;
        //     phone_number.innerHTML = `${obj.Phone_number}`;
        //
        //     facebook.href = `${obj.Facebook}`;
        //     linkedin.href = `${obj.Linkedin}`;
        //     twitter.href = `${obj.Twitter}`;
        //
        //
        //     // console.log("I am in");
        }
    }

    xhr.send();


}

JobSeekerProfilerData();

//get id
var baseUrl = (window.location).href; // You can also use document.URL
var User_ID = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);

//editprofile button
edit_profile_button.addEventListener("click", () => {
    location.href = "http://localhost/ict_jobseeker_44/Jobseeker/JobSeekerAccount?User="+User_ID;
    console_log(User_ID);
})
