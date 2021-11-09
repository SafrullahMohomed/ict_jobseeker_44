<?php

class Admin_add_counselling extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_counselling()
    {
        $data = ['firstName_error' => '',
                'lastName_error' => '',
                'email_error' => '',
                'phoneNumber_error' => ''];


        //pass view name
        $this->view->renderAdmin2('Admin_add_counselling',$data);
    }

    function insert_counsellor_admin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'firstName' => trim($_POST['firstName']),
                'lastName' => trim($_POST['lastName']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'phoneNumber' => trim($_POST['phoneNumber']),
                'address' => trim($_POST['address']),
                'city' => trim($_POST['city']),
//                'qualification' => trim($_POST['qualification']),
                'facebook' => trim($_POST['facebook']),
                'linkedin' => trim($_POST['linkedin']),
                'twitter' => trim($_POST['twitter']),
                'provideMi' => trim($_POST['provideMi']),
                'adminApprove' => trim($_POST['adminApprove']),
                'aboutYou' => trim($_POST['aboutYou']),
                'firstName_error' => '',
                'lastName_error' => '',
                'email_error' => '',
                'phoneNumber_error' => ''

            ];



//           var_dump($data);

            //Validate firstName
            if (empty($data['firstName'])) {

                $data['firstName_error'] = "Please enter the first name";
            }
            //Validate lastName
            if (empty($data['lastName'])) {
                $data['lastName_error'] = "Please enter the last name";
            }

            //Validate email
            if (empty($data['email'])) {
                $data['email_error'] = "Please enter the email";
            } elseif ($this->model->isRegisteredUser($data['email'])) {
                $data['email_error'] = "Email is already registered";
            }



            if (empty($data['firstName_error']) && empty($data['lastName_error']) && empty($data['email_error'])) {
                //Validated

                //Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //if there exist no email previously in the database
                if (!$this->model->isRegisteredUser($data['email'])) {
                    //create token
//                    $emailToken = openssl_random_pseudo_bytes(16);
//                    $emailToken = bin2hex($emailToken);
//                    $_SESSION['emailToken'] = $emailToken;
                    $this->model->add_counsellor($data);
//                    $this->model->sendMail($data['email'], $emailToken, $data['fname']);
//                    $info['mail_msg'] = "We have sent an email with a confirmation link to your email address. In order to complete the sign-up process, please click the confirmation link.";

//                    $this->view->renderAdmin2(Manage_counselling, $data);
                    header("Location:http://localhost/ict_jobseeker_44/Admin/Manage_counselling");
//                    $this->view->render('Mail_info');
                    #$this->view ->Success_post2($info['info_msg1']);


                } //it mean there has a already registered account of relavant email.then redirect to login page
                else {
                    $this->view->render2('Login', $data['email']);
                }


            } else {
                /*  $data = [
                      'fname' => trim($_POST['fname']),
                      'lname' => trim($_POST['lname']),
                      'email' => trim($_POST['email']),
                      'password' => trim($_POST['password']),
                      'user_type' => trim($_POST['user_type']),
                      'verify' => '0',
                      'confirmPassword' => trim($_POST['confirmPassword']),
                        //***** */

                /*'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirmPassword_err' => '',
                'controller'=>''
            ]; */

                $this->view->renderAdmin2('Admin_add_counselling', $data);
            }

        }


//        print_r($_POST);
//        $profilePic = $_POST['image'];
//        $firstName = $_POST['firstName'];
//        $lastName = $_POST['lastName'];
//        $email = $_POST['email'];
//        $password = $_POST['password'];
//        $phoneNumber = $_POST['phoneNumber'];
//        $address = $_POST['address'];
//        $city = $_POST['city'];
////        $qualification = $_POST['qualification'];
//        $facebook = $_POST['facebook'];
//        $linkedin = $_POST['linkedin'];
//        $twitter = $_POST['twitter'];

//        $this->model->add_counsellor($password, $firstName, $lastName, $email, $phoneNumber, $address, $city, $facebook, $linkedin, $twitter);
    }
}
