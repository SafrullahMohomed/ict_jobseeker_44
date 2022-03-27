<?php

class Manage_jobs_Model extends Model
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
            ':Job_ID' => '%' . $condition . '%',
            ':Job_title' => '%' . $condition . '%',
            ':Company_name' => '%' . $condition . '%',
            ':JobCategory_name' => '%' . $condition . '%',
            ':Job_deadline' => '%' . $condition . '%'
        );



        $sql = "SELECT job.Job_ID, Job_title, Company_name, JobCategory_name, Job_deadline\n"
            . "FROM job\n"
            . "JOIN company ON job.User_ID = company.User_ID\n"
            . "JOIN jobcategory ON job.JobCategory_ID = jobcategory.JobCategory_ID\n"
            . "WHERE job.Job_ID LIKE :Job_ID OR
                Job_title LIKE :Job_title OR
                Company_name LIKE :Company_name OR
                JobCategory_name LIKE :JobCategory_name OR
                Job_deadline LIKE :Job_deadline\n"
            . "ORDER BY job.Job_ID\n";

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
                'Job_ID' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_ID"]),
                'Job_title' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_title"]),
                'Company_name' => str_ireplace($replace_array_1, $replace_array_2, $row["Company_name"]),
                'JobCategory_name' => str_ireplace($replace_array_1, $replace_array_2, $row["JobCategory_name"]),
                'Job_deadline' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_deadline"])
            );
        }
//        return print_r($data);

        return array(json_encode($data), $total_data);

    }


    function select_data_table2($start, $limit)
    {
//        declare an empty array
        $final = array();
        $sql2 = "SELECT job.Job_ID, Job_title, Company_name, JobCategory_name, Job_deadline\n"

            . "FROM job\n"

            . "JOIN company ON job.User_ID = company.User_ID\n"
            . "JOIN jobcategory ON job.JobCategory_ID = jobcategory.JobCategory_ID\n"
            . "ORDER BY job.Job_ID\n";

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
                'Job_ID' => $row["Job_ID"],
                'Job_title' => $row['Job_title'],
                'Company_name' => $row['Company_name'],
                'JobCategory_name' => $row['JobCategory_name'],
                'Job_deadline' => $row['Job_deadline']
            );
        }



//        array_push($final,$data);
        return array(json_encode($data), $total_data);
//


    }


}


