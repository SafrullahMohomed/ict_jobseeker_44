<?php

class Login_Model extends Model
{
    function __construct()
    {
       parent :: __construct(); 
    }

    public function isRegisteredUser($email) {
        $query = "SELECT * FROM user WHERE email = '$email'";
    
        $row = $this->db->runQuery($query);
       
        if(count($row)) 
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    //Login a user
    public function login($email, $password) {
        $query = "SELECT * FROM user WHERE email = '$email'";
        // $row = $this->db->runQuery($query);
        $row= $this->db->runQuery_single($query);
        
        // $hashed_password = $row[0]['password'];
        $hashed_password = $row->Password;

        if(password_verify($password, $hashed_password)) 
        {
            return $row;
        }
        else 
        {
            return false;
        }
    }
    public function check_verification($email)
  {
    $query = "SELECT Email_varify_token	 FROM user WHERE email = '$email'";
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

   
}



?>