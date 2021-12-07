<?php
class Jobs_main_page extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Jobs_main_page()
    {

        //pass view name
        $this->view ->render('Jobs_main_page'); 
        
    }
//select data from database to jobs main page
  function select_job_data(){
    $job=$this->model->select_query_job_data();     
    echo json_encode(count($job) == 0 ? null : $job);
   return $job;
  }


}