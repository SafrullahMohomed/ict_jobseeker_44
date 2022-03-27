<?php

class Resume_template_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_resume_data_m(){
        $sql_resume = "SELECT `Resume_ID`, `Resume_type`, `First_name`, `Last_name`, `Address`, `Email`, `Phone_no`, `City`, `About you`, `Skills`, `Jobseeker_ID` FROM `resume` WHERE Resume_ID = '1'";

        $resume_ID = 1;
//        to get resume experiece details
        $sql_resume_experience2a = "SELECT * FROM `resume_experience` WHERE Resume_ID = ".$resume_ID." AND Resume_experience_ID = '2a'";
        $sql_resume_experience2b = "SELECT * FROM `resume_experience` WHERE Resume_ID = ".$resume_ID." AND Resume_experience_ID = '2b'";
        $sql_resume_experience2c = "SELECT * FROM `resume_experience` WHERE Resume_ID = ".$resume_ID." AND Resume_experience_ID = '2c'";

//        to get resume education details
        $sql_resume_education3a = "SELECT * FROM `resume_education` WHERE Resume_ID = ".$resume_ID." AND Resume_education_ID = '3a'";
        $sql_resume_education3b = "SELECT * FROM `resume_education` WHERE Resume_ID = ".$resume_ID." AND Resume_education_ID = '3b'";
        $sql_resume_education3c = "SELECT * FROM `resume_education` WHERE Resume_ID = ".$resume_ID." AND Resume_education_ID = '3c'";

//        to get resume project details
        $sql_resume_project5a = "SELECT * FROM `resume_project` WHERE Resume_ID = ".$resume_ID." AND Resume_project_ID = '5a'";
        $sql_resume_project5b = "SELECT * FROM `resume_project` WHERE Resume_ID = ".$resume_ID." AND Resume_project_ID = '5b'";
        $sql_resume_project5c = "SELECT * FROM `resume_project` WHERE Resume_ID = ".$resume_ID." AND Resume_project_ID = '5c'";


//        $statement_resume = $this->db->prepare($sql_resume);
//
////        resume experience
//        $sql_resume_experience2a = $this->db->prepare($sql_resume_experience2a);
//        $sql_resume_experience2b = $this->db->prepare($sql_resume_experience2b);
//        $sql_resume_experience2c = $this->db->prepare($sql_resume_experience2c);
//
////        resume education
//        $sql_resume_education3a = $this->db->prepare($sql_resume_education3a);
//        $sql_resume_education3b = $this->db->prepare($sql_resume_education3b);
//        $sql_resume_education3c = $this->db->prepare($sql_resume_education3c);
//
////        resume project
//        $sql_resume_project5a = $this->db->prepare($sql_resume_project5a);
//        $sql_resume_project5b = $this->db->prepare($sql_resume_project5b);
//        $sql_resume_project5c = $this->db->prepare($sql_resume_project5c);


        $resume = $this->db->runQuery($sql_resume);

        $experience2a = $this->db->runQuery($sql_resume_experience2a);
        $experience2b = $this->db->runQuery($sql_resume_experience2b);
        $experience2c = $this->db->runQuery($sql_resume_experience2c);

        $education3a = $this->db->runQuery($sql_resume_education3a);
        $education3b = $this->db->runQuery($sql_resume_education3b);
        $education3c = $this->db->runQuery($sql_resume_education3c);

        $project5a = $this->db->runQuery($sql_resume_project5a);
        $project5b = $this->db->runQuery($sql_resume_project5b);
        $project5c = $this->db->runQuery($sql_resume_project5c);


        $data = array('resume' => $resume[0],
            'experience2a' => $experience2a[0],
            'experience2b' => $experience2b[0],
            'experience2c' => $experience2c[0],
            'education3a' => $education3a[0],
            'education3b' => $education3b[0],
            'education3c' => $education3c[0],
            'project5a' => $project5a[0],
            'project5b' => $project5b[0],
            'project5c' => $project5c[0],
            );

        return $data;

    }

}
