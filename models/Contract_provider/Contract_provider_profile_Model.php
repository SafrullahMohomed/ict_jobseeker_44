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
function insert_cp_review_data($User_ID_CP,$count,$review){
  
    
    $User_ID_JS = $_SESSION['User_ID'];
   
    $stmt1 = $this->db->prepare("INSERT INTO `js_rate_cp` (`User_ID(CP)`, `User_ID(JS)`, `Star_count`, `Review`)
     VALUES (?, ?, ?, ?);");
 
    $stmt1->execute([$User_ID_CP,$User_ID_JS,$count,$review]);


}

//select cp rate data from database
function select_cp_rate_data($User_ID) {
    $query1="SELECT a.Star_count,a.Review_date,a.Review,b.First_name,b.Last_name
    FROM js_rate_cp a,user b
    WHERE a.`User_ID(CP)`=$User_ID AND a.`User_ID(CP)`=b.User_ID";


   $stmt1=$this->db->prepare($query1);   
   $stmt1->execute();
   $s=$stmt1->fetchAll();

    return $s;   
}  
}






?>