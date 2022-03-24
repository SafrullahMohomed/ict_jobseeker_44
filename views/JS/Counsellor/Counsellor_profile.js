//edit profile button
const edit_profile_button = document.getElementById("edit-profile-button");

//for database
const name = document.querySelector(".name");
const address = document.querySelector(".address");
const city = document.querySelector(".city");
const tick = document.querySelector(".tick");
const description = document.querySelector(".description");
const counsellor_email = document.querySelector("#counsellor_email");
const phone_number = document.querySelector(".phone_number");
const qualifications = document.querySelector(".qualifications_data");
const facebook = document.getElementById("facebook_icon");
const linkedin = document.getElementById("linkedin_icon");
const twitter = document.getElementById("twitter_icon");

const qualifications_uf = document.getElementById("quaulifications_uf").innerText;
// console.log(qualifications_uf);

const qualifications_list = qualifications_uf.split('• ').filter(n => n.length > 0).map(n => `<li> ${n} </li><br>`);
qualification_bullets = '<ul>' + qualifications_list.join('') + '</ul>';

qualifications.innerHTML = qualification_bullets;


function loadCounsellorData() {
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/ict_jobseeker_44/Counsellor/Counsellor_profile/get_counsellor_data");
    xhr.onload = function () {
        if(xhr.status == 200){
            console.log(this.responseText);
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

loadCounsellorData();

//get id
var baseUrl = (window.location).href; // You can also use document.URL
var User_ID = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);

//editprofile button
edit_profile_button.addEventListener("click", () => {
    location.href = "http://localhost/ict_jobseeker_44/Counsellor/Counsellor_account?User="+User_ID;
})