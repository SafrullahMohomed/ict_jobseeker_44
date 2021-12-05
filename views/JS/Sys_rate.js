function loadmore() {
   
    var more_review = document.getElementById("more");
    var btnText = document.getElementById("loadmore_btn");
    btnText.style.display="none";
    more_review.style.display="inline";

  
  }
//when user click on ther star  color change 
  function color_star(star){
    let count;

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
      star.ariaHidden="false";
      star.className="fa fa-star-o"
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
      star.ariaHidden="false";
      star.className="fa fa-star-o"
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
      star.ariaHidden="false";
      star.className="fa fa-star-o"
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
      star.ariaHidden="false";
      star.className="fa fa-star-o"
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
    alert("Somthing going wrong")
  }
  document.getElementById("count").innerHTML=count;
  
  
  }

  function review(){
   
    let data ={
     review : document.getElementById("review_text"),
    count : document.getElementById("count").value


    }
    alert(data.review);

  }