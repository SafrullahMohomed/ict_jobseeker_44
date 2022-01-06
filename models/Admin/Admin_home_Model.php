<?php

class Admin_home_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_job_category_m()
    {
        $sql = "SELECT JobCategory_name, JobCategory_count FROM `jobcategory`;";

        return $this->db->runQuery($sql);

    }

    function get_counts_m()
    {
        $results = array(
        );

//        jobseeker
        $sqlJobseeker = "SELECT User_ID from `user` WHERE User_Type = 'Jobseeker';";
        $statement = $this->db->prepare($sqlJobseeker);
        $statement->execute();
        $results['jobseekers'] = $statement->rowCount();

//        Jobs
        $sqlJob = "SELECT Job_ID from `job`;";
        $statement = $this->db->prepare($sqlJob);
        $statement->execute();
        $results['jobs'] = $statement->rowCount();

//        Companies
        $sqlCompany = "SELECT User_ID from `user` WHERE User_Type = 'Company';";
        $statement = $this->db->prepare($sqlCompany);
        $statement->execute();
        $results['companies'] = $statement->rowCount();

//        Contracts
        $sqlContract = "SELECT Contract_ID from `contract`;";
        $statement = $this->db->prepare($sqlContract);
        $statement->execute();
        $results['contracts'] = $statement->rowCount();

//        Contract providers
        $sqlCp = "SELECT User_ID from `user` WHERE User_Type = 'Contract provider';";
        $statement = $this->db->prepare($sqlCp);
        $statement->execute();
        $results['cproviders'] = $statement->rowCount();

//        Counsellors
        $sqlCounsellor = "SELECT User_ID from `user` WHERE User_Type = 'Counsellor';";
        $statement = $this->db->prepare($sqlCounsellor);
        $statement->execute();
        $results['counsellors'] = $statement->rowCount();

        return $results;


    }
}
