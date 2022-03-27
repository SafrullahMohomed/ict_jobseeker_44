<?php
class View_job extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function View_job()
    {
     $data=[
      'Job_ID'=>""
     ];
        //pass view name
        $this->view ->render('Jobs/View_job'); 
        
    }
    function View_jobjs($Job_ID)
    {
      $data=[
        'Job_ID'=>$Job_ID
       ];
        //$Job_ID=$_POST['Job_ID'];
        //pass view name with job id
        $this->view ->render2('Jobs/View_job',$data); 
        
    }



    function view_clicked_job(){
      $Job_ID=$_POST['Job_ID'];
     
     
      $job=$this->model->select_job_data($Job_ID);
     
      echo json_encode(count( $job) == 0 ? null :  $job);
      return $job;

    }

    //function for xhr req
    function view_clicked_job2($Job_ID){
     
      $job=$this->model->select_job_data($Job_ID);
     
      echo json_encode(count( $job) == 0 ? null :  $job);
      return $job;

    }


}