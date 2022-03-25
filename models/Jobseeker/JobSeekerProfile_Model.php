<?php

class JobSeekerProfile_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }


    function get_jobseeker_data_m($ID)
    {
        $sql = "SELECT user.User_ID, Email, First_name, Last_name, Phone_number, Address, Experience, Skills, Education, Jobseeker_In, Jobseeker_Twitter, Jobseeker_Fb, Jobseeker_Web, Profile_picture, Description, Gender, Age, Applied_jobs_count, Applied_contracts_count, Jobseeker_rate_total_star_count, Jobseeker_rate_and_review_count \n"

            . "\n"

            . "            FROM user\n"

            . "            JOIN jobseeker ON user.User_ID = jobseeker.User_ID \n"

            . "            WHERE user.User_ID = " . $ID . ";";

        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }


}



?>