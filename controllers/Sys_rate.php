<?php
class Sys_rate extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Sys_rate()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Sys_rate'); 
        
    }

  function sys_rate_data(){
  
   $count=$_POST['count'];
   $review= $_POST['review'];
   
      if(isset($_SESSION['User_ID'])){
        $this->model->insert_sys_data($count,$review);
        echo("Successfully added your rate and review.Thank you");
      }
    else{
     echo("Before rate the system you should login");
    //$this->view ->render('Login'); 
      }
   

    }
//select review data from data base
    function req_sys_rate_data(){
      $review=$this->model->select_sys_rate_data();
        
      echo json_encode(count( $review) == 0 ? null :  $review);
      return $review;
    }
    //calculate rating for system
    function  tot_rate(){
      $tot=$this->model->select_tot_rate();
      echo json_encode(count(  $tot) == 0 ? null :   $tot);
      return $tot;
    }

}