<?php
// class JobSeekerAcc extends Controller
// {
//     function __construct()
//     {
//       parent:: __construct();

//     }

//     function JobSeekerAcc()
//     {
//         #$this->model->printSomething();
//         #echo "Hello from the Test controller - Index Method";

//         $GLOBALS['User'] = $_GET['User'];
//         if (($_SESSION['User_type'] == 'jobseeker' and $_SESSION['User_ID'] == $_GET['User']) or $_SESSION['User_type'] == 'Admin44') {
//             $data = $this->model->get_jobseeker_data($_GET['User']);
// //                print_r($data);
//             //pass view name
//             $this->view->render2('JobSeekerAcc', $data);

//         } else {
//             $this->view->render("You Dont Have Permission");
//         }

//         //pass view name
//         // $this->view ->render('JobSeekerAcc'); 
        
//     }

//     function get_jobseeker_data()
//     {
// ////        $User_ID = 108;
// //        $data = $this->model->get_counsellor_data_m($GLOBALS['User']);
// //        echo json_encode($data);
// ////        echo $GLOBALS['User_Id'];
//     }


//     function update_jobseeker()
//     {
//         if (isset($_POST)) {
// //            print_r($_POST);

//             $this->model->update_jobseeker_data($_POST, $_POST['User_ID']);
//         }
//         header("Location:http://localhost/ict_jobseeker_44/Jobseeker/JobSeekerProfile?User=" . $_POST['User_ID']);
//     }


    // function insert_data()
    // {
    //     if(isset($_POST['submit']))  
    //     {
    //         $profile_pic  =$_POST["profile_pic"];
    //         $fname=$_POST['fname'];
    //         $lname=$_POST['lname'];
    //         $email=$_POST['email'];
    //         $gender=$_POST['gender'];
    //         $age=$_POST['age'];
    //         $phone_number=$_POST['phone_number'];
    //         $address=$_POST['address'];
    //         $brief_description=$_POST['brief_description'];
    //         $linkedin_url=$_POST['linkedin_url'];
    //         $fb_url=$_POST['fb_url'];
    //         $twitter_url=$_POST['twitter_url'];
    //         $web_url=$_POST['web_url'];
    //     } 
    //     $this->model->run_insert_query($phone_number, $address, $brief_description,$email);
    // }

}