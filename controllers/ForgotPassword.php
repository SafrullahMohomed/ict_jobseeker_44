<?php
class ForgotPassword extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function ForgotPassword()
    {
        #$this->model->printSomething();
        
        #echo "Hello from the Test controller - Index Method";
        $data = ['email_err' => ''];

        //pass view name
        $this->view ->render2('ForgotPassword',$data); 
        
    }

    public function ResetForgotPassword()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'email' => trim($_POST['email']),
                'controller' => 'ForgotPassword',
                // 'password_verify' => '0',
                'email_err' => ''
            ];
        $_SESSION['email'] = $data['email'];
        if(empty($data['email'])) 
        {
          $data['email_err'] = "Please enter the email";
        }
        else
        {
          if(!$this->model->isRegisteredUser($data['email']))
          {
            $data['email_err'] = "User does not exist";
          }
        }
        if(empty($data['email_err']))
        {
            if($this->model->check_verification($data['email']))
            {
                $passwordToken = openssl_random_pseudo_bytes(16);
                $passwordToken = bin2hex($passwordToken);
                $_SESSION['passwordToken'] =$passwordToken ;
                $this->model->insert_password_data($data,  $passwordToken);
                $this->model->sendMail($data['email'],$passwordToken);
                $info['mail_msg'] ="We have sent an email with a confirmation link to your email address. In order to reset password, please click the confirmation link.";
            
                $this->view ->render('PasswordForgotEmail');
            }
            else
            {

            }
        }
        else
        {
            $this->view ->render2('ForgotPassword',$data);
        }
        }      
    }

    // public function  Reset($email,$passwordToken){

          
        
    //   $info['active_msg'] = $this->model->verifyemail_update($email,$passwordToken);
    //   $data =['email' => $email];
    
    //   $this->view ->render2('ResetPassword',$data['email']);
    //   echo $data['email'];
    //   // $this->view ->render('ResetPassword');
    //   }


}
