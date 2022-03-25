<?php
class Post_job_main_page extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Post_job_main_page()
    {  //get registration data
       $reg_date1=$this->model->get_reg_date()[0];
       $reg_date2= new DateTime($reg_date1);
      // $reg_date2= date('Y-m-d', strtotime($reg_date1));
       print_r($reg_date2);
       
      date_default_timezone_set("Asia/Colombo");
      $now = new DateTime();
      // $now1= $now->format('Y-m-d');
      print_r($now);
     // $diff=date_diff($now1,$reg_date2);
      $diff=date_diff($now,$reg_date2);

      $diff_y=$diff->{'y'};
      $diff_m=$diff->{'m'};
    
      $count1=$this->model->get_job_count();
   
      
      $count2= intval($count1);

        //pass view name
    
       $this->view ->render6('Jobs/Post_job_main_page',$diff_y,$diff_m,$count2); 
        
    }
}