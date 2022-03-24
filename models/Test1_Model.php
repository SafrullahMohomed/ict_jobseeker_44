<?php

class Test1_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    // insert data into test1 table
    function run_insert_query_for_user($Name, $Age)
    {
        try {
            $sql = "INSERT INTO Test_personal (Name, Age) VALUES (?, ?)";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([$Name,$Age]);

        echo "your Name" . $Name . " and Age " . $Age . "is successfully inserted";
        } catch (Exception $e) {
            echo "message $e->getMessage()";
        }
        
    }


    function select_users_from_test(){
        $sql = "SELECT * FROM Table_personal";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }
}
