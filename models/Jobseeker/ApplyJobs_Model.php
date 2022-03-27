<?php

class ApplyJobs_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

   
}
    function get_jobseeker_data_m($ID)
    {
        $sql = "SELECT user.User_ID, Email, First_name, Last_name, Phone_number, Address, Jobseeker_In, Jobseeker_Twitter, Jobseeker_Fb, Jobseeker_Web, Profile_picture, Description, Gender, Age, Applied_jobs_count, Applied_contracts_count, Jobseeker_rate_total_star_count, Jobseeker_rate_and_review_count \n"

            . "\n"

            . "            FROM user\n"

            . "            JOIN jobseeker ON user.User_ID = jobseeker.User_ID\n"

            . "            WHERE user.User_ID = " . $ID . ";";

        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }


    function update_jobseeker_data_m($data, $ID)
    {
        // print_r($data);
        $sql1 = "UPDATE `jobseeker`, `user` SET user.Email= '" . $data['email'] . "', user.First_name= '" . $data['fname'] . "', user.Last_name= '" . $data['lname'] . "', user.Phone_number= '" . $data['phone_number'] . "', user.Address= '" . $data['address'] . "', user.Profile_picture= '" . $data['profile_pic'] . "', user.Description= '" . $data['brief_description'] . "', jobseeker.Experience= '" . $data['experience'] . "', jobseeker.Skills= '" . $data['skills'] . "', jobseeker.Education = '" . $data['education'] . "', jobseeker.Age = '" . $data['age'] . "', jobseeker.Jobseeker_In = '" . $data['linkedin_url'] . "', jobseeker.Jobseeker_Fb= '" . $data['fb_url'] ."', jobseeker.Jobseeker_Twitter= '" . $data['twitter_url'] . "', jobseeker.Jobseeker_Web= '" . $data['web_url'] . "'  WHERE user.User_ID = jobseeker.User_ID AND user.User_ID=" . $ID . ";";
//        return $sql1;

        $statement = $this->db->prepare($sql1);
        $statement->execute();
//        return $statement->fetch(PDO::FETCH_OBJ);

    }


?>