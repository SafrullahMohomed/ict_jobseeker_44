<?php

class Sys_rate_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    //insert star count and review data into system_rate_review table
function insert_sys_data($count,$review){
   
    
    $User_ID = $_SESSION['User_ID'];

    $stmt1 = $this->db->prepare("INSERT INTO system_rate_review(System_rate_star_count,User_ID,System_rate_and_review_reviews)
    VALUES ( ?,?,?)");
 
    
    $stmt1->execute([$count,$User_ID,$review]);


}

function select_sys_rate_data(){
   
    $query1 ="  SELECT a.System_rate_star_count, a.System_rate_and_review_reviews, a.review_date,
     b.First_name,b.Last_name,b.Profile_picture
    FROM system_rate_review a, user b
    WHERE a.User_ID=b.User_ID";

    $stmt1=$this->db->prepare($query1);

    $stmt1->execute();
    $s=$stmt1->fetchAll();
   


    return $s;
   
   } 
   function select_tot_rate(){
    $query1 ="SELECT COUNT(*) AS value_count
              FROM system_rate_review";
     $stmt1=$this->db->prepare($query1);
     $stmt1->execute();
     $s1 = $stmt1->fetch(PDO::FETCH_ASSOC);
     $count = $s1['value_count'];
     
      $query2 ="SELECT  SUM(System_rate_star_count) AS value_sum
      FROM system_rate_review";
      $stmt2=$this->db->prepare($query2);
      $stmt2->execute();
      $s2 = $stmt2->fetch(PDO::FETCH_ASSOC);
      $sum = $s2['value_sum'];

      $s3= $sum /$count;

      $data['count'] = $count;;
      $data['avg'] = $s3;
      return  $data;         
   }
   
}



?>