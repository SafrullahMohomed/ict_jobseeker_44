
// alert("GGSS");
var coll=document.getElementsByClassName("collapsiable");

for(let i=0; i< coll.length; i++)
{
    
coll[i].addEventListener("click", function()
{
    this.classList.toggle("active");
    var content= this.nextElementSibling;
    if(content.style.maxHeight)
    {
        content.style.maxHeight=null;
    }
    else
    {
        content.style.maxHeight = content.scrollHeight+ "px";
    }
}
);
}

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

// function firstInquire()
// {
//     let welcomeMessage = "Welcome to ICT JobSeeker! Please let us know how we can help you."
//     document.getElementById("StarterMessage").innerHTML = '<p class = "Text"><span>' + welcomeMessage + '</span></p>';

//     let time = getTime();
//     $("#chat-timestamp").append(time);
//     document.getElementById("Input").scrollIntoView(false);
// }

// firstInquire();

// Gets the first message
// function firstInquire() {
   
//     let welcomeMessage = "Welcome to ICT JobSeeker! Please let us know how we can help you."
//     document.getElementById("StarterMessage").innerHTML = '<p class="Text"><span>' + welcomeMessage + '</span></p>';

//     let time = getTime();

//     $("#chat-timestamp").append(time);
//     document.getElementsByClassName("Input").scrollIntoView(false);
// }

// firstInquire();
// getTime();

