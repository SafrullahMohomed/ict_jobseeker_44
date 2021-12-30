<?php

class Counsellor_profile_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_counsellor_data_m($ID)
    {
        $sql = "SELECT user.User_ID, Email, First_name, Last_name, Phone_number, Address, City, Facebook, Linkedin, Twitter, Profile_picture, Description,  Counsellor_provide_mock_interviews\n"

            . "\n"

            . "            FROM user\n"

            . "            JOIN counsellor ON user.User_ID = counsellor.User_ID\n"

            . "            WHERE user.User_ID = " . $ID . ";";

        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
}
