<?php

class Post_job_Model extends Model{
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
    public function insert_query_post_job($data){
        $Company_name = $_POST['Company_name'];
        $Job_Title = $_POST['Job_Title'];
        $Job_Category_ID = $_POST['Job_Category'];
        $Brief_Description = $_POST['Brief_Description'];
        $Job_Type = $_POST['Job_Type'];
        $Sallary_Offered = $_POST['Sallary_Offered'];
        $City = $_POST['City'];
        $Phone_Number = $_POST['Phone_Number'];
        $Email = $_POST['Email'];
        $Deadline = $_POST['Deadline'];

      //  $Company_Logo = $data['Company_logo'];
       // $Job_image = $_POST['Job_image'];
        //$Urgent_answer = $_POST['Urgent_answer'];
        $Supply_Mock_Interviews_answer = $_POST['Supply_Mock_Interviews_answer'];
        $Post_a_forum_answer = $_POST['Post_a_forum_answer'];
        
try{
      // $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      // $this->db->beginTransaction();
      
        //insert data into job table when post a job
        $query1="INSERT INTO job (User_ID,JobCategory_ID,Job_type,Job_title,Job_deadline,Job_salary,
        Job_provide_mock_interviews,Job_city,Job_description,Job_forum,Job_phone_no)
        VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt1=$this->db->prepare($query1);

        $stmt1->execute([$_SESSION['User_ID'],$Job_Category_ID, $Job_Type,$Job_Title,$Deadline,$Sallary_Offered,$Supply_Mock_Interviews_answer,$City, $Brief_Description,$Post_a_forum_answer,$Phone_Number]);

        $Job_ID = $this->db->lastInsertId();

        //insert data into post table and make a relation
        $query2="INSERT INTO post (User_ID ,Job_ID,Payment_ID)
        VALUES (?,?,?)";
        $stmt2=$this->db->prepare($query2);
        //at this point intial 6  months are free for posting jobs.therefore i add payement ID as 1 here.
        $stmt2->execute([$_SESSION['User_ID'], $Job_ID,1]);

        /*$query3="UPDATE user SET Profile_picture=$Company_Logo";
        $this->db->prepare($query3);
        $this->db->execute();*/

        //update company name of company profile as new name 
        try{
            $query4="UPDATE company SET Company_name= $Company_name WHERE User_ID = $_SESSION[User_ID]";
            $stmt4=$this->db->prepare($query4);
            $stmt4->execute();
        }
        catch(PDOException $e) {
            echo $query4 . "<br>" . $e->getMessage();
          }
          
        

        //insert job categorey data
        $query5="UPDATE jobcategory SET JobCategory_count= JobCategory_count+1 WHERE JobCategory_ID =  $Job_Category_ID";
        $stmt5=$this->db->prepare($query4);
        $stmt5->execute();

}
      // $this->db->commit();
catch(Exception $e){

        // $this->db->rollback();
        echo "Failed".$e->getMessage();

}
    
   


    }




    
}






?>