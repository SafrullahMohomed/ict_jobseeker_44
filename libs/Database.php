<?php

class Database extends PDO{
    function __construct($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASSWORD)
    {
        parent:: __construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER);
    }

 //function for view cp profile select data from cp table   
public function runQuery($query1){
    $stmt=$this->prepare($query1);
    $stmt->execute();
    return $stmt->fetchAll();
}


    
}
?>