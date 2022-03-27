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
       $AcademyLogo=$data['AcademyFile'];
       $ResourceLogo=$data['ResourceFile'];
        try
        {
          $sql= "INSERT INTO learningmaterial (LearningMaterial_link,LearningMaterial_category,LearningMaterial_title,Academy_logo,Resource_logo) VALUES (?,?,?,?,?) ";
            
            $stmt=$this->db->prepare($sql);
            $stmt->execute([$MaterialLink,$MaterialCategory,$MaterialTitle,$AcademyLogo,$ResourceLogo]);

          echo "Successfully inserted"  ;
        }
        catch(Exception $e)
        {
            echo "message $e->getMessage()";
        }
    }




}
