<?php

class ResetPassword_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

     //  verifyemail_update($_SESSION['email'],$emailToken)
    public function verifyemail_update($email,$passwordToken)
    {
        
        $query = "SELECT Password_verify_token,Password_expires_at FROM user WHERE email = '$email'";
        $result= $this->db->runQuery_single($query);
    
        try {
            
            date_default_timezone_set('Asia/Kolkata');
            $current_time=time();
            $current_date_time=date('Y-m-d H:i:s',$current_time);
            echo $current_date_time;
            echo $result->Password_expires_at;
            if(($passwordToken==$result->Password_verify_token) && (strtotime($result->Password_expires_at)>strtotime($current_time))){
                        
                $query = "UPDATE user SET Password_verify_token=null,Password_expires_at=null WHERE email='$email'";
                $this->db->runQuery($query);
                $msg = "You can reset your password.";
                
                return $msg;
            
            }
            else
            {
                $msg = "Your Password Token Is Invalid Or Password Token Is Expired";
                return $msg; 
            }
    
            
            

        }
        catch (Exception $ex) {
            echo $ex->getMessage();
            }

                    
    }
    // public function update_password($data,$_SESSION['email'] )
    // {
    //     return $this->db-> run_update_password($data,$_SESSION['email'] );
    // }
    function  update_password($data,$email)
    {
        $password=$data['password'];
        
        echo $password;
        echo $email;

        $query = "UPDATE user SET Password='$password' WHERE email='$email'";
        $this->db->runQuery($query);
    

        
    }
}




?>