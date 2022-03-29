<?php

class Counsellor_account_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_counsellor_data_m($ID)
    {
        $sql = "SELECT user.User_ID, Email, First_name, Last_name, Phone_number, Address, City, Facebook, Linkedin, Twitter, Profile_picture, Description,  Counsellor_provide_mock_interviews, Qualifications\n"

            . "\n"

            . "            FROM user\n"

            . "            JOIN counsellor ON user.User_ID = counsellor.User_ID\n"

            . "            WHERE user.User_ID = " . $ID . ";";

        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function update_counsellor_data_m($data, $ID)
    {

        $sql1 = "UPDATE `counsellor`, `user` SET user.Email= '" . $data['email'] . "', user.First_name= '" . $data['firstName'] . "', user.Last_name= '" . $data['lastName'] . "', user.Phone_number= '" . $data['phoneNumber'] . "', user.Address= '" . $data['address'] . "', user.Profile_picture= '" . $data['profilePicture'] . "', user.Description= '" . $data['description'] . "', counsellor.City = '" . $data['city'] . "', counsellor.Facebook = '" . $data['facebook'] . "', counsellor.Linkedin= '" . $data['linkedin'] . "', counsellor.Twitter= '" . $data['twitter'] ."', counsellor.Qualifications= '" . $data['qualification_box'] . "', counsellor.Counsellor_provide_mock_interviews= '" . $data['result_mi'] . "' WHERE user.User_ID = counsellor.User_ID AND user.User_ID=" . $ID . ";";
//        return $sql1;


        $statement = $this->db->prepare($sql1);
        $statement->execute();
//        return $statement->fetch(PDO::FETCH_OBJ);

    }
}
