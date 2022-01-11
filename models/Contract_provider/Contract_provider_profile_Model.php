<?php

class Contract_provider_profile_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }
    function  select_cp_data($User_ID){

        $query1="SELECT a.Website_url,a.Fb_url, a.Twitter_url,
        a.Linkedin_url,
       b.First_name,b.Last_name, b.Email,b.Phone_number,b.Address,
       b.Profile_picture,b.Description
        FROM contractprovider a,user b
        WHERE a.User_ID=$User_ID AND a.User_ID=b.User_ID";
   
   
       $stmt1=$this->db->prepare($query1);   
       $stmt1->execute();
       $s=$stmt1->fetch();
   
        return $s;

    }
     //insert star count and review data into system_rate_review table
function insert_cp_review_data($count,$review){
   
    
    $User_ID = $_SESSION['User_ID'];

    $stmt1 = $this->db->prepare("INSERT INTO system_rate_review(System_rate_star_count,User_ID,System_rate_and_review_reviews)
    VALUES ( ?,?,?)");
 
    
    $stmt1->execute([$count,$User_ID,$review]);


}
    
}






?>