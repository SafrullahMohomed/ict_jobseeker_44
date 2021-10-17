function Bidnow(){
    window.open("");
    
    }
    /*after click on the category box*/
    function viewContract(){
       
        window.open("../View contract/view_contract.html","_self");
    
    
    }

    
    function loadmore() {
 
        var more_jobs = document.getElementById("more");
        var more_btn1 = document.getElementById("more1");//button
        var btnText = document.getElementById("loadmore_btn");

        btnText.style.display="none";
        more_jobs.style.display="inline";
        more_jobs.style.margin="0";
        //more_btn1.style.display="inline-block";
      
      }
      /*after click on the job detail box for view more details about job*/
     
      function viewContract()
      {
        window.open("http://localhost/ict_jobseeker_44/Contracts/View_contract","_self");
      }s