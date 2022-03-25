
  function successPost(){
    window.open("http://localhost/ict_jobseeker_44/Jobs/Success_post","_self");
  }

  /*fuction to hide error msg*/
function hideFormError(x) {
  x.innerHTML="";
  }
//if user edit company name then change value of html input

  function passCompanyName(new_company_name){
   var n= new_company_name;
    document.getElementById("Companyname").value=n;
    console.log(document.getElementById("Companyname").value);
  }

  //show alert to user to give warrning about company name changes
  
  function companyNameWarning(){
    

 
window.open("http://localhost/ict_jobseeker_44/Jobs/Post_job","_self");

}

  function open_post_job_page(){

    window.open("http://localhost/ict_jobseeker_44/Jobs/Post_job","_self");
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