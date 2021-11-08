<?php

class Manage_counselling_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function select_data_table()
    {
        $sql = "SELECT user.User_ID, Email, First_name, Last_name, Counsellor_provide_mock_interviews, Phone_number\n"

            . "                FROM user\n"

            . "                JOIN counsellor ON user.User_ID = counsellor.User_ID\n"

            . "                ORDER BY user.User_ID;";;

        $x = $this->db->runQuery($sql);
//        echo "query executed $x";
        return $x;

    }
}
