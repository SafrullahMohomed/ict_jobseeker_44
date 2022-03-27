<?php
class ResetPassword extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    // public function Reset($email,$passwordToken)
    // {


    //   $info['active_msg'] = $this->model->verifyemail_update($email,$passwordToken);
    //   $this->view ->render('ResetPassword'); 
    //   // $_SESSION['email'] = $email; 
      
    //   // ResettingPassword($email);
    //     // $data =['email' => $email];
      
        
    //     // echo $data['email'];
    //     // $this->view ->render('ResetPassword');
    //   }

    public function ResetPassword($email,$passwordToken)
    {
      $info['active_msg'] = $this->model->verifyemail_update($email,$passwordToken);  
      #$this->model->printSomething();
      #echo "Hello from the Test controller - Index Method";
      
        $data = [
            'password_err' => '',
            'confirmPassword_err' => '',
            'controller'=>'ResetPassword'
        ];
        $GLOBALS['email']=$email;
        // echo $email;
        //pass view name
        $this->view ->render2('ResetPassword',$data); 
        ResettingPassword($email);
    }
    public function ResettingPassword($email=null)
    {
      // var_dump($_POST);
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
          'password' => trim($_POST['password']),
          'confirmPassword' => trim($_POST['confirmPassword']),
          'password_err' => '',
          'confirmPassword_err' => '',
          'controller'=>'ResetPassword'
        ];
        //Validate password
        if(empty($data['password'])) 
        {
          $data['password_err'] = "Please enter the password";
        }
        elseif(strlen($data['password']) < 6) 
        {
          $data['password_err'] = "Please enter at least 6 characters";
        }
        //Validate Confirm password
        if(empty($data['confirmPassword'])) 
        {
          $data['confirmPassword_err'] = "Please confirm password";
        }
        elseif($data['password'] != $data['confirmPassword']) 
        {
          $data['confirmPassword_err'] = "Doesn't match with password";
        }
        if(empty($data['password_err']) && empty($data['confirmPassword_err']))
        {
          //Validated
          //Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          $this->model->update_password($data,$email);
          $this->view ->render('Success_post');
        }
      //   else
      //   {
      //     $this->view ->render2('Login',$data['email']);
      // }
      }
    }
    // public function changePassword($email,$data)
    // {
    //   $this->model->update_password($email,$data);
    //   $this->view ->render('Success_post');
    // }


}