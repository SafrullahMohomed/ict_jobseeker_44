

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
    
    let userText = "Hey there! Searching for career opportunities?";
   
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
    
    let userText = "I'd be happy to direct you to the right resources!";
   
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
    
    let userText = "I'd be happy";
   
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
    
    let userText = "Right resources!";
   
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
   
    let questionOne = "Hey there! Searching for career opportunities?";
    let questionTwo = "I'd be happy to direct you to the right resources!";
    let questionThree = "I'd be happy";
    let questionFour = "Right resources!";
    document.getElementById("QuestionOne").innerHTML = '<p class="QText"><span>' + questionOne + '</span></p>';
    document.getElementById("QuestionTwo").innerHTML = '<p class="QText"><span>' + questionTwo + '</span></p>';
    document.getElementById("QuestionThree").innerHTML = '<p class="QText"><span>' + questionThree + '</span></p>';
    document.getElementById("QuestionTFour").innerHTML = '<p class="QText"><span>' + questionFour + '</span></p>';
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