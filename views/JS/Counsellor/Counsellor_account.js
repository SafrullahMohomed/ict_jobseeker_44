//buttons
const cancel = document.getElementById("cancel")
const update = document.getElementById("update");

//form
const counsellor_form = document.getElementById("counsellor_form");

//for database
const firstName = document.querySelector("#firstName");
const lastName = document.querySelector("#lastName");
const email = document.querySelector("#email");
const phoneNumber = document.querySelector("#phoneNumber");
const address = document.querySelector("#address");
const city = document.querySelector("#city");
const qualification = document.querySelector("#qualification");
const tick = document.querySelector("#tick");
const description = document.querySelector("#description");
const facebook = document.getElementById("facebook");
const linkedin = document.getElementById("linkedin");
const twitter = document.getElementById("twitter");
const provide_mi_yes = document.getElementById("mi_yes");
const provide_mi_no = document.getElementById("mi_no");


function loadCounsellorData(){
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/ict_jobseeker_44/Counsellor/Counsellor_account/get_counsellor_data");
    xhr.onload = function (){
        if(xhr.status == 200){
            console.log(this.responseText);
            const obj = JSON.parse(this.responseText);
            // console.log(obj.Email);
            //
            firstName.value = `${obj.First_name}`;
            lastName.value = `${obj.Last_name}`;
            address.value = `${obj.Address}`;
            city.value = `${obj.City}`;
            email.value = `${obj.Email}`;
            phoneNumber.value = `${obj.Phone_number}`;
            description.value = `${obj.Description}`;
            facebook.value = `${obj.Facebook}`;
            linkedin.value = `${obj.Linkedin}`;
            twitter.value = `${obj.Twitter}`;
            qualification.value = `${obj.Qualifications}`

            //to mock interview icon
            if(obj.Counsellor_provide_mock_interviews == 'yes')
            {
                provide_mi_yes.checked = true;
                // provide_mi_no.checked = false;

            }
            else {
                provide_mi_no.checked = true;
                // provide_mi_yes.checked = false;

            }


            // console.log("I am in");
        }
    }

    xhr.send();


}

loadCounsellorData();

// cancel button
var baseUrl = (window.location).href; // You can also use document.URL
var User_ID = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);

function Cancelclick(){
    location.href = "http://localhost/ict_jobseeker_44/Counsellor/Counsellor_profile?User="+User_ID;

}

function Update(){
  update.addEventListener("click", (event) => {
      event.preventDefault();
      let value = confirm("Are you sure, you want to update this profile");
        // console.log(value);
        if(value == true){
            counsellor_form.submit();
        }
    });

  // location.href = "http://localhost/ict_jobseeker_44/Counsellor/Counsellor_profile?User="+User_ID;

}

//bullet list

const bullet = "\u2022";
const bulletWithSpace = `${bullet} `;
const enter = 13;


//for bullet points

const handleInput = (event) => {
    const { keyCode, target } = event;
    const { selectionStart, value } = target;

    if (keyCode === enter) {
        console.log('a');
        target.value = [...value]
            .map((c, i) => i === selectionStart - 1
                ? `\n${bulletWithSpace}`
                : c
            )
            .join('');
        console.log(target.value);

        target.selectionStart = selectionStart+bulletWithSpace.length;
        target.selectionEnd = selectionStart+bulletWithSpace.length;
    }

    if (value[0] !== bullet) {
        target.value = `${bulletWithSpace}${value}`;
    }
}
