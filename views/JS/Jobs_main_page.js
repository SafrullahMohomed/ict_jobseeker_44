function loadmore() {
  
    var more_jobs = document.getElementById("more");
    var more_btn1 = document.getElementById("more1");//button
    var btnText = document.getElementById("loadmore_btn");
    btnText.style.display="none";
    more_jobs.style.display="inline";
    //more_btn1.style.display="inline-block";
  
  }
  /*after click on the job detail box for view more details about job*/
  function functionView()
  {
    window.open("../View job/view_job.html","_self");
  }
 
  /*src="../View job/view_job.html"*/