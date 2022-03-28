<?php

class JobSeekerAccount_Model extends Model
{
    function __construct()
    {
       parent :: __construct(); 
    }

    function get_jobseeker_data_m($ID)
    {
        $sql = "SELECT user.User_ID, Email, First_name, Last_name, Phone_number, Address, Profile_picture, Jobseeker_In, Jobseeker_Twitter, Jobseeker_Fb, Jobseeker_Web, Profile_picture, Description, Skills, Education, Experience, Gender, Age, Applied_jobs_count, Applied_contracts_count, Jobseeker_rate_total_star_count, Jobseeker_rate_and_review_count \n"

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
        print_r($data);
        $sql1 = "UPDATE `jobseeker`, `user` SET user.Email= '" . $data['email'] . "', user.Profile_picture= '" . $data['profile_pic_name'] . "' , user.First_name= '" . $data['fname'] . "', user.Last_name= '" . $data['lname'] . "', user.Phone_number= '" . $data['phone_number'] . "', user.Address= '" . $data['address'] . "', user.Description= '" . $data['brief_description'] . "', jobseeker.Experience= '" . $data['experience'] . "', jobseeker.Skills= '" . $data['skills'] . "', jobseeker.Education = '" . $data['education'] . "', jobseeker.Age = '" . $data['age'] . "', jobseeker.Jobseeker_In = '" . $data['linkedin_url'] . "', jobseeker.Jobseeker_Fb= '" . $data['fb_url'] ."', jobseeker.Jobseeker_Twitter= '" . $data['twitter_url'] . "', jobseeker.Jobseeker_Web= '" . $data['web_url'] . "'  WHERE user.User_ID = jobseeker.User_ID AND user.User_ID=" . $ID . ";";
//        return $sql1;

        $statement = $this->db->prepare($sql1);
        $statement->execute();
//        return $statement->fetch(PDO::FETCH_OBJ);

    }

    //create jobseeker data insert to user and jobseeker table
    // function insert_jobseeker_data($data)
    // {
    //     //$profile_pic  =$data["profile_pic"];
    //     $fname = $data["fname"];
    //     $lname = $data["lname"];
    //     $email  =$data["email"];
    //     $gender  =$data["gender"];
    //     $age  =$data["age"];
    //     $phone_number  =$data["phone_number"];
    //     $address  =$data["address"];
    //     $brief_description  =$data["brief_description"];
    //     $linkedin_url  =$data["linkedin_url"];
    //     $fb_url  =$data["fb_url"];
    //     $twitter_url  =$data["twitter_url"];
    //     $web_url  =$data["web_url"];

    //     print_r($data);

    //     $query = "UPDATE user SET Phone_number= '$phone_number', Address= '$address', Description='$brief_description' WHERE email='$email'";
    //     $this->db->runQuery($query);
                        
    
    //     $User_ID = $_SESSION['User_ID'];
   
    //     //Insert data into jobseeker table  
    //     $stmt2 = $this->db->prepare("INSERT INTO jobseeker(User_ID,Age,Jobseeker_In,Jobseeker_Twitter,Jobseeker_Fb, Jobseeker_Web)
    //     VALUES ( ?,?,?,?,?,?)");

   
    //     $stmt2->execute([$User_ID, $age,$linkedin_url,$twitter_url,$fb_url,$web_url ]);
    // }
   
}



?>