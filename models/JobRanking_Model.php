<?php

class JobRanking_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

//     function get_job_category_total_m()
//     {

//         $sql = "SELECT SUM(JobCategory_count) as total FROM `jobcategory`";

//         $statement = $this->db->prepare($sql);

//         $statement->execute();

// //         $total_data = $statement->rowCount();
// // //        array_push($final, $total_data);

//         $result = $statement->fetchAll();

//         return json_encode($result);
//     }
//  to get the job category data
    function get_job_category_m()
    {
        $sql = "SELECT JobCategory_name, JobCategory_count FROM `jobcategory`;";
//        $sql1 = "SELECT COUNT()";

        return $this->db->runQuery($sql);

    }


    
    function select_data_table($query, $page, $start, $limit)
    {

        $condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $query);
        $condition = trim($condition);
        $condition = str_replace(" ", "%", $condition);
        $sample_data = array(
            ':JobCategory_ID' => '%' . $condition . '%',
            ':JobCategory_name' => '%' . $condition . '%',
            ':JobCategory_count' => '%' . $condition . '%'
        );


        $sql = "SELECT JobCategory_ID, JobCategory_name, JobCategory_count, JobCategory_count*100/SUM(JobCategory_count)\n"
        . "FROM jobcategory\n"
        . "WHERE JobCategory_ID LIKE :JobCategory_ID OR
        JobCategory_name LIKE :JobCategory_name OR
        JobCategory_count LIKE :JobCategory_count OR\n"
        .  "ORDER BY JobCategory_count DESC\n";

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
                'JobCategory_ID' => str_ireplace($replace_array_1, $replace_array_2, $row["JobCategory_ID"]),
                'JobCategory_name' => str_ireplace($replace_array_1, $replace_array_2, $row["JobCategory_name"]),
                'JobCategory_count' => str_ireplace($replace_array_1, $replace_array_2, $row["JobCategory_count"])
            );
        }
//        return print_r($data);

        return array(json_encode($data), $total_data);

    }


    function select_data_table2($start, $limit)
    {
//        declare an empty array
        $final = array();
        $sql2 = "SELECT JobCategory_ID, JobCategory_name, JobCategory_count FROM jobcategory ORDER BY JobCategory_count DESC\n";

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
                    'JobCategory_ID' => $row["JobCategory_ID"],
                    'JobCategory_name' => $row['JobCategory_name'],
                    'JobCategory_count' => $row['JobCategory_count'],

                );
            }



//        array_push($final,$data);
        return array(json_encode($data), $total_data);
//
// SELECT JobCategory_name, JobCategory_count, JobCategory_count * 100 / t.s AS `JobCategory_percentage` FROM jobcategory CROSS JOIN (SELECT SUM(JobCategory_count) AS s FROM jobcategory) t;

    }
   
}



?>