<?php
class Search_jobseeker extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Search_jobseeker($Job_ID)
    {
     //  print_r($Job_ID);
        //pass view name
        $this->view ->render3('Search_jobseeker',$Job_ID); 
        
    }

    function Search_jobseeker_for_job($Job_ID){
    $jobseeker=$this->model->Search_jobseeker_for_job_m($Job_ID);
    
    echo json_encode(count($jobseeker) == 0 ? null : $jobseeker);
    return  $jobseeker;

    }


}