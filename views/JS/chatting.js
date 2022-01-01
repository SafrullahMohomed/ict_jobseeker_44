

// Retrieves the response
function getHardResponse(userText) {
    
    let Response = getBotResponse(userText);
    let botHtml = '<p class="Text"><span>' + Response + '</span></p>';
    $("#ChatBox").append(botHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);
    
}

//Gets the text from the input box and processes it
function getResponse() {
    
    let userText = $("#TextInput").val();
    
    if (userText == "") 
    {
        userText = "Hello";
    }
    // alert("CHAT WITH US");
    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#TextInput").val("");
    $("#ChatBox").append(userHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

//Gets the first question from the selection box and processes it
function getResponseInquireOne() {
    
    let userText = "What confidence can we place in the counsellors here?";
   
    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#TextInput").val("");
    $("#ChatBox").append(userHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

//Gets the second question from the selection box and processes it
function getResponseInquireTwo() {
    
    let userText = "Is there an opportunity to submit a pre-made CV when applying for a job?";
   
    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#TextInput").val("");
    $("#ChatBox").append(userHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}


//Gets the third question from the selection box and processes it
function getResponseInquireThree() {
    
    let userText = "What are the benefits and specialities of job posting on this site?";
   
    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#TextInput").val("");
    $("#ChatBox").append(userHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}


//Gets the fourth question from the selection box and processes it
function getResponseInquireFour() {
    
    let userText = "Will the job advertisement be removed from the website without prior notice when the agreed time limit for a job vacancy has passed?";
   
    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#TextInput").val("");
    $("#ChatBox").append(userHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

//Gets the fifth question from the selection box and processes it
function getResponseInquireFive() {
    
    let userText = "What is the charge for posting a job vacancy?";
   
    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#TextInput").val("");
    $("#ChatBox").append(userHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

// Handles sending text via button clicks
function buttonSendText(sampleText) {
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

    $("#TextInput").val("");
    $("#ChatBox").append(userHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);

    //Uncomment this if you want the bot to respond to this buttonSendText event
    // setTimeout(() => {
    //     getHardResponse(sampleText);
    // }, 1000)
}

// Gets the button selesction inquires
function buttonInquire() {
   
    let questionOne = "What confidence can we place in the counsellors here?";
    let questionTwo = "Is there an opportunity to submit a pre-made CV when applying for a job?";
    let questionThree = "What are the benefits and specialities of job posting on this site?";
    let questionFour = "Will the job advertisement be removed from the website without prior notice when the agreed time limit for a job vacancy has passed?";
    let questionFive = "What is the charge for posting a job vacancy?";
    document.getElementById("QuestionOne").innerHTML = '<p class="QText"><span>' + questionOne + '</span></p>';
    document.getElementById("QuestionTwo").innerHTML = '<p class="QText"><span>' + questionTwo + '</span></p>';
    document.getElementById("QuestionThree").innerHTML = '<p class="QText"><span>' + questionThree + '</span></p>';
    document.getElementById("QuestionFour").innerHTML = '<p class="QText"><span>' + questionFour + '</span></p>';
    document.getElementById("QuestionFive").innerHTML = '<p class="QText"><span>' + questionFive + '</span></p>';

}

buttonInquire();

//If button one clicked then call to getResponseInquireOne function for display question
function InquireButtonOne()
{
    getResponseInquireOne();
}

//If button one clicked then call to getResponseInquireTwo function for display question
function InquireButtonTwo()
{
    getResponseInquireTwo();
}

//If button one clicked then call to getResponseInquireThree function for display question
function InquireButtonThree()
{
    getResponseInquireThree();
}

//If button one clicked then call to getResponseInquireFour function for display question
function InquireButtonFour()
{
    getResponseInquireFour();
}

//If button one clicked then call to getResponseInquireFive function for display question
function InquireButtonFive()
{
    getResponseInquireFive();
}


//If send button one clicked then call to getResponse function for display question
function sendButton() {
    getResponse();
}


// Press enter to send a message
$("#TextInput").keypress(function (e) {
    if (e.which == 13) {
        getResponse();
    }
});