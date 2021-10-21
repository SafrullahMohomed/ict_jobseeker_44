<?php

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
            echo $user_type;
          
            $query = "UPDATE user SET fname='$fname', lname='$lname', verify='$verify', password='$password' WHERE email='$email'";
            switch($user_type) {
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
                    
            }
            $this->db->runQuery($query);
            $this->db->runQuery($queryUser);
        }
    }   
        
    public function isRegisteredUser($email) {
        $emailToken = openssl_random_pseudo_bytes(16);
        $emailToken = bin2hex($emailToken);
        $query = "SELECT * FROM user WHERE email = '$email' AND verify = 1";
    
        $row = $this->db->runQuery($query);
    
        if(count($row)) {
            return true;
        }else {
            return false;
        }
    }
    public function verifyemail($email,$token)
    {
        $query = "SELECT emailToken FROM user WHERE email = '$email'";
        echo "verifyemail";
        if(emailToken==$token)
        {
            $query = "UPDATE user SET emailVerified=true, emailToken=1 WHERE email='$email'";
        }
        
    }
    public function findUser($email) {
        $query = "SELECT * FROM user WHERE email = '$email'";
    
        $row = $this->db->runQuery($query);
        echo "JobSeeker";
        if(count($row)) {
            echo "row";
            return true;
        }else {
            echo "row";
            return false;
        }
    }
   
    
}
     


