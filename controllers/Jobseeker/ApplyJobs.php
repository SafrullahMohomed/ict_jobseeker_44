<?php
class ApplyJobs extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function ApplyJobs()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        // $this->view ->render('ApplyJobs'); 

        $_SESSION['User'] = $_GET['User'];
        if ($_SESSION['User_type'] == 'Jobseeker' and $_SESSION['User_ID'] == $_GET['User']) {
            $data = $this->model->get_jobseeker_data_m($_GET['User']);
//                print_r($data);
            //pass view name
            $this->view->render2('ApplyJobs', $data);

        } else {
            //  $this->view->render("YouDontHavePermission");
        }
        
    }

    
}