function load_jobseeker(Job_ID){
  
    const xhr = new XMLHttpRequest();
 
    //establish connection
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Jobseeker/Search_jobseeker/Search_jobseeker_for_job/"+Job_ID);
    

    let jobseeker = document.querySelector(".Trending");
    xhr.onload = function () {

        if (xhr.status == 200) {
            const jobseeker_data1 = xhr.responseText; //ajax response data
           
          const jobseeker_data2 = JSON.parse(jobseeker_data1); //convert the response data to js object
           console.log(jobseeker_data1)
            jobseeker.innerHTML = ``;
               
                if(jobseeker_data2 != null) {
       
                    for (var s of jobseeker_data2) {
                  
                        jobseeker.innerHTML += ` 
    <div class="jobseeker_row">
        <a href="<?php echo URL ?>Jobseeker/JobSeekerprofile" class="ResourceRow" type = " button" >
          <div class="Academy">
         
              <div class="Tutorial">
                 Jobseeker ID:
               ${s.Jobseeker_ID}
               </div>
              <div class="Tutorial">
               ${s.First_name}&nbsp;${s.Last_name}
               </div>
              <div class="email">
               ${s.Email}
               </div>
          </div>
          
         
        </a>
    </div>
                     
          
                  
                 
                      
                     `;
                    }
                  } 


            }


        }
      
        xhr.send();

        return false;
}