<?php

class Post_job_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

    //insert job post data to jobs table in the database
    public function insert_query_post_job($data){
        $Company_name = $_POST['Company_name'];
        $Job_Title = $_POST['Job_Title'];
        $Job_Category = $_POST['Job_Category'];
        $Brief_Description = $_POST['Brief_Description'];
        $Job_Type = $_POST['Job_Type'];
        $Sallary_Offered = $_POST['Sallary_Offered'];
        $City = $_POST['City'];
        $Phone_Number = $_POST['Phone_Number'];
        $Email = $_POST['Email'];
        $Deadline = $_POST['Deadline'];
        $Company_Logo = $data['Company_logo'];
        $Job_image = $_POST['Job_image'];
        //$Urgent_answer = $_POST['Urgent_answer'];
        $Supply_Mock_Interviews_answer = $_POST['Supply_Mock_Interviews_answer'];
        $Post_a_forum_answer = $_POST['Post_a_forum_answer'];
        
try{
      // $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      // $this->db->beginTransaction();
      
        //insert data into job table when post a job
        $query1="INSERT INTO job (Job_category,Job_type,Job_title,Job_deadline,Job_salary,Job_provide_mock_interviews,Job_city,Job_description,Job_forum,Company_name,Job_phone_no)
        VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt1=$this->db->prepare($query1);

        $stmt1->execute([$Job_Category, $Job_Type,$Job_Title,$Deadline,$Sallary_Offered,$Supply_Mock_Interviews_answer,$City, $Brief_Description,$Post_a_forum_answer,$Company_name,$Phone_Number]);

        $Job_ID = $this->db->lastInsertId();

        //insert data into post table and make a relation
        $query2="INSERT INTO post (User_ID ,Job_ID,Payment_ID)
        VALUES (?,?,?)";
        $stmt2=$this->db->prepare($query2);
        //at this point intial 6  months are free for posting jobs.therefore i add payementid as 1 here.
        $stmt2->execute([$_SESSION['User_ID'], $Job_ID,1]);

        $query3="UPDATE user SET Profile_picture=$Company_Logo";
        $this->db->runQuery($query3);

}
      // $this->db->commit();
catch(Exception $e){

        // $this->db->rollback();
        echo "Failed".$e->getMessage();

}
    
   


    }




    
}






?>