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
        $this->view ->render2('ForgotPassword'); 
        
    }

    public function ResetForgotPassword
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'email' => trim($_POST['email']),
                'controller' => 'ForgotPassword',
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
            if($this->model->isRegisteredUser($data['email']))
            {
                $emailToken = openssl_random_pseudo_bytes(16);
                $emailToken = bin2hex($emailToken);
                $_SESSION['emailToken'] =$emailToken ;
                $this->model->insert_reg_data($data,  $emailToken);
                $this->model->sendMail($data['email'],$emailToken,$data['fname']);
                $info['mail_msg'] ="We have sent an email with a confirmation link to your email address. In order to complete the sign-up process, please click the confirmation link.";
            
                $this->view ->render('Mail_info');
            }
        }
    }

    function forgetPassword() {
      if(isset($_POST['enter_btn'])) {
          $data = [
              'contact_number' => trim($_POST['contact_number']),
              'controller' => 'login'
          ];
          
          if($this->model->isRegisteredUser($data['contact_number'])) {
              // $otp = new OtpVerify;
              // $otp->otpSend($data);
              $_SESSION['contact_number'] = $data['contact_number'];
              $_SESSION['controller'] = $data['controller'];
              otpSend();
          }else {
              $this->view->render('User/forgetPassword/wrongNumber', $data);
          }
      }
      
      else {
          $this->view->render('User/forgetPassword/forgetPassword');
      }
  }


}