<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */  
require 'vendor/autoload.php';

class ForgotPassword_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    //one email account can has one account.if there has a another account using that email select that user details
    public function isRegisteredUser($email) {
        $query = "SELECT * FROM user WHERE email = '$email'";
    
        $row = $this->db->runQuery($query);
       
        if(count($row)) {
       
            return true;
        }else {
           
            return false;
        }
    }

    public function  sendMail($email,$passwordVerifyToken)
    {
                /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
        $mail = new PHPMailer(TRUE);
                
        //Enable SMTP debugging.but i disable it by putting zero here.if you want change zero to 3
        $mail->SMTPDebug = 0;                               
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();            
        //Set SMTP host name                          
        $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;                          
        //Provide username and password     
        $mail->Username = "secondyeargroupproject44@gmail.com";                 
        $mail->Password = "Second@44";                           
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";                           
        //Set TCP port to connect to
        $mail->Port = 587;

        /* Open the try/catch block. */
        try {
            $message = '<html><head>
            <title>Email Verification</title>
            </head>
            <body>';
            $message .= '<h1>Hello !</h1>';
            $message .='<p>You are receiving this email because we received a password reset request for your account.</p>';
            // $message .= '<p><a href="'.URL.'ForgotPassword/Reset'. '/'.$email.'/'. $passwordVerifyToken. '">CLICK HERE TO RESET YOUR PASSWORD</a>';
            $message .= '<p><a href="'.URL.'ResetPassword/ResetPassword'. '/'.$email.'/'. $passwordVerifyToken. '">CLICK HERE TO RESET YOUR PASSWORD</a>';
            $message .= "</body></html>";
         
                   
            /* Set the mail sender. */
            $mail->setFrom('secondyeargroupproject44@gmail.com', 'ICT Jobseeker');

            /* Add a recipient. */
            //$mail->addAddress($email, 'username');
            $mail->addAddress($email, 'username',0);

            /* Set the subject. */
            $mail->Subject = 'Email Verification To Reset Password ICT JobSeeker';

            /* Set the mail message body. */
            //$mail->Body =  $message;
            $mail->MsgHTML($message);
            /* Finally send the mail. */
            $mail->send();
            }
            catch (Exception $e)
            {
            /* PHPMailer exception. */
            echo $e->errorMessage();
            }
            catch (\Exception $e)
            {
            /* PHP exception (note the backslash to select the global namespace Exception class). */
        //echo $e->getMessage();
            }
    }
    public function check_verification($email)
    {
      $query = "SELECT Email_varify_token FROM user WHERE email = '$email'";
          $result= $this->db->runQuery_single($query);
            
                  
                  if ($result->Email_varify_token == -1) 
                  {
  
                      return true;
                  }
                  else
                  {
                      return false;
                  }
    }

    public function insert_password_data($data,  $passwordToken)
    {

        return $this->db-> run_insert_password_data($data,  $passwordToken);
       
    }
    
//      //  verifyemail_update($_SESSION['email'],$emailToken)
//   public function verifyemail_update($email,$passwordToken)
//   {
     
//       $query = "SELECT Password_verify_token,Password_expires_at FROM user WHERE email = '$email'";
//       $result= $this->db->runQuery_single($query);
   
//       try {
        
//         date_default_timezone_set('Asia/Kolkata');
//         $current_time=time();
//         $current_date_time=date('Y-m-d H:i:s',$current_time);
//         echo $current_date_time;
//         echo $result->Password_expires_at;
//         if(($passwordToken==$result->Password_verify_token) && (strtotime($result->Password_expires_at)>strtotime($current_time))){
                     
//             $query = "UPDATE user SET Password_verify_token=null,Password_expires_at=null WHERE email='$email'";
//             $this->db->runQuery($query);
//             $msg = "You can reset your password.";
            
//             return $msg;
           
//         }
//         else
//         {
//             $msg = "Your Password Token Is Invalid Or Password Token Is Expired";
//             return $msg; 
//         }
  
          
          

//       }
//       catch (Exception $ex) {
//           echo $ex->getMessage();
//         }

                  
//   }
  

    

    
}






?>