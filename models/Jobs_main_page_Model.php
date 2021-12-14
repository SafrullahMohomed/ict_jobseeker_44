<?php

class Jobs_main_page_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }


function select_query_job_data(){

     $query1="SELECT  	Job_ID,Job_title, Job_category,
     Job_type, 	Job_deadline,Job_city,Urgent,Company_name
     FROM job";


    $stmt1=$this->db->prepare($query1);   
    $stmt1->execute();
    $s=$stmt1->fetchAll();
    
     return $s;


}

   
}



?>