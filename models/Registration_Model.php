<?php
/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */  
require 'vendor/autoload.php';


class Registration_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }
    public function checkUserByUserType($data) {
        $fname = $data['fname'];
        $lname = $data['lname'];
        $email = $data['email'];
        $password = $data['password'];
        $confirmPassword = $data['confirmPassword'];
        $verify = $data['verify'];
        $user_type = $data['user_type'];
        // $landowner_type = null;

        if($user_type && $verify != 0) {
          

          
            $query = "UPDATE user SET fname='$fname', lname='$lname', verify='$verify', password='$password' WHERE email='$email'";
          /*  switch($user_type) {
                case 'Jobseeker' :
                    $queryUser = "INSERT INTO jobseeker(User_ID) values('$User_ID')";
                  
                    break;
                
                case 'Admin' :
                    $queryUser = "INSERT INTO admin(User_ID) values('$User_ID')";
                    break;
                
                case 'Company' :
                    $queryUser = "INSERT INTO company(User_ID) values('$User_ID')";
                    break;

                case 'Contract provider' :
                    $queryUser = "INSERT INTO Contractprovider(User_ID) values('$User_ID')";
                    break;

                case 'Counsellor' :
                    $queryUser = "INSERT INTO counsellor(User_ID) values('$User_ID')";
                    break;
                    
            }*/
            $this->db->runQuery($query);
           // $this->db->runQuery($queryUser);
        }
    }   
        
  /*  public function create_token($email) {
        $emailToken = openssl_random_pseudo_bytes(16);
        $emailToken = bin2hex($emailToken);
       
    }
      */
    
    public function  sendMail($email,$emailToken,$fname)
    {
                /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
                $mail = new PHPMailer(TRUE);
                        
                //Enable SMTP debugging.
                $mail->SMTPDebug = 3;                               
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
            $message .= '<h1>Hi ' . $fname . '!</h1>';
            $message .= '<p><a href="<?php echo URL ?>/Registration/activate/$emailToken">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
            $message .= "</body></html>";
                    
                    //$mail->isSendMail();
                /* Set the mail sender. */
                $mail->setFrom('secondyeargroupproject44@gmail.com', 'ICT Jobseeker');

                /* Add a recipient. */
                //$mail->addAddress($email, 'username');
                $mail->addAddress($email, 'username',0);

                /* Set the subject. */
                $mail->Subject = 'ICT Jobseeker varify your email';

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
                echo $e->getMessage();
                }






    }
  /* public function verifyemail($email,$emailToken)
    {
       
        $query = "SELECT emailToken FROM user WHERE email = '$email'";
      
        if($emailToken==$token)
        {
            $query = "UPDATE user SET emailVerified=true, emailToken=1 WHERE email='$email'";
        }

        

                    
    }*/

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

    //insert user data when registration
    
    public function insert_reg_data($data,  $emailToken){
        return $this->db-> run_insert_reg_data($data,  $emailToken);
       
       }

}
     


 
    


