<?php

class Contact_us_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    //Insert msg data to database
   function insert_msg_data($data)
   {
        $name=$data['name'];
        $email=$data['email'];
        $message=$data['message'];
        // $user=$_SESSION['User_ID'];
        
        try
        {
        $sql= "INSERT INTO inquiry (Inquiry,Inquiry_from,Inquiry_email_to) VALUES (?,?,?) ";
            
            $stmt=$this->db->prepare($sql);
            $stmt->execute([$message,$name,$email]);

        echo "Successfully inserted"  ;
        }
        catch(Exception $e)
        {
            echo "message $e->getMessage()";
        }
    }
}



?>