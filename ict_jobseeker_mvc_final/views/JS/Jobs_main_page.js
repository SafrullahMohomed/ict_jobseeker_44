function loadmore() {
  
    var more_jobs = document.getElementById("more");
    var btnText = document.getElementById("loadmore_btn");
    btnText.style.display="none";
    more_jobs.style.display="inline";

  
  }
  /*after click on the job detail box for view more details about job*/
  function functionView()
  {
    window.open("../View job/view_job.html","_self");
  }
 
  /*src="../View job/view_job.html"*/