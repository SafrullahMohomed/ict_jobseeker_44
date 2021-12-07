<?php

class View_job_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    //select relavent job data and company data from database (job ,post,company,user table)
    function select_job_data($Job_ID){

      /* $query1 ="  SELECT a.Company_name, a.Job_type, a.Job_title,
        a.Job_deadline,a.Job_provide_mock_interviews,a.Job_description,a.Job_image,
        b.Email,a.Job_phone_no,b.Profile_picture
       FROM job a, user b,post c
       WHERE a.Job_ID=$Job_ID AND c.User_ID=b.User_ID";*/
       $query1 ="  SELECT a.Company_name, a.Job_type, a.Job_title,
        a.Job_deadline,a.Job_provide_mock_interviews,a.Job_description,a.Job_image,
        b.Email,a.Job_phone_no,b.Profile_picture,d.Company_facebook,d.Company_twitter,d.Company_LinkedIn,b.User_ID
       FROM job a, user b,post c,company d
       WHERE a.Job_ID=$Job_ID AND c.User_ID=b.User_ID AND c.User_ID=d.User_ID" ;
   
       $stmt1=$this->db->prepare($query1);
   
       $stmt1->execute();
       $s=$stmt1->fetch();
      
  
   
       return $s;


    }

    
    
}






?>