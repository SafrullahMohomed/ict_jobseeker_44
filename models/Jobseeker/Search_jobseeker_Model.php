<?php

class Search_jobseeker_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }
    function Search_jobseeker_for_job_m($Job_ID){

       
        $query1=" SELECT Jobseeker_ID,First_name,Last_name,Email FROM `apply` WHERE Job_ID=$Job_ID";
        $stmt1=$this->db->prepare($query1);
        $stmt1->execute();
        $result= $stmt1->fetchAll();

        return $result;  
    }
   
}



?>