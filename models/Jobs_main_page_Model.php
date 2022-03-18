<?php

class Jobs_main_page_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }


function select_query_job_data(){

     $query1="SELECT Job_ID,Job_title, Job_type, Job_deadline,Job_city,Company_name 
              FROM job ,company
              where job.User_ID =company.User_ID";


    $stmt1=$this->db->prepare($query1);   
    $stmt1->execute();
    $s=$stmt1->fetchAll();
    
     return $s;


}

   
}



?>