<?php

class Manage_chat_Model extends Model
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
            ':Inquiry_ID' => '%' . $condition . '%',
            ':Inquiry_status' => '%' . $condition . '%',
            ':Inquiry' => '%' . $condition . '%',
            ':Inquiry_from' => '%' . $condition . '%',
            ':Inquiry_email_to' => '%' . $condition . '%'
            
        );


        $sql = "SELECT Inquiry_ID, Inquiry_status, Inquiry, Inquiry_from, Inquiry_email_to \n"
                . "FROM inquiry\n"
                . "WHERE Inquiry_ID LIKE :Inquiry_ID OR
                Inquiry_status LIKE :Inquiry_status OR
                Inquiry LIKE :Inquiry OR
                Inquiry_from LIKE :Inquiry_from OR
                Inquiry_email_to LIKE :Inquiry_email_to \n"
                .  "ORDER BY Inquiry_ID DESC\n";


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
                'Inquiry_ID' => str_ireplace($replace_array_1, $replace_array_2, $row["Inquiry_ID"]),
                'Inquiry_status' => str_ireplace($replace_array_1, $replace_array_2, $row["Inquiry_status"]),
                'Inquiry' => str_ireplace($replace_array_1, $replace_array_2, $row["Inquiry"]),
                'Inquiry_from' => str_ireplace($replace_array_1, $replace_array_2, $row["Inquiry_from"]),
                'Inquiry_email_to' => str_ireplace($replace_array_1, $replace_array_2, $row["Inquiry_email_to"])
            );
        }
//        return print_r($data);

        return array(json_encode($data), $total_data);

    }


    function select_data_table2($start, $limit)
    {
//        declare an empty array
        $final = array();
        $sql2 = "SELECT Inquiry_ID, Inquiry_status, Inquiry, Inquiry_from, Inquiry_email_to 

                FROM inquiry";


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
                    'Inquiry_ID' => $row["Inquiry_ID"],
                    'Inquiry_status' => $row['Inquiry_status'],
                    'Inquiry' => $row['Inquiry'],
                    'Inquiry_from' => $row['Inquiry_from'],
                    'Inquiry_email_to' => $row['Inquiry_email_to'],
                
                );
            }



//        array_push($final,$data);
        return array(json_encode($data), $total_data);
//


    }
}

?>
