<?php

class LearningMaterials_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }
    function SelectLearningMaterials($ResourceName,$Category)
    {
        $query = "SELECT * FROM learningmaterial WHERE LearningMaterial_category = '$Category' AND LearningMaterial_title ='$ResourceName'";
        $result= $this->db->runQuery_single($query);
        return $result; 
 
    }
   
}



?>