
function getTime()
{
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();
    if(hours<10)
    {
        hours="0"+hours;
    }
    if(minutes<10)
    {
        minutes="0"+minutes;
    }
    let time=hours+":"+minutes;
    return time;
}

// Gets the first message
function firstInquire() {
   
    let welcomeMessage = "Welcome to ICT JobSeeker! Please let us know how we can help you."
    document.getElementById("StarterMessage").innerHTML = '<p class="Text"><span>' + welcomeMessage + '</span></p>';

    let time = getTime();

    $("#chat-timestamp").append(time);
    document.getElementsByClassName("Input").scrollIntoView(false);
}
alert("Sandaruwan");
firstInquire();

// Retrieves the response
function getHardResponse(userText) {
    
    let Response = getBotResponse(userText);
    let botHtml = '<p class="Text"><span>' + Response + '</span></p>';
    $("#chatbox").append(botHtml);

    document.getElementById("ChatBottom").scrollIntoView(true);
}

//Gets the text from the input box and processes it
function getResponse() {
    let userText = $("#TextInput").val();

    if (userText == "") 
    {
        userText = "I love Code Palace!";
    }

    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#TextInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

// Handles sending text via button clicks
function buttonSendText(sampleText) {
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

    $("#TextInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("ChatBottom").scrollIntoView(true);

    //Uncomment this if you want the bot to respond to this buttonSendText event
    // setTimeout(() => {
    //     getHardResponse(sampleText);
    // }, 1000)
}

function sendButton() {
    getResponse();
}



// Press enter to send a message
$("#TextInput").keypress(function (e) {
    if (e.which == 13) {
        getResponse();
    }
});