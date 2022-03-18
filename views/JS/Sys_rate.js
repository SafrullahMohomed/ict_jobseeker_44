
let data ={
  "review": "",
  "count" : 0


  };

function loadmore() {
   
    var more_review = document.getElementById("more");
    var btnText = document.getElementById("loadmore_btn");
    btnText.style.display="none";
    more_review.style.display="inline";

  
  }


//when user click on ther star  color change 


  function color_star(star){
    var count;
    
    var s1=document.getElementById("s1");
    var s2=document.getElementById("s2");
    var s3=document.getElementById("s3");
    var s4=document.getElementById("s4");
    var s5=document.getElementById("s5");

  var x=star.id;
  if(x=="s1"){
 
  if(star.ariaHidden=="false"){
    star.ariaHidden="true";
    star.className="fa fa-star"
    count=1;
  }
  else{
      s5.ariaHidden="false";
      s5.className="fa fa-star-o"
      s4.ariaHidden="false";
      s4.className="fa fa-star-o"
      s3.ariaHidden="false";
      s3.className="fa fa-star-o"
      s2.ariaHidden="false";
      s2.className="fa fa-star-o"
      s1.ariaHidden="false";
      s1.className="fa fa-star-o"
      count=0;

  }
 }
  else if(x=="s2"){
    if(star.ariaHidden=="false"){
      s1.ariaHidden="true";
      s1.className="fa fa-star"
      star.ariaHidden="true";
      star.className="fa fa-star"
      count=2;
    }
    else{
      s5.ariaHidden="false";
      s5.className="fa fa-star-o"
      s4.ariaHidden="false";
      s4.className="fa fa-star-o"
      s3.ariaHidden="false";
      s3.className="fa fa-star-o"
      s2.ariaHidden="false";
      s2.className="fa fa-star-o"
      count=1;
    }
  }
  else if(x=="s3"){
    if(star.ariaHidden=="false"){
      s1.ariaHidden="true";
      s1.className="fa fa-star"
      s2.ariaHidden="true";
      s2.className="fa fa-star"
      star.ariaHidden="true";
      star.className="fa fa-star"
      count=3;
    }
    else{
      s5.ariaHidden="false";
      s5.className="fa fa-star-o"
      s4.ariaHidden="false";
      s4.className="fa fa-star-o"
      s3.ariaHidden="false";
      s3.className="fa fa-star-o"
      count=2;
    }
  }
  else if(x=="s4"){
    if(star.ariaHidden=="false"){
      s1.ariaHidden="true";
      s1.className="fa fa-star"
      s2.ariaHidden="true";
      s2.className="fa fa-star"
      s3.ariaHidden="true";
      s3.className="fa fa-star"
      star.ariaHidden="true";
      star.className="fa fa-star"
      count=4;
    }
    else{
      s5.ariaHidden="false";
      s5.className="fa fa-star-o"
      s4.ariaHidden="false";
      s4.className="fa fa-star-o"
      count=3;
    }
  }
  else if(x=="s5"){
    if(star.ariaHidden=="false"){
      s1.ariaHidden="true";
      s1.className="fa fa-star"
      s2.ariaHidden="true";
      s2.className="fa fa-star"
      s3.ariaHidden="true";
      s3.className="fa fa-star"
      s4.ariaHidden="true";
      s4.className="fa fa-star"
      star.ariaHidden="true";
      star.className="fa fa-star"
      count=5;
     
    }
    else{
      star.ariaHidden="false";
      star.className="fa fa-star-o"
      count=4;
    }
  }
  else{
    alert("Somthing going wrong");
  }
 
   data['count']=count;
   
  }


  //pass rate and review data to controller
  function review(){
   
  
    data['review']=document.getElementById("review_text").value;
    let star_count=data['count'];
    let sys_review= data['review'];
   
    $.post("http://localhost/ict_jobseeker_44/Sys_rate/sys_rate_data",
    data,
    function(data,status){
    alert(data);
    });


  }
//load review data from database
  function reviewLoad(){
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Sys_rate/req_sys_rate_data");
    
    xhr.onload = function () {
      let review = document.querySelector(".review");
     
     // search = JSON.parse(this.response);
      //let x=toString(this.response)
      search = JSON.parse(this.response);
    //  console.log(this.response);
    
      review.innerHTML = "";

      if (search!==null) {
       
        for (var s of search) {

        
          review.innerHTML += `  
          
          <div class="review_row">
          <div class="user_picture">
     
          <img src='<?php echo URL?>views/images/Sys_rate/review_user1.jpg' >  
          
          </div>
          <div class="review_detail">
              <div class="review_detail_name">
              ${s.First_name}&nbsp ${s.Last_name}
               </div>
               <div class="do_rate_star_row">

                  <div class="star_no">${s.System_rate_star_count}</div>
                  <i class="fa fa-star" aria-hidden="true"></i> 
                  <!-- <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="false"></i>
                  <i class="fa fa-star-o" aria-hidden="false"></i>
                  <i class="fa fa-star-o" aria-hidden="false"></i> -->
                </div>
                <div class="date">
                ${s.review_date}
                </div>
                <div class="review_para">
                ${s.System_rate_and_review_reviews}
                </div>
                <hr>
          </div>
        
       </div>
       
          
         `;
        }
      } else {
       /* Contract.innerHTML = `<div class="product">
                         <button type = "button" class = "btn-cart" >
                             Add quatation
                               </button>
                              <h2 class="sm-title">Sorry,We don't have such a product,plaese requesrt a quatation <h2>
                            </div>`;*/
      }
    };
    xhr.send();
    totRate();
    return false;

  }


  //load total count of ratings from database
  function totRate(){
   
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Sys_rate/tot_rate");
   
    xhr.onload = function () {
      let rating_overview_row = document.querySelector(".rating_overview_row");
     
     // search = JSON.parse(this.response);
      //let x=toString(this.response)
      search = JSON.parse(this.response);
      //console.log(this.response);
     
      rating_overview_row.innerHTML = "";

      
      
        
          rating_overview_row.innerHTML += `  <div class="no_with_star"> <div class="total_rate">
          ${search.avg}
      </div>
      <div class="star">
      
          <i class="fa fa-star" aria-hidden="true"></i>
          
      </div>
      </div>
      <div class="rating_description">
          <p>based on <span>${search.count}</span> reviews</p>
      </div> 
          
          
          
         `;
       
    };
    xhr.send();
    return false;


  }