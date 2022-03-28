<?php
class ApplyJobs extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }
    function ApplyJobs()
    {

    }

    function ApplyJobs1($Job_ID)
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        // $this->view ->render('ApplyJobs'); 

//         $_SESSION['User'] = $_GET['User'];
//         if ($_SESSION['User_type'] == 'Jobseeker' and $_SESSION['User_ID'] == $_GET['User']) {
//             $data = $this->model->get_jobseeker_data_m($_GET['User']);
// //                print_r($data);
//             //pass view name
//             $this->view->render2('ApplyJobs', $data);

//         } else {
//             //  $this->view->render("YouDontHavePermission");
//         }
// echo($_SESSION['User_ID']);
        //pass view name
        $data = [
             'fname' => '',
             'lname' => '',
             'email' => '',
             'phonenumber' => '',
             'Message' => '',
             'fname_err' => '',
             'lname_err' => '',
             'email_err' => '',
             'phonenumber_err' => '',
             'Message_err' => '',
             
         ];
         if(isset($_SESSION['User_ID']))
         {
             $Job_data=$this->model->getJobData($_SESSION['User_ID']);
             $data['Job_ID']=$Job_ID;
             $data['fname']=$Job_data['First_name'];
             $data['lname']=$Job_data['Last_name'];
             $data['email']=$Job_data['Email'];
             $data['phonenumber']=$Job_data['Phone_number'];
            //  $data['Message']=$Job_data['Message'];
         }
         
         $this->view ->render2('ApplyJobs',$data); 
        
    }

    function insertJobData($Job_ID)
    {
      //pass view name
    //   if($_SERVER['REQUEST_METHOD'] == 'POST')
    //   {
    //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
    //     $data=[
    //         'First_name'=> trim($_POST['First_name']),
    //         'Last_name'=> trim($_POST['Last_name']),
    //         'Email'=> trim($_POST['Email']),
    //         'Phone_number'=> trim($_POST['Phone_number']),
    //         'Message'=> trim($_POST['Message'])
    //     ]

    //     // $this->model->insertJobData_m($data1);
    //     if(empty($data['First_name'])) 
    //     {
    //       $data['fname_err'] = "Please enter the First Name";
    //     }
    //     if(empty($data['Last_name'])) 
    //     {
    //       $data['lname_err'] = "Please enter the Last Name";
    //     }
    //     if(empty($data['Email'])) 
    //     {
    //       $data['email_err'] = "Please enter the Email";
    //     }
    //     if(empty($data['Phone_number'])) 
    //     {
    //       $data['phonenumber_err'] = "Please enter the Phone Number";
    //     }
    //     if(empty($data['Message'])) 
    //     {
    //       $data['Message_err'] = "Please enter the Message";
    //     }
    //     if(empty($data['fname_err']) && empty($data['lname_err']) && empty($data['email_err']) && empty($data['phonenumber_err']) && empty($data['Message_err'])){

    //         $this->model->insertJobData_m($data);

    //     }
        
    //   }
     $this->model->insertJobData_m($Job_ID);
     $data['User_ID']=$_SESSION['User_ID'];
    //  $this->view ->render2('ApplyJobs',$data); 
      
    }

    
}