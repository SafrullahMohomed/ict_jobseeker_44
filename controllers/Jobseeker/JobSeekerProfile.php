<?php
class JobSeekerProfile extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function JobSeekerProfile()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        // $this->view ->render('JobSeekerProfile'); 
     
          $data = $this->model->get_jobseeker_data_m($_GET['User']);
    //    print_r($data);
          //pass view name
          $this->view->render2('JobSeekerProfile',$data);
      }
    //   else
    //   {
    //        $this->view->render("YouDontHavePermission");
    //       echo "you dont have permission";
    //   }
    function get_JobSeeker_data()
    {

//        if($_SESSION['User_type'] == 'Counsellor'){
//            $User_ID = $_SESSION['User_ID'];
//            $data = $this->model->get_counsellor_data_m($User_ID);
//            echo json_encode($data);
//        }


    }


    function get_JobSeeker_data_admin($User_ID)
    {
        $data = $this->model->get_jobseeker_data_m($User_ID);
        echo json_encode($data);
        $this->view->render2('JobSeekerProfile',$data);

    }
        
    }



  