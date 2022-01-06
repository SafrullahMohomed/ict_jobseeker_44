<?php

class Manage_contracts_Model extends Model
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
            ':Contract_ID' => '%' . $condition . '%',
            ':Contract_title' => '%' . $condition . '%',
            ':First_name' => '%' . $condition . '%',
            ':Last_name' => '%' . $condition . '%',
            ':Contract_category' => '%' . $condition . '%',
            ':Contract_deadline' => '%' . $condition . '%'
        );



        $sql = "SELECT Contract_ID, Contract_title, First_name, Last_name, Contract_category, Contract_deadline\n"
            . "FROM contractprovider\n"
            . "JOIN contract ON contract.Contract_provider_ID = contractprovider.User_ID\n"
            . "JOIN user ON user.User_ID = contractprovider.User_ID\n"
            . "WHERE contract.Contract_ID LIKE :Contract_ID OR
                Contract_title LIKE :Contract_title OR
                First_name LIKE :First_name OR
                Last_name LIKE :Last_name OR
                Contract_category LIKE :Contract_category OR
                Contract_deadline LIKE :Contract_deadline\n"
            . "ORDER BY contract.Contract_ID\n";

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
                'Contract_ID' => str_ireplace($replace_array_1, $replace_array_2, $row["Contract_ID"]),
                'Contract_title' => str_ireplace($replace_array_1, $replace_array_2, $row["Contract_title"]),
                'First_name' => str_ireplace($replace_array_1, $replace_array_2, $row["First_name"]),
                'Last_name' => str_ireplace($replace_array_1, $replace_array_2, $row["Last_name"]),
                'Contract_category' => str_ireplace($replace_array_1, $replace_array_2, $row["Contract_category"]),
                'Contract_deadline' => str_ireplace($replace_array_1, $replace_array_2, $row["Contract_deadline"])
            );
        }
//        return print_r($data);

        return array(json_encode($data), $total_data);

    }


    function select_data_table2($start, $limit)
    {
//        declare an empty array
        $final = array();
        $sql2 = "SELECT Contract_ID, Contract_title, First_name, Last_name, Contract_category, Contract_deadline\n"
            . "FROM contractprovider\n"
            . "JOIN contract ON contract.Contract_provider_ID = contractprovider.User_ID\n"
            . "JOIN user ON user.User_ID = contractprovider.User_ID\n"

            . "ORDER BY contract.Contract_ID\n";

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
                'Contract_ID' => $row["Contract_ID"],
                'Contract_title' => $row['Contract_title'],
                'First_name' => $row['First_name'],
                'Last_name' => $row['Last_name'],
                'Contract_category' => $row['Contract_category'],
                'Contract_deadline' => $row['Contract_deadline']
            );
        }



//        array_push($final,$data);
        return array(json_encode($data), $total_data);
//


    }


}


