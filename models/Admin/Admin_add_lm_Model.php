<?php

class Admin_add_lm_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function run_AddLearningMaterials($data)
    {
       $MaterialLink=$data['MaterialLink'];
       $MaterialCategory=$data['MaterialCategory'];
       $MaterialTitle=$data['MaterialTitle'];
        try
        {
          $sql= "INSERT INTO learningmaterial (LearningMaterial_link,LearningMaterial_category,LearningMaterial_title) VALUES (?,?,?) ";
            
            $stmt=$this->db->prepare($sql);
            $stmt->execute([$MaterialLink,$MaterialCategory,$MaterialTitle]);

          echo "Successfully inserted"  ;
        }
        catch(Exception $e)
        {
            echo "message $e->getMessage()";
        }
    }




}
