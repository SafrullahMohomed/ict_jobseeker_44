
//load cp data from database
function cpData(User_ID){


    var xhr = new XMLHttpRequest();
        xhr.open("POST", "http://localhost/ict_jobseeker_44/Contract_provider/Contract_provider_profile/cp_data/"+User_ID);
        
        xhr.onload = function () {
            let detail = document.querySelector(".detail");
        
           s = JSON.parse(this.response);
       
        
         detail.innerHTML = "";
    
        
            
             detail.innerHTML += `  
              
             <div class="main_details">

             <div class="picture">
             <img src='<?php echo URL ?>views/images/Contract_provider_profile/contract provider.jfif' >
                
              
             </div>  
             <div class="main_details_text">
                <div class="name">
                    ${s.First_name}&nbsp;${s.Last_name}
                </div>
                <div class="address">
                ${s.Address}
                </div>
                <div class="phone_number">
                ${s.Phone_number}
                </div>
                <div class="no_of_contracts">
                  6 contract post
                </div>
                 <div class="rating">
                     <i class="fa fa-star-o" aria-hidden="false"></i>
                     <div class="no_of_rating">4.2</div>
                 </div>
             </div>  
          </div> 
          <div class="description">
          ${s.Description}
          </div>
          <div class="sub_parts">
       <div class="email">
           <div class="email_text">
             Email
           </div>
           <div class="email_data">
             <a href=" ${s.Email}">  ${s.Email} </a>
           </div>
          
       </div>
       <div class="website">
           <div class="website_text">
               Web site
           </div>
           <div class="website_data">
             <a href="chamalcontract.com"> chamalcontract.com  </a> 
           </div>
         
       </div>
       <div class="social_media">
           <div class="social_media_text">Social media</div>
           <div class="social_media_links">
           <a href="${s.Fb_url}">   <i  class="fab fa-facebook-square"></i></a> 
           <a href="${s.Linkedin_url}">   <i  class="fab fa-linkedin"></i></a>
             <a  href="${s.Twitter_url}"><i  class="fab fa-twitter-square"></i></a>
            </div>
         
       </div>
     
 
          </div>
              
             `;
            
        };
        xhr.send();
      
        return false;
    
    
    
    }
//reveiw part start
    let data ={
      "review": "",
      "count" : 0
    
    
      };
    
  
    
    
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
    
    $.post("http://localhost/ict_jobseeker_44/Contract_provider/Contract_provider_profile/cp_rate_data",
    data,
    function(data,status){
    alert(data);
    });


  }