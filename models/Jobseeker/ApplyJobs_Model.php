<?php

class ApplyJobs_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

   

    function getJobData($User_ID)
    {
        $query1="SELECT First_name, Last_name, Email, Phone_number FROM user WHERE User_ID=$User_ID";
        $stmt1=$this->db->prepare($query1);
        $stmt1->execute();
        $result= $stmt1->fetch();

        return $result;
    }

    function insertJobData_m($Job_ID)
    {
      //select company id from jobs table
      $query1="SELECT User_ID FROM job WHERE Job_ID=$Job_ID";
     $stmt1=$this->db->prepare($query1);   
     $stmt1->execute();
     $Company_ID=$stmt1->fetch();


        $JobseekerID=$_SESSION['User_ID'];
        $First_name=$_POST['fname'];
        $Last_name=$_POST['lname'];
        $Email=$_POST['email'];
        $Phone_number=$_POST['phonenumber'];
        $Message=$_POST['Message'];
         try
         {
           $sql= "INSERT INTO apply (Jobseeker_ID,Company_ID ,Job_ID,First_name, Last_name, Email, Phone_number, Message) VALUES (?,?,?,?,?,?,?,?) ";
             
           $stmt=$this->db->prepare($sql);
          $stmt->execute([$JobseekerID,$Company_ID['User_ID'],$Job_ID,$First_name,$Last_name,$Email,$Phone_number,$Message]);
 
           echo "Successfully inserted"  ;
         }
         catch(Exception $e)
         {
             echo "message $e->getMessage()";
         }
       
      
    
    
       }
}
//     function get_jobseeker_data_m($ID)
//     {
//         $sql = "SELECT user.User_ID, Email, First_name, Last_name, Phone_number, Address, Jobseeker_In, Jobseeker_Twitter, Jobseeker_Fb, Jobseeker_Web, Profile_picture, Description, Gender, Age, Applied_jobs_count, Applied_contracts_count, Jobseeker_rate_total_star_count, Jobseeker_rate_and_review_count \n"

//             . "\n"

//             . "            FROM user\n"

//             . "            JOIN jobseeker ON user.User_ID = jobseeker.User_ID\n"

//             . "            WHERE user.User_ID = " . $ID . ";";

//         $statement = $this->db->prepare($sql);
//         $statement->execute();
//         return $statement->fetch(PDO::FETCH_ASSOC);
//     }


//     function update_jobseeker_data_m($data, $ID)
//     {
//         // print_r($data);
//         $sql1 = "UPDATE `jobseeker`, `user` SET user.Email= '" . $data['email'] . "', user.First_name= '" . $data['fname'] . "', user.Last_name= '" . $data['lname'] . "', user.Phone_number= '" . $data['phone_number'] . "', user.Address= '" . $data['address'] . "', user.Profile_picture= '" . $data['profile_pic'] . "', user.Description= '" . $data['brief_description'] . "', jobseeker.Experience= '" . $data['experience'] . "', jobseeker.Skills= '" . $data['skills'] . "', jobseeker.Education = '" . $data['education'] . "', jobseeker.Age = '" . $data['age'] . "', jobseeker.Jobseeker_In = '" . $data['linkedin_url'] . "', jobseeker.Jobseeker_Fb= '" . $data['fb_url'] ."', jobseeker.Jobseeker_Twitter= '" . $data['twitter_url'] . "', jobseeker.Jobseeker_Web= '" . $data['web_url'] . "'  WHERE user.User_ID = jobseeker.User_ID AND user.User_ID=" . $ID . ";";
// //        return $sql1;

//         $statement = $this->db->prepare($sql1);
//         $statement->execute();
// //        return $statement->fetch(PDO::FETCH_OBJ);

//     }

   


?>