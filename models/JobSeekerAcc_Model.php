<?php

class JobSeekerAcc_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

   function run_insert_query($Phone_number, $Address,$Description,$Email)
   {
        try
        {
            // $sql= "INSERT INTO user (Phone_number,Address,Description) VALUES (?,?,?) ";
            $sql= "UPDATE 'user' SET 'Phone_number'=$Phone_number,'Address'=$Address, 'Description'=$Description WHERE 'Email'=$Email";
            $stmt=$this->db->prepare($sql);
            $stmt->execute([$Phone_number, $Address,$Description]);

            
        }
        catch(Exception $e)
        {
            echo "message $e->getMessage()";
        }
   }
}



?>

