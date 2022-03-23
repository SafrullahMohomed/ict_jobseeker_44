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
            $data = $this->model->get_jobseeker_data($_GET['User']);
//                print_r($data);
            //pass view name
            $this->view->render2('JobSeekerAccount', $data);

        } else {
            //  $this->view->render("YouDontHavePermission");
        }

        //pass view name
        // $this->view ->render('JobSeekerAcc'); 

        // $data = [
                    
        //   /*  'fname' => trim($_POST['fname']),
        //     'lname' => trim($_POST['lname']),
        //     'email' => trim($_POST['email']),
        //     'gender' => trim($_POST['gender']),
        //     'age' => trim($_POST['age']),
        //     'address' => trim($_POST['address']),
        //     'brief_description' => trim($_POST['brief_description']),
        //     'linkedin_url' => trim($_POST['linkedin_url']),
        //     'fb_url' => trim($_POST['fb_url']),
        //     'twitter_url' => trim($_POST['twitter_url']),
        //     'web_url' => trim($_POST['web_url']),*/
    
        //     'fname_err' => '',
        //     'lname_err' => '',
        //     'email_err' => '',
        //     'gender_err' => '',
        //     'age_err' => '',
        //     'address_err' => '',
        //     'brief_description_err' => '',
        //     'linkedin_url_err' => '',
        //     'fb_url_err' => '',
        //     'twitter_url_err' => '',
        //     'web_url_err' => ''
        // ];

        // //pass view name
        // $this->view ->render2('JobSeekerAccount',$data); 

        
        
    }

    function get_jobseeker_data()
    {
////        $User_ID = 108;
//        $data = $this->model->get_jobseeker_data_m($GLOBALS['User']);
//        echo json_encode($data);
////        echo $GLOBALS['User_Id'];
    }

    // public function UserValidation()
    // {
    //   if($_SERVER['REQUEST_METHOD'] == 'POST')
    //   {
    //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //     // var_dump($_POST);
    //     $data = [
                    
    //         'First_name' => trim($_POST['First_name']),
    //         'Last_name' => trim($_POST['Last_name']),
    //         'Email' => trim($_POST['Email']),
    //         // 'Gender' => trim($_POST['Gender']),
    //         // 'Age' => trim($_POST['Age']),
    //         // 'Phone_number' => trim($_POST['Phone_number']),
    //         // 'Address' => trim($_POST['Address']),
    //         'Description' => trim($_POST['Description']),
    //         'Jobseeker_In' => trim($_POST['Jobseeker_In']),
    //         'Jobseeker_Fb' => trim($_POST['Jobseeker_Fb']),
    //         'Jobseeker_Twitter' => trim($_POST['Jobseeker_Twitter']),
    //         'Jobseeker_Web' => trim($_POST['Jobseeker_Web']),
    
    //         'fname_err' => '',
    //         'lname_err' => '',
    //         'email_err' => '',
    //         'gender_err' => '',
    //         'age_err' => '',
    //         'phone_number_err' => '',
    //         'address_err' => '',
    //         'brief_description_err' => '',
    //         'linkedin_url_err' => '',
    //         'fb_url_err' => '',
    //         'twitter_url_err' => '',
    //         'web_url_err' => ''
    //     ];

    //     //Validate first name
    //     if(empty($data['First_name'])) 
    //     {
    //       $data['fname_err'] = "Please enter the first name";
    //     }

    //     //Validate last name
    //     if(empty($data['Last_name'])) 
    //     {
    //       $data['lname_err'] = "Please enter the last name";
    //     }

    //     //Validate user email
    //     if(empty($data['Email'])) 
    //     {
    //       $data['email_err'] = "Please enter email";
    //     }
    //     elseif(!filter_var($data['Email'], FILTER_VALIDATE_EMAIL))
    //     {
    //         $data['email_err'] = "Please enter valid email";
    //     }

    //      //Validate gender
    //      if(empty($data['Gender'])) 
    //      {
    //        $data['gender_err'] = "Please select your gender";
    //      }

    //      //Validate gender
    //      if(empty($data['Age'])) 
    //      {
    //        $data['age_err'] = "Please enter your age";
    //      }

    //      //Validate phone number
    //      if(empty($data['Phone_number']))
    //      {
    //       $data['phone_number_err'] = "Please enter phone number";

    //     }

    //      if(!empty($data['Phone_number']))
    //      {
    //       if(strlen($data['Phone_number'])!=10) 
    //       {
    //           $data['phone_number_err'] = "Please enter valid phone number";
              
    //       }
    //     }

    //     //Validate address
    //     if(empty($data['Address']))
    //     {
    //       $data['address_err'] = "Please enter phone number";

    //    }

    //    //Validate brief description
    //    if(empty($data['Description']))
    //    {
    //     $data['brief_description_err'] = "Please enter a brief description about your self";

    //   }

    //   // validate linkedin url
    //   $linkedin_regex = "/(ftp|http|https):\/\/?((www|\w\w)\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/";
    //   if(!empty($data['Jobseeker_In'])&&!preg_match( $linkedin_regex,$data['Jobseeker_In']))
    //   {
    //     $data['linkedin_url_err'] = "Please enter valid linkedin account link";
    //   }

    //    // validate fb url
    //    $fb_regex = "/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i";
    //    if(!empty($data['Jobseeker_Fb'])&&!preg_match( $fb_regex,$data['Jobseeker_Fb']))
    //    {
    //       $data['fburl_err'] = "Please enter valid facebook account link";
    //    }

    //   // validate twitter url
    //   $twitter_regex = "/(https:\/\/twitter.com\/(?![a-zA-Z0-9_]+\/)([a-zA-Z0-9_]+))/";
    //   if(!empty($data['Jobseeker_Twitter'])&&!preg_match( $twitter_regex,$data['Jobseeker_Twitter']))
    //   {
    //     $data['twitter_url_err'] = "Please enter valid twitter account link";
    //   }
 
    //   // validate web url
    //   $web_regex="/^((https?|ftp|smtp):\/\/)?(www.)?[a-z0-9]+\.[a-z]+(\/[a-zA-Z0-9#]+\/?)*$/";
    //   if(!empty($data['Jobseeker_Web'])&&!preg_match( $web_regex,$data['Jobseeker_Web']))
    //   {
    //     $data['web_url_err'] = "Please enter valid web url";
    //   }

    //   if(empty($data['fname_err'])  && empty($data['lname_err']) && empty($data['email_err']) && 
    //   empty($data['gender_err']) && empty($data['age_err']) && empty($data['phonenumber_err']) && 
    //   empty($data['address_err']) && empty($data['brief_description_err']) && empty($data['linkedin_url_err']) && 
    //   empty($data['fb_url_err']) && empty($data['twitter_url_err']) && empty($data['web_url_err']) ) 
    //   {
    //       // $this->model->insert_jobseeker_data($data);
    //       if (isset($_POST)) 
    //       {
    //         // //print_r($_POST);
            
    //         $this->model->update_jobseeker_data($_POST, $_POST['User_ID']);
    //       }
    //       header("Location:http://localhost/ict_jobseeker_44/Jobseeker/JobSeekerProfile?User=" . $_POST['User_ID']);
          
    //   }

    //   else
    //   {
    //     $this->view ->render2('JobSeekerAccount',$data);  
    //   }

    //   }
    // }

    function update_jobseeker_data()
    {
        if (isset($_POST)) {
//            print_r($_POST);
          var_dump($_POST);
            $this->model->update_jobseeker_data_m($_POST, $_POST['User_ID']);
        }
        header("Location:http://localhost/ict_jobseeker_44/Jobseeker/JobSeekerProfile?User=" . $_POST['User_ID']);
    }
    
}