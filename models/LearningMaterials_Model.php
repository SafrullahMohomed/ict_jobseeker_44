<?php

class LearningMaterials_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }
    function SelectLearningMaterials($ResourceName,$Category)
    {
        $query = "SELECT * FROM learningmaterial WHERE LearningMaterial_category = '$Category' AND LearningMaterial_title ='$ResourceName'";
        $results= $this->db->runQuery($query);
        return $results; 
 
    }
   
}



?>