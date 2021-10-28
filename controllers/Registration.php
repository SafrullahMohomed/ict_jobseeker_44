<?php


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
    
               

                if(empty($data['fname_err']) && empty($data['lname_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirmPassword_err'])&& empty($data['user_type_err'])  ) {
                    //Validated
                   
                    //Hash Password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                    //if there exist no email previously in the database
                    if(!$this->model->isRegisteredUser($data['email'])) {
                        //create token
                        $emailToken = openssl_random_pseudo_bytes(16);
                        $emailToken = bin2hex($emailToken);
                        $_SESSION['emailToken'] =$emailToken ;
                        $this->model->insert_reg_data($data,  $emailToken);
                        $this->model->sendMail($data['email'],$emailToken,$data['fname']);
                        $info['mail_msg'] ="We have sent an email with a confirmation link to your email address. In order to complete the sign-up process, please click the confirmation link.";
                        
                       
                        $this->view ->render('Mail_info');
                        #$this->view ->Success_post2($info['info_msg1']);
                        

                    }
                    //it mean there has a already registered account of relavant email.then redirect to login page
                    else{
                        $this->view ->render2('Login',$data['email']);
                    }


                
            }
            else {
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
               
                $this->view ->render2('Registration',$data);
            }
    
        }
    }
    
      
    

          //after user click on the link and varify token is valid then activate the account for that call to varify function in model
          public function  activation($email,$emailToken){

          
        
            $info['active_msg'] = $this->model->verifyemail_update($email,$emailToken);
           
          
            $this->view ->render('Success_post');

            }


            //js call to this and pass json array
            public function pass_msg( $info){
                echo json_encode(count( $info) == 0 ? null :  $info);
            }

            
 }
          

