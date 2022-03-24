<?php

class Companies_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    function  select_company_data(){

       $query1="SELECT a.company_name,b.Profile_picture,b.User_ID
       FROM company a,user b
       WHERE a.User_ID=b.User_ID";

       $stmt1=$this->db->prepare($query1);   
       $stmt1->execute();
       $s=$stmt1->fetchAll();
    
       return $s;
    }
   
   
}



?>