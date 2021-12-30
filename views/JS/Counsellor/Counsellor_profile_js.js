
const name = document.querySelector(".name");
const address = document.querySelector(".address");
const city = document.querySelector(".city");
const tick = document.querySelector(".tick");
const description = document.querySelector(".description");
const counsellor_email = document.querySelector("#counsellor_email");
const phone_number = document.querySelector(".phone_number");
const facebook = document.getElementById("facebook_icon");
const linkedin = document.getElementById("linkedin_icon");
const twitter = document.getElementById("twitter_icon");


function loadCounsellorData(){
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/ict_jobseeker_44/Counsellor/Counsellor_profile/get_counsellor_data");
    xhr.onload = function (){
        if(xhr.status == 200){
            console.log(this.responseText);
            const obj = JSON.parse(this.responseText);
            console.log(obj.Email);

            name.innerHTML = `${obj.First_name} ${obj.Last_name}`;
            address.innerHTML = `${obj.Address}`;
            city.innerHTML = `${obj.City}`;

            //to mock interview icon
            if(obj.Counsellor_provide_mock_interviews == 'yes')
            {
                tick.innerHTML = `<i class='fa fa-check-circle' style="font-size: 40px; color:green;"></i>`;

            }
            else {
                tick.innerHTML = `<i class="fa fa-times-circle" style="font-size: 40px; color: red"></i>`;

            }
            description.innerHTML = `${obj.Description}`;
            counsellor_email.innerHTML = `${obj.Email}`;
            phone_number.innerHTML = `${obj.Phone_number}`;

            facebook.href = `${obj.Facebook}`;
            linkedin.href = `${obj.Linkedin}`;
            twitter.href = `${obj.Twitter}`;


            // console.log("I am in");
        }
    }

    xhr.send();


}

loadCounsellorData();