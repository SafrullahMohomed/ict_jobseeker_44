<?php

class Jobs_main_page_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }


function select_query_job_data(){

     $query1="SELECT Job_ID,Job_title, Job_type, Job_deadline,Job_city,Company_name 
              FROM job ,company
              where job.User_ID =company.User_ID";


    $stmt1=$this->db->prepare($query1);   
    $stmt1->execute();
    $s=$stmt1->fetchAll();
    
     return $s;

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
            ':Job_deadline' => '%' . $condition . '%',
            ':Job_city' => '%' . $condition . '%',
            ':Job_type' => '%' . $condition . '%'
        );
       


        $sql = "SELECT job.Job_ID, Job_title, Company_name,Job_city,Job_type, JobCategory_name, Job_deadline\n"
            . "FROM job\n"
            . "JOIN company ON job.User_ID = company.User_ID\n"
            . "JOIN jobcategory ON job.JobCategory_ID = jobcategory.JobCategory_ID\n"
            . "WHERE job.Job_ID LIKE :Job_ID OR
                Job_title LIKE :Job_title OR
                Company_name LIKE :Company_name OR
                JobCategory_name LIKE :JobCategory_name OR
                Job_type LIKE :Job_type OR
                Job_city LIKE :Job_city OR
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
                'Job_deadline' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_deadline"]),
                'Job_city' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_city"]),
                'Job_type' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_type"])
            );
        }
//        return print_r($data);

//get features category data start

$sql3 = "SELECT JobCategory_name FROM jobcategory ORDER BY JobCategory_count DESC LIMIT 6";

$stmt1=$this->db->prepare($sql3);   
$stmt1->execute();
$category=$stmt1->fetchAll();

////get features category data end

 return array(json_encode($data),$total_data,json_encode($category));

}

//when searching job
    function select_data_table2($start, $limit)
    {
//        declare an empty array
        $final = array();
        $sql2 = "SELECT job.Job_ID, Job_title, Company_name,Job_city,Job_type, JobCategory_name, Job_deadline\n"

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
                'Job_deadline' => $row['Job_deadline'],
                'Job_city'=> $row['Job_city'],
                'Job_type'=> $row['Job_type']
            );
        }
        //get features category data start

$sql3 = "SELECT JobCategory_name FROM jobcategory ORDER BY JobCategory_count DESC LIMIT 6";

$stmt1=$this->db->prepare($sql3);   
$stmt1->execute();
$category=$stmt1->fetchAll();

////get features category data end


//        array_push($final,$data);
        return array(json_encode($data), $total_data,json_encode($category));
//


    }
    
  //load available ict job categories from database
public function getJobCategory(){
    $query1="SELECT JobCategory_ID,JobCategory_name
    FROM jobcategory ";

    $s=$this->db->runQuery($query1);   
    return $s;
}

  //city location union search
  function select_data_table3($query1,$query2, $page, $start, $limit)
    {

        $condition1 = preg_replace('/[^A-Za-z0-9\- ]/', '', $query1);
        $condition1 = trim($condition1);
        $condition1 = str_replace(" ", "%", $condition1);

        $condition2 = preg_replace('/[^A-Za-z0-9\- ]/', '', $query2);
        $condition2 = trim($condition2);
        $condition2 = str_replace(" ", "%", $condition2);
echo  $query1 ;
        $sample_data = array(
            ':JobCategory_name' => '%' . $condition1 . '%',
            ':Job_city' => '%' . $condition2 . '%',
        );
       


        $sql = "SELECT job.Job_ID, Job_title, Company_name,Job_city,Job_type, JobCategory_name, Job_deadline\n"
            . "FROM job\n"
            . "JOIN company ON job.User_ID = company.User_ID\n"
            . "JOIN jobcategory ON job.JobCategory_ID = jobcategory.JobCategory_ID\n"
            . "WHERE 
                JobCategory_name LIKE :JobCategory_name AND
                Job_city LIKE :Job_city\n"
            . "ORDER BY job.Job_ID\n";

        $filter_query = $sql . 'LIMIT ' . $start . ',' . $limit;
//        return $filter_query;
        $statement = $this->db->prepare($sql);
        $statement->execute($sample_data);
        $total_data = $statement->rowCount();

        $statement = $this->db->prepare($filter_query);
        $statement->execute($sample_data);

        $result = $statement->fetchAll();
        print_r($result) ;

//        to highlight the word
         $replace_array_1 = explode('%', $condition1);
        $replace_array_3 = explode('%', $condition2);

        foreach ($replace_array_1 as $row_data) {
            $replace_array_2[] = '<span style="background-color:#' . rand(100000, 999999) . '; color:#fff">' . $row_data . '</span>';
        }

        foreach ($result as $row) {
            $data[] = array(
                'Job_ID' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_ID"]),
                'Job_title' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_title"]),
                'Company_name' => str_ireplace($replace_array_1, $replace_array_2, $row["Company_name"]),
                'JobCategory_name' => str_ireplace($replace_array_1, $replace_array_2, $row["JobCategory_name"]),
                'Job_deadline' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_deadline"]),
                'Job_city' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_city"]),
                'Job_type' => str_ireplace($replace_array_1, $replace_array_2, $row["Job_type"])
            );
        }

     
//        return print_r($data);

//get features category data start

$sql3 = "SELECT JobCategory_name FROM jobcategory ORDER BY JobCategory_count DESC LIMIT 6";

$stmt1=$this->db->prepare($sql3);   
$stmt1->execute();
$category=$stmt1->fetchAll();

////get features category data end

 return array(json_encode($data),$total_data,json_encode($category));

}
   
}



?>