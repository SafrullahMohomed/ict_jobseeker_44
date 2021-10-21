<?php

class Registration_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }
    public function Registration($data) {
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
            switch($user_type) {
                case 'JobSeeker' :
                    $queryUser = "INSERT INTO JobSeeker(emp_id) values('$user_id')";
                    break;
                
                case 'admin' :
                    $queryUser = "INSERT INTO admin(emp_id) values('$user_id')";
                    break;
                
                case 'company' :
                    $queryUser = "INSERT INTO manager(emp_id) values('$user_id')";
                    break;

                case 'contract_provider' :
                    $queryUser = "INSERT INTO product_manager(emp_id) values('$user_id')";
                    break;

                case 'counsellor' :
                    $queryUser = "INSERT INTO supervisor(emp_id) values('$user_id')";
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

        if(emailToken==$token)
        {
            $query = "UPDATE user SET emailVerified=true, emailToken=1 WHERE email='$email'";
        }
        
    }
    public function findUser($email) {
        $query = "SELECT * FROM user WHERE email = '$email'";
    
        $row = $this->db->runQuery($query);
    
        if(count($row)) {
            return true;
        }else {
            return false;
        }
    }
   
    
}
     


