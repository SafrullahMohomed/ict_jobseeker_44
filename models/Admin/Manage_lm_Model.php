<?php

class Manage_lm_Model extends Model
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
            ':LearningMaterial_ID' => '%' . $condition . '%',
            ':LearningMaterial_link' => '%' . $condition . '%',
            ':LearningMaterial_category' => '%' . $condition . '%',
            ':LearningMaterial_title	' => '%' . $condition . '%',
            ':Academy_logo' => '%' . $condition . '%',
            ':Resource_logo' => '%' . $condition . '%'
        );


        $sql = "SELECT LearningMaterial_ID, LearningMaterial_link, LearningMaterial_category, LearningMaterial_title, Academy_logo, Resource_logo\n"
            . "FROM learningmaterial\n"
            . "WHERE LearningMaterial_ID LIKE :LearningMaterial_ID OR
                LearningMaterial_link LIKE :LearningMaterial_link OR
                LearningMaterial_category LIKE :LearningMaterial_category OR
                LearningMaterial_title LIKE :LearningMaterial_title OR
                Academy_logo LIKE :Academy_logo OR
                Resource_logo LIKE :Resource_logo\n"
            . "ORDER BY LearningMaterial_ID ASC\n";

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
                'LearningMaterial_ID' => str_ireplace($replace_array_1, $replace_array_2, $row["LearningMaterial_ID"]),
                'LearningMaterial_link' => str_ireplace($replace_array_1, $replace_array_2, $row["LearningMaterial_link"]),
                'LearningMaterial_category' => str_ireplace($replace_array_1, $replace_array_2, $row["LearningMaterial_category"]),
                'LearningMaterial_title' => str_ireplace($replace_array_1, $replace_array_2, $row["LearningMaterial_title"]),
                'Academy_logo' => str_ireplace($replace_array_1, $replace_array_2, $row["Academy_logo"]),
                'Resource_logo' => str_ireplace($replace_array_1, $replace_array_2, $row["Resource_logo"])
            );
        }
//        return print_r($data);

        return array(json_encode($data), $total_data);

    }


    function select_data_table2($start, $limit)
    {
//        declare an empty array
        $final = array();
        $sql2 = "SELECT LearningMaterial_ID, LearningMaterial_link, LearningMaterial_category, LearningMaterial_title, Academy_logo, Resource_logo\n"

            . "FROM learningmaterial\n"

            . "ORDER BY LearningMaterial_ID ASC";

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
                'LearningMaterial_ID' => $row["LearningMaterial_ID"],
                'LearningMaterial_link' => $row['LearningMaterial_link'],
                'LearningMaterial_category' => $row['LearningMaterial_category'],
                'LearningMaterial_title' => $row['LearningMaterial_title'],
                'Academy_logo' => $row['Academy_logo'],
                'Resource_logo' => $row['Resource_logo'],

            );
        }


//        array_push($final,$data);
        return array(json_encode($data), $total_data);
//


    }

    // function delete_lm_data_m($LearningMaterial_ID)
    // {
    //     $sql = "DELETE * FROM learningmaterial WHERE user.User_ID = counsellor.User_ID AND user.User_ID = '".$User_ID."';";
    //     $statement = $this->db->prepare($sql);
    //     $statement->execute();
    // }
}
