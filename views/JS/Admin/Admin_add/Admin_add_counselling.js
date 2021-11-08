//function for ul button in qualification
let output = document.getElementById("qualification_box");
let ul_button = document.getElementById("qualification_button");
ul_button.addEventListener("click", () => {
    let cmd = ul_button.dataset[""];
    document.execCommand(cmd, false, null);
});


//form validation
function validateForm() {
//take the form name

    //first name
    let firstName = document.getElementById("firstName").value;

    if (firstName == "") {
        document.getElementById("firstName_error").innerHTML = "First name must be filled out";
        return false;
    }

    //last name
    let lastName = document.getElementById("lastName").value;

    if (lastName == "") {
        document.getElementById("lastName_error").innerHTML = "Last name must be filled out";
        return false;
    }

    //email
    let email = document.admin_counsellor_form.email.value;

    if (email == "") {
        document.getElementById("email_error").innerHTML = "Email must be filled out";
        // return false;
    }

    let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!email.match(validRegex)) {
        document.getElementById("email_error").innerHTML = "Enter a valid email";
        return false;
    }

//Phone Number
    let phoneNumber = document.admin_counsellor_form.phoneNumber.value.length;

    if (phoneNumber < 10 && phoneNumber > 0) {
        document.getElementById("phoneNumber_error").innerHTML = "Enter a valid phone number";
        return false;
    }


//    provide mock interviews
    document.getElementbyID
//    hide form error function



    form.addEventListener('submit', (event) =>{
        event.preventDefault();
    });

}

function hideFormError(x){
    x.innerHTML = "";
}
// console.log("hi lksdjffljd ");