<?php
class Login extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }
    function Login()
    {
      $data = [
        // 'email' => trim($_POST['email']),
        // 'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',
      ];
        //pass view name
        $this->view ->render2('Login',$data); 
        
    }
    public function UserAuthentication()
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => '',
        ];
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
        
        //Validate password
        if(empty($data['password'])) 
        {
            $data['password_err'] = "Please enter the password";
        }
       
        //Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])) {
          //Validated
          //Check and set logged in user
          
          $loggedInUser = $this->model->login($data['email'], $data['password']);
          //Password is matched then pass result row(output of login) to createUserSession
          if($loggedInUser) 
          {
            if (!$this->model->check_verification($data['email']))
              {
                  // echo "Not Activate";
                // redirect('login/verifyEmail');
                  // render(jobs/Mail-info)
              } 
            else 
              {
                  //Create Session
                $this->createUserSession($loggedInUser);
              }
              
              
              
          }
          //Password is not matched 
          else 
          {
              $data['password_err'] = "Password incorrect"; 
              $this->view ->render2('Login', $data);
          }
        }
        else 
        {
          $this->view ->render2('Login', $data);
        }
      }
      else {
        // Init data
        $data =[    
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',
        ];

        // Load view
        $this->view ->render2('Login', $data);
      }
    }

   public function createUserSession($user) {
         #session_start();
      $_SESSION['User_ID'] = $user->User_ID;
      $_SESSION['User_type'] = str_replace("_", "", $user->User_type);
      $_SESSION['Email'] = $user->Email;
      $_SESSION['First_name'] = $user->First_name;
      $_SESSION['Last_name'] = $user->Last_name;
      // $_SESSION['address'] = $user[0]['address'];
      
      $this->view ->render('Home'); 
  }

  public function logout() {
      session_start();
      unset($_SESSION['User_ID']);
      unset($_SESSION['User_type']);
      unset($_SESSION['Email']);
      unset($_SESSION['First_name']);
          
      session_destroy();
      $this->view ->render('Home'); 
     # redirect('login');
  }

    public function isLoggedIn()
   {
      if(isset($_SESSION['User_ID'])) {
          return true;
      }else {
          return false;
      }
  }
     
}