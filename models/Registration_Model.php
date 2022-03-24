<?php
/* Namespace alias. */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */

require 'vendor/autoload.php';


class Registration_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function  sendMail($email, $emailToken, $fname)
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
            $message .= '<h1>Hi ' . $fname . '!</h1>';
            $message .= '<p>Welcome to ICT Jobseeker</p>';
            $message .= '<p><a href="' . URL . 'Registration/activation' . '/' . $email . '/' . $emailToken . '">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
            $message .= "</body></html>";


            /* Set the mail sender. */
            $mail->setFrom('secondyeargroupproject44@gmail.com', 'ICT Jobseeker');

            /* Add a recipient. */
            //$mail->addAddress($email, 'username');
            $mail->addAddress($email, 'username', 0);

            /* Set the subject. */
            $mail->Subject = 'ICT Jobseeker varify your email';

            /* Set the mail message body. */
            //$mail->Body =  $message;
            $mail->MsgHTML($message);
            /* Finally send the mail. */
            $mail->send();
        } catch (Exception $e) {
            /* PHPMailer exception. */
            echo $e->errorMessage();
        } catch (\Exception $e) {
            /* PHP exception (note the backslash to select the global namespace Exception class). */
            //echo $e->getMessage();
        }
    }
    //  verifyemail_update($_SESSION['email'],$emailToken)
    public function verifyemail_update($email, $emailToken)
    {

        $query = "SELECT Email_varify_token	 FROM user WHERE email = '$email'";
        $result = $this->db->runQuery_single($query);



        try {


            if ($result->Email_varify_token == -1) {

                $msg = "Your account has already been activated.";
                return $msg;
            } else {
                if ($emailToken == $result->Email_varify_token) {

                    $query = "UPDATE user SET Email_varify=1, Email_varify_token=-1 WHERE email='$email'";
                    $this->db->runQuery($query);
                    $msg = "Your account has been activated.";

                    return $msg;
                } else {
                    $msg = "No account found";
                    return $msg;
                }
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    //one email account can has one account.if there has a another account using that email select that user details
    public function isRegisteredUser($email)
    {
        $query = "SELECT * FROM user WHERE email = '$email'";

        $row = $this->db->runQuery($query);

        if (count($row)) {

            return true;
        } else {

            return false;
        }
    }

    //insert user data when registration

    public function insert_reg_data($data,  $emailToken)
    {

        return $this->db->run_insert_reg_data($data,  $emailToken);
    }
}
