<?php

class Edit_job_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

//get company name from database
public function getCompanyName($User_ID){
    $query1="SELECT Company_name
    FROM company 
    WHERE User_ID=$User_ID";

 
   $stmt1=$this->db->prepare($query1);   
   $stmt1->execute();
   $s=$stmt1->fetch();

    return $s['Company_name'];

}

//load available ict job categories from database
public function getJobCategory(){
    $query1="SELECT JobCategory_ID,JobCategory_name
    FROM jobcategory ";

    $s=$this->db->runQuery($query1);   
    return $s;
}



    //insert job post data to jobs table in the database
    public function update_query_post_job($Job_ID){

        $Company_name = $_SESSION['Company_name'];
        $Job_Title = $_SESSION['Job_Title'];
        $Job_Category_ID = $_SESSION['Job_Category'];
        $Brief_Description = $_SESSION['Brief_Description'];
        $Job_Type = $_SESSION['Job_Type'];
        $Sallary_Offered = $_SESSION['Sallary_Offered'];
        $City = $_SESSION['City'];
        $Phone_Number = $_SESSION['Phone_Number'];
        $Email = $_SESSION['Email'];
        $Deadline = $_SESSION['Deadline'];

      //  $Company_Logo = $_SESSION['Company_logo'];
       // $Job_image = $_SESSION['Job_image'];
        //$Urgent_answer = $_SESSION['Urgent_answer'];
        $Supply_Mock_Interviews_answer = $_SESSION['Supply_Mock_Interviews_answer'];
        $Post_a_forum_answer = $_SESSION['Post_a_forum_answer'];

     /*  $Company_name = trim($_POST['Company_name']);
        $Job_Title = trim($_POST['Job_Title']);
        $Job_Category_ID = trim($_POST['Job_Category']);
        $Brief_Description =  trim($_POST['Brief_Description']);
        $Job_Type = trim($_POST['Job_Type']);
        $Sallary_Offered = trim($_POST['Sallary_Offered']);
        $City = trim($_POST['City']);
        $Phone_Number = trim($_POST['Phone_Number']);
        $Email = trim($_POST['Email']);
        $Deadline = trim($_POST['Deadline']);
        $Supply_Mock_Interviews_answer = trim($_POST['Supply_Mock_Interviews_answer']);
        $Post_a_forum_answer = trim($_POST['Post_a_forum_answer']);*/
        
try{
         //select job categoryid old and compare if it is change then update job category count
       $query1 ="SELECT JobCategory_ID FROM job WHERE Job_ID= $Job_ID" ;
       $stmt1=$this->db->prepare($query1);
       $stmt1->execute();
       $s1=$stmt1->fetch();
       if($s1!=$Job_Category_ID){
            //insert job categorey data
        $query2="UPDATE jobcategory SET JobCategory_count= JobCategory_count-1 WHERE JobCategory_ID =  $s1";
        $this->db->runQuery($query2);
        //insert job categorey data
        $query3="UPDATE jobcategory SET JobCategory_count= JobCategory_count+1 WHERE JobCategory_ID =  $Job_Category_ID";
        $this->db->runQuery($query3);
       }

        $User_ID= $_SESSION['User_ID'];
        //update company name of company profile as new name 
        $query4="UPDATE company SET Company_name='$Company_name',Company_posted_job_count=Company_posted_job_count+1 WHERE User_ID = $User_ID";     
        $this->db->runQuery($query4);
    

       //update job data when editing
       $query5="UPDATE job SET JobCategory_ID='$JobCategory_ID',Job_type='$Job_type',Job_title='$Job_title',
       Job_deadline='$Job_deadline',Job_salary=$Job_salary,
       Job_provide_mock_interviews='$Job_provide_mock_interviews',Job_city='$Job_city',
       Job_description='$Job_description',Job_forum='$Job_forum',Job_phone_no='$Job_phone_no' 
       WHERE Job_ID = $Job_ID";     
       $this->db->runQuery($query5);

      
        

       
        /*$stmt5=$this->db->prepare($query4);
        $stmt5->execute();*/

}
      // $this->db->commit();
catch(Exception $e){

        // $this->db->rollback();
        echo "Failed".$e->getMessage();

}
    
   


    }

    function get_reg_date(){
        $User_ID=$_SESSION['User_ID'];
        $query1 ="SELECT Created_at FROM user WHERE User_ID= $User_ID" ;
        
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
        $User_ID= $_SESSION['User_ID'];
       //$query1 ="SELECT COUNT(Job_ID) FROM job WHERE User_ID=133" ;
      $query1 ="SELECT COUNT(Job_ID) FROM job WHERE User_ID= $User_ID";
        $stmt1=$this->db->prepare($query1);
        $stmt1->execute();
        $s=$stmt1->fetch();
        
        return $s;
 

    }

    //get posted job data when edit job auto loading
    function autoload_job($Job_ID){
        $query1 ="  SELECT a.Job_ID ,d.Company_name, a.Job_type, a.Job_title, a.Job_deadline,
       a.Job_provide_mock_interviews,a.Job_salary,a.Job_city,
       a.Job_description,a.Job_image, b.Email,a.Job_phone_no,b.Profile_picture,
       d.Company_facebook,d.Company_twitter,d.Company_LinkedIn,b.User_ID
       FROM job a, user b,post c,company d 
       WHERE a.Job_ID=$Job_ID AND a.Job_ID = c.Job_ID AND c.User_ID=b.User_ID AND c.User_ID=d.User_ID 
       AND a.User_ID=d.User_ID AND a.User_ID=b.User_ID" ;
       
       $stmt1=$this->db->prepare($query1);
   
       $stmt1->execute();
       $s=$stmt1->fetch();
      
  
   
       return $s;
    }


    
}






?>