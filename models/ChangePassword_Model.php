<?php

class ChangePassword_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    // compare current password and new password
    public function Verify_curr_password($CurrPassword)
    {
        // var_dump($_SESSION['Email'],$CurrPassword);
        $query = "SELECT Password FROM user WHERE email =" . $_SESSION['Email'] . "";
        $stmt1=$this->db->prepare($query);
        $stmt1->execute();
        $s=$stmt1->fetchAll();
      
        return $s;
   
        echo password_hash($CurrPassword, PASSWORD_DEFAULT);

        if($s->Password==password_hash($CurrPassword, PASSWORD_DEFAULT))
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }
    public function Update_password($NewPassword)
    {
        $query = "UPDATE user SET Password='$NewPassword' WHERE email =" . $_SESSION['Email'] . "";
        
        $this->db->runQuery($query);
    }
   
}




?>