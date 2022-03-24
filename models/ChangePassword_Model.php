<?php

class ChangePassword_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    // compare current password and new password
    public function Verify_curr_password($CurrPassword)
    {
        // var_dump($_SESSION['Email']);
        $query = "SELECT Password FROM user WHERE email =" . $_SESSION['Email'] . "";
        $result= $this->db->runQuery_single($query);

        if($result->Password==$CurrPassword)
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