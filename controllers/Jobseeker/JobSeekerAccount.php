<?php

if (empty(session_id())) session_start();

class JobSeekerAccount extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function JobSeekerAccount()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        $_SESSION['User'] = $_GET['User'];
        if (($_SESSION['User_type'] == 'Jobseeker' and $_SESSION['User_ID'] == $_GET['User']) or $_SESSION['User_type'] == 'Admin44') {
            $data = $this->model->get_jobseeker_data_m($_GET['User']);
//                print_r($data);
        // var_dump($data);

            //pass view name
            $this->view->render2('JobSeekerAccount', $data);

        } else {
             $this->view->render("YouDontHavePermission");
        }

        //pass view name
        // $this->view ->render('JobSeekerAcc'); 

       

        // //pass view name
        // $this->view ->render2('JobSeekerAccount',$data); 

        
        
    }

//     function get_jobseeker_data()
//     {
// ////        $User_ID = 108;
// //        $data = $this->model->get_jobseeker_data_m($GLOBALS['User']);
// //        echo json_encode($data);
// ////        echo $GLOBALS['User_Id'];
//     }


    function update_jobseeker_data()
    {
        
        echo "<pre>";
        print_r($_FILES);
        
        echo "</pre>";
        // move_uploaded_file($data['ProfileTmpName'],$ProfilePicUploadTo . $data['profile_pic']);
        // var_dump($_POST);
        if(isset($_POST)) {
            //   print_r($_POST);
            $data = [
                                'fname' => trim($_POST['fname']),
                                'lname' => trim($_POST['lname']),
                                'email' => trim($_POST['email']),
                                'gender' => trim($_POST['gender']),
                                'age' => trim($_POST['age']),
                                'phone_number' => trim($_POST['phone_number']),
                                'address' => trim($_POST['address']),
                                'brief_description' => trim($_POST['brief_description']),
                                'experience' => trim($_POST['experience']),
                                'skills' => trim($_POST['skills']),
                                'education' => trim($_POST['education']),
                                'linkedin_url' => trim($_POST['linkedin_url']),
                                'fb_url' => trim($_POST['fb_url']),
                                'twitter_url' => trim($_POST['twitter_url']),
                                'web_url' => trim($_POST['web_url']),

                                'profile_pic_name'=>$_FILES['profile_pic']['name'],
                                'profile_type'=>$_FILES['profile_pic']['type'],
                                'profile_size'=>$_FILES['profile_pic']['size'],
                                'ProfileTmpName'=>$_FILES['profile_pic']['tmp_name'],
                
                    ];  
                    echo "<br>";
                    echo($data['ProfileTmpName']);
                    echo "<br>";

                // if()

                $ProfilePicUploadTo='views/images/UserProfile/';
                
              
                $this->model->update_jobseeker_data_m($_POST, $_POST['User_ID']);
            }
            // header("Location:http://localhost/ict_jobseeker_44/Jobseeker/JobSeekerProfile?User=" . $_POST['User_ID']);
        
        
        
        // // var_dump($_POST);
        // if (isset($_POST)) {
        // //   print_r($_POST);

        //     $this->model->update_jobseeker_data_m($_POST, $_POST['User_ID']);
        // }
        // header("Location:http://localhost/ict_jobseeker_44/Jobseeker/JobSeekerProfile?User=" . $_POST['User_ID']);
    }
    
}
