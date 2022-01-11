<?php

class Manage_jobseeker_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function select_data_table($query, $page, $start, $limit)
    {

        $condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $query);
        $condition = trim($condition);
        $condition = str_replace(" ", "%", $condition);
        $sample_data = array(
            ':User_ID' => '%' . $condition . '%',
            ':Jobseeker_NIC' => '%' . $condition . '%',
            ':Email' => '%' . $condition . '%',
            ':First_name' => '%' . $condition . '%',
            ':Last_name' => '%' . $condition . '%',
            ':Phone_number' => '%' . $condition . '%'
        );



        $sql = "SELECT user.User_ID, Email, First_name, Last_name, Jobseeker_NIC, Phone_number\n"
            . "FROM user\n"
            . "JOIN jobseeker ON user.User_ID = jobseeker.User_ID\n"
            . "WHERE user.User_ID LIKE :User_ID OR
                Email LIKE :Email OR
                First_name LIKE :First_name OR
                Last_name LIKE :Last_name OR
                Jobseeker_NIC LIKE :Jobseeker_NIC OR
                Phone_number LIKE :Phone_number\n"
            . "ORDER BY user.User_ID\n";

        $filter_query = $sql . 'LIMIT ' . $start . ',' . $limit;
//        return $filter_query;
        $statement = $this->db->prepare($sql);
        $statement->execute($sample_data);
        $total_data = $statement->rowCount();

        $statement = $this->db->prepare($filter_query);
        $statement->execute($sample_data);

        $result = $statement->fetchAll();

//        to highlight the word
        $replace_array_1 = explode('%', $condition);

        foreach ($replace_array_1 as $row_data) {
            $replace_array_2[] = '<span style="background-color:#' . rand(100000, 999999) . '; color:#fff">' . $row_data . '</span>';
        }

        foreach ($result as $row) {
            $data[] = array(
                'User_ID' => str_ireplace($replace_array_1, $replace_array_2, $row["User_ID"]),
                'Jobseeker_NIC' => str_ireplace($replace_array_1, $replace_array_2, $row["Jobseeker_NIC"]),
                'Email' => str_ireplace($replace_array_1, $replace_array_2, $row["Email"]),
                'First_name' => str_ireplace($replace_array_1, $replace_array_2, $row["First_name"]),
                'Last_name' => str_ireplace($replace_array_1, $replace_array_2, $row["Last_name"]),
                'Phone_number' => str_ireplace($replace_array_1, $replace_array_2, $row["Phone_number"])
            );
        }
//        return print_r($data);

        return array(json_encode($data), $total_data);

    }


    function select_data_table2($start, $limit)
    {
//        declare an empty array
        $final = array();
        $sql2 = "SELECT user.User_ID, Email, First_name, Last_name, Jobseeker_NIC, Phone_number\n"

            . "                FROM user\n"

            . "                JOIN jobseeker ON user.User_ID = jobseeker.User_ID\n"
            . "ORDER BY user.User_ID DESC";

        $filter_query = $sql2 . ' LIMIT ' . $start . ', ' . $limit;

        $statement = $this->db->prepare($sql2);

        $statement->execute();

        $total_data = $statement->rowCount();
//        array_push($final, $total_data);

        $statement = $this->db->prepare($filter_query);

        $statement->execute();

        $result = $statement->fetchAll();


        foreach ($result as $row) {
            $data[] = array(
                'User_ID' => $row["User_ID"],
                'Jobseeker_NIC' => $row['Jobseeker_NIC'],
                'Email' => $row['Email'],
                'First_name' => $row['First_name'],
                'Last_name' => $row['Last_name'],
                'Phone_number' => $row['Phone_number']

            );
        }



//        array_push($final,$data);
        return array(json_encode($data), $total_data);
//


    }


}


