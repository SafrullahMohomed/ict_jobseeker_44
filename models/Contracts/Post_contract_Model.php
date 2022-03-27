<?php

class Post_contract_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

//contract category load from db
    function get_contract_Category(){
        $query1="SELECT Contractcatergory_ID,Contract_category FROM contract_category ";
        $stmt1=$this->db->prepare($query1);   
        $stmt1->execute();
        $category=$stmt1->fetchAll();   
        return $category;

    }



//post contract data
function insert_query_post_contract(){

    $contract_name  = $_POST["contract_name"];
    $Contractcatergory_ID  = $_POST["contract_category"];
    $description    = $_POST["description"];
    $deadline  = $_POST["deadline"];
    $avg_bid  = $_POST["avg_bid"];


    // prepare sql and bind parameters 
    //Insert data into contract tables
    $User_ID=$_SESSION['User_ID'];
    $stmt1 = $this->db->prepare("INSERT INTO contract (Contract_title,Contract_description, Contract_deadline, 
    Contract_bid_avg,Contractcatergory_ID,Contract_provider_ID)
    VALUES (:contract_name,:description, :deadline,:avg_bid,:Contractcatergory_ID,:user_id )");
    $stmt1->bindParam(':contract_name', $contract_name);
    $stmt1->bindParam(':Contractcatergory_ID', $Contractcatergory_ID);
    $stmt1->bindParam(':description', $description);
    $stmt1->bindParam(':deadline', $deadline);
    $stmt1->bindParam(':avg_bid', $avg_bid);
    $stmt1->bindParam(':user_id',$User_ID);

    $stmt1->execute();

   

        $Contract_ID = $this->db->lastInsertId();

        //insert data into post table and make a relation
        $query2="INSERT INTO contract_post (User_ID ,Contract_ID)
        VALUES (?,?)";
        $stmt2=$this->db->prepare($query2);
        $stmt2->execute([$_SESSION['User_ID'],$Contract_ID]);

       //insert contract categorey data
       $query3="UPDATE contract_category SET Contract_count= Contract_count+1 WHERE Contractcatergory_ID = $Contractcatergory_ID";
       $this->db->runQuery($query3);


   }
    
}






?>