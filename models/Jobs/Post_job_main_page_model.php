<?php

class Post_job_main_page_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    function get_reg_date(){
        $query1 ="SELECT Created_at FROM user WHERE User_ID=133" ;
        
        //$query1 ="SELECT Created_at FROM user WHERE User_ID=$_SESSION['User_ID']" ;
        $stmt1=$this->db->prepare($query1);
        $stmt1->execute();
        $s1=$stmt1->fetch();
       //$query2="SELECT STR_TO_DATE($s1, '%M %d %Y');";
       //$stmt2=$this->db->prepare($query2);
      // $stmt2->execute();
      //  $s2=$stmt2->fetch();
        
        return $s1;

    }
    
    function get_job_count(){
       //$query1 ="SELECT COUNT(Job_ID) FROM job WHERE User_ID=133" ;
        $query1 ="SELECT COUNT(Job_ID) FROM job WHERE User_ID=$_SESSION['User_ID']" ;
        $stmt1=$this->db->prepare($query1);
        $stmt1->execute();
        $s=$stmt1->fetch();
      
        return $s;
 

    }
}






?>