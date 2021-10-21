<?php



// use PHPMailer\PHPMailer;
// use PHPMailer\Exception;
// use PHPMailer\SMTP;


class Registration extends Controller
{
    public function __construct()
    {
        parent:: __construct();
        
    }

     


    public function Registration()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name

        $data = [
           /* 'user_type' => trim($_POST['user_type']),
            'fname' => trim($_POST['fname']),
            'lname' => trim($_POST['lname']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'verify' => '1',
            'confirmPassword' => trim($_POST['confirmPassword']),*/
            'user_type_err' => '',
            'fname_err' => '',
            'lname_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirmPassword_err' => '',
            'controller'=>'Registration'
        ];
        $this->view ->render2('Registration',$data); 
        
    }
    public function UserRegistration()
    {
        // var_dump($_POST);
        // $this->view ->render('Login'); 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'user_type' => trim($_POST['user_type']),
                    'fname' => trim($_POST['fname']),
                    'lname' => trim($_POST['lname']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'verify' => '0',
                    'confirmPassword' => trim($_POST['confirmPassword']),
                    'user_type_err' => '',
                    'fname_err' => '',
                    'lname_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirmPassword_err' => '',
                    'controller'=>'Registration'
                ];
                $_SESSION['user_type'] = $data['user_type'];
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['lname'] = $data['lname'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['password'] = $data['password'];

                //Validate user_type
                if(empty($data['user_type'])) {
                    $data['user_type_err'] = "Please enter the user type";
                
                }
                else if(!($this->model->checkUserByUserType($data))) {
                    $data['user_type_err'] = "Entered user type is wrong!";
                }
                //Validate fname
                if(empty($data['fname'])) {
                    $data['fname_err'] = "Please enter the first name";
                }
                //Validate lname
                if(empty($data['lname'])) {
                    $data['lname_err'] = "Please enter the last name";
                }
    
                //Validate user id
                if(empty($data['email'])) {
                     $data['email_err'] = "Please enter the email";
                }elseif($this->model->isRegisteredUser($data['email'])) {
                    $data['email_err'] = "Email is already registered";
                }
                //Validate password
                if(empty($data['password'])) {
                    $data['password_err'] = "Please enter the password";
                }elseif(strlen($data['password']) < 6) {
                    $data['password_err'] = "Please enter at least 6 characters";
                }
    
                //Validate Confirm password
                if(empty($data['confirmPassword'])) {
                    $data['confirmPassword_err'] = "Please confirm password";
                }elseif($data['password'] != $data['confirmPassword']) {
                    $data['confirmPassword_err'] = "Doesn't match with password";
                }
    
                //Make sure errors are empty
               /* if(empty($data['fname_err']) && empty($data['lname_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirmPassword_err'])) {
                    //Validated
                   
                    //Hash Password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                    
                    //Register a user
                    if(!($this->model->isRegisteredUser($data['email']))) {
                        $email = $data['email'];
                        //$this->model->verifyemail($email);
                        if($this->model->findUser($data['email'])) {
                            $_SESSION['email_new'] = $data['email'];
                           
                            $_SESSION['controller'] = $data['controller'];
                            //send mail to user and varify
                            $this->model->verifyemail( $_SESSION['email_new']);
                        }

                        
                    }
                    
    
                }
                else {
                    // $this->view->render('user/registration', $data);
                    $this->view ->render2('Registration',$data); 
                }*/

                if(empty($data['fname_err']) && empty($data['lname_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirmPassword_err'])) {
                    //Validated
                   
                    //Hash Password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                    //if there exist no email priviosly in the database
                    if(!$this->model->isRegisteredUser($data['email'])) {
                        //create token
                        $emailToken = openssl_random_pseudo_bytes(16);
                        $emailToken = bin2hex($emailToken);

                        $this->model->insert_reg_data($data,  $emailToken);
                        $this->model->sendMail($data['email'],$emailToken,$data['fname']);
                        

                    }


                
            }
            else {
                $data = [
                    'fname' => trim($_POST['fname']),
                    'lname' => trim($_POST['lname']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    
                    'verify' => '0',
                    'confirmPassword' => trim($_POST['confirmPassword']),
                      //***** */
    
                    'fname_err' => '',
                    'lname_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirmPassword_err' => '',
                    'controller'=>''
                ];
                $this->view ->render2('Registration',$data);
            }
    
        }
    
        //para1=email and para2=token
        /*public function verifyemail($param1,$param2)
         {
             if($this->Registration_Model->isRegisteredUser($param1))
             {
                 $this->Registration_Model->verify($param1,$param2);
                 echo "succses"
                 //$this->redirect(login);
             }
             else{
                 die("Something went wrong");
             }
          }*/
    
}
}

        $this->view ->render('Registration'); 
        
    }
    // public function Registration()
    // {
    //     // var_dump($_POST);
    //     // $this->view ->render('Login'); 
    //     if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //             $data = [
    //                 'user_type' => trim($_POST['user_type']),
    //                 'fname' => trim($_POST['fname']),
    //                 'lname' => trim($_POST['lname']),
    //                 'email' => trim($_POST['email']),
    //                 'password' => trim($_POST['password']),
    //                 'verify' => '0',
    //                 'confirmPassword' => trim($_POST['confirmPassword']),
    //                 'user_type_err' => '',
    //                 'fname_err' => '',
    //                 'lname_err' => '',
    //                 'email_err' => '',
    //                 'password_err' => '',
    //                 'confirmPassword_err' => '',
    //                 'controller'=>'Registration'
    //             ];
    //             $_SESSION['user_type'] = $data['user_type'];
    //             $_SESSION['fname'] = $data['fname'];
    //             $_SESSION['lname'] = $data['lname'];
    //             $_SESSION['email'] = $data['email'];
    //             // $_SESSION['landowner_type'] = $data['landowner_type'];
    //             $_SESSION['password'] = $data['password'];

    //             //Validate user_type
    //             if(empty($data['user_type'])) {
    //                 $data['user_type_err'] = "Please enter the user type";
    //             }else if(!($this->model->checkUserByUserType($data))) {
    //                 $data['user_type_err'] = "Entered user type is wrong!";
    //             }
    //             //Validate fname
    //             if(empty($data['fname'])) {
    //                 $data['fname_err'] = "Please enter the first name";
    //             }
    //             //Validate lname
    //             if(empty($data['lname'])) {
    //                 $data['lname_err'] = "Please enter the last name";
    //             }
    
    //             //Validate user id
    //             if(empty($data['email'])) {
    //                  $data['email_err'] = "Please enter the email";
    //             }elseif($this->model->isRegisteredUser($data['email'])) {
    //                 $data['email_err'] = "Email is already registered";
    //             }
    //             //Validate password
    //             if(empty($data['password'])) {
    //                 $data['password_err'] = "Please enter the password";
    //             }elseif(strlen($data['password']) < 6) {
    //                 $data['password_err'] = "Please enter at least 6 characters";
    //             }
    
    //             //Validate Confirm password
    //             if(empty($data['confirmPassword'])) {
    //                 $data['confirmPassword'] = "Please confirm password";
    //             }elseif($data['password'] != $data['confirmPassword']) {
    //                 $data['confirmPassword'] = "Doesn't match with password";
    //             }
    
    //             //Make sure errors are empty
    //             if(empty($data['fname_err']) && empty($data['lname_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirmPassword_err'])) {
    //                 //Validated
    //                 //Hash Password
    //                 $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    //                 //Register a user
    //                 if(!($this->model->isRegisteredUser($data['email']))) {
    //                     $email = $data['email'];
    //                     if($this->model->findUser($data['email'])) {
    //                         $_SESSION['email_new'] = $data['email'];
    //                         // $_SESSION['controller'] = $data['controller']
    //                         // otpSend();
    //                         verifyemail();
    //                     }
                        
    //                 }//****************** */
                    
    
    //             }else {
    //                 // $this->view->render('user/registration', $data);
    //                 $this->view ->render('Registration',$data); 
    //             }
                
    //         }else {
    //             $data = [
    //                 'fname' => trim($_POST['fname']),
    //                 'lname' => trim($_POST['lname']),
    //                 'email' => trim($_POST['email']),
    //                 'password' => trim($_POST['password']),
    //                 'verify' => '0',
    //                 'confirmPassword' => trim($_POST['confirmPassword']),
    //                   //*********** */
    
    //                 'fname_err' => '',
    //                 'lname_err' => '',
    //                 'email_err' => '',
    //                 'password_err' => '',
    //                 'confirmPassword_err' => '',
    //                 'controller'=>''
    //             ];
    //             $this->view ->render('Registration',$data);
    //         }
    
    //     }
    //     public function verifyemail($param1,$param2)
    //     {
    //         if($this->Registration_Model->isRegisteredUser($param1))
    //         {
    //             $this->Registration_Model->verify($param1,$param2);
    //             $this->redirect(login);
    //         }
    //         else{
    //             die("Something went wrong");
    //         }
    //      }
    
}

