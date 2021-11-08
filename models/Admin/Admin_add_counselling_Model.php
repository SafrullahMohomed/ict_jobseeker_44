<?php

class Admin_add_counselling_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }


    //    function for check isregistered user
//one email account can has one account.if there has a another account using that email select that user details
    public function isRegisteredUser($email)
    {
        $query = "SELECT * FROM user WHERE email = '$email'";

        $row = $this->db->runQuery($query);

        if (count($row)) {

            return true;
        } else {

            return false;
        }
    }


//    add counselling function
    function add_counsellor($data)
    {
        date_default_timezone_set("Asia/Colombo");
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $email = $data['email'];
        $password = $data['password'];
        $phoneNumber = $data['phoneNumber'];
        $address = $data['address'];
        $city = $data['city'];
//        $qualification = $data['qualification'];
        $facebook = $data['facebook'];
        $aboutYou = $data['aboutYou'];
        $linkedin = $data['linkedin'];
        $twitter = $data['twitter'];
        $provideMi = $data['provideMi'];
        $adminApprove = $data['adminApprove'];
        $Created_at = date("Y-m-d H:i:s");


//            insert data for the user
        try {


            $sqlUser = "INSERT INTO user (Password,Email, First_name, Last_name, Phone_number, Address, User_type, Description, Created_at, Email_varify, Email_varify_token) VALUES (?,?,?,?,?,?,'Counsellor',?,?,'1','-1');";

            $stmtUser = $this->db->prepare($sqlUser);


            $stmtUser->execute([$password, $email, $firstName, $lastName,$phoneNumber, $address, $aboutYou, $Created_at]);

            $sqlCounsellor = "INSERT INTO counsellor (User_ID, City, Facebook, Linkedin, Twitter, Counsellor_provide_mock_interviews, Approve_registration_status) VALUES (?,?,?,?,?,?,?)";

            $stmtCounsellor  = $this->db->prepare($sqlCounsellor);

//            to get the last inserted ID
            $id = $this->db->lastInsertId();
            $x = $stmtCounsellor->execute([$id, $city, $facebook, $linkedin, $twitter, $provideMi, $adminApprove]);
            echo "executed message $x";

        } catch (Exception $e) {

            echo "Message : $e";

        }
    }


}

