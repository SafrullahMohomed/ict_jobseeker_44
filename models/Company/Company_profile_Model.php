<?php

class Company_profile_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    function  select_company_data($User_ID){

        $query1="SELECT a.Company_name,a.Company_website,a.Company_facebook, a.Company_twitter,
        a.Company_LinkedIn, a.Company_short_intro_video,a.Company_posted_job_count,
        b.Email,b.Phone_number,b.Address,b.Profile_picture,b.Description
        FROM company a,user b
        WHERE a.User_ID=$User_ID AND a.User_ID=b.User_ID";
   
   
       $stmt1=$this->db->prepare($query1);   
       $stmt1->execute();
       $s=$stmt1->fetch();
   
        return $s;

    }
}



?>