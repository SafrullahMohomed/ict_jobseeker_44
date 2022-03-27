<?php

class Admin_home_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

//counts for admin dashboard
    function get_counts_m()
    {
        $results = array();

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


    //   to get the job category data
    function get_job_category_m()
    {
        $sql = "SELECT JobCategory_name, JobCategory_count FROM `jobcategory`;";
//        $sql1 = "SELECT COUNT()";

        return $this->db->runQuery($sql);

    }

    //   to get the contract category data
    function get_contract_category_m()
    {
        $sql = "SELECT Contract_category, COUNT(Contract_ID) as contractCount FROM `contract` GROUP BY Contract_category;";
        return $this->db->runQuery($sql);

    }

    function get_monthly_user_registered_m($year = 2021)
    {
        $data = array();
        $sql1 = "SELECT COUNT(User_ID) AS Count_Jobseeker, MONTH(Created_at) AS Month FROM user WHERE User_type = 'Jobseeker' AND YEAR(Created_at) = $year GROUP BY YEAR(Created_at), month(Created_at);";
        $data['Jobseeker'] = $this->db->runQuery($sql1);

        $sql2 = "SELECT COUNT(User_ID) AS Count_Counsellor, MONTH(Created_at) AS Month FROM user WHERE User_type = 'Counsellor' AND YEAR(Created_at) = $year GROUP BY YEAR(Created_at), month(Created_at);";
        $statement = $this->db->prepare($sql2);
        $data['Counsellor'] = $this->db->runQuery($sql2);

        $sql3 = "SELECT COUNT(User_ID) AS Count_Company, MONTH(Created_at) AS Month FROM user WHERE User_type = 'Company' AND YEAR(Created_at) = $year GROUP BY YEAR(Created_at), month(Created_at);";
        $statement = $this->db->prepare($sql3);
        $data['Company'] = $this->db->runQuery($sql3);

        $sql4 = "SELECT COUNT(User_ID) AS Count_Cprovider, MONTH(Created_at) AS Month FROM user WHERE User_type = 'Company' AND YEAR(Created_at) = $year GROUP BY YEAR(Created_at), month(Created_at);";
        $statement = $this->db->prepare($sql4);
        $data['Contract_provider'] = $this->db->runQuery($sql4);

        return $data;


    }


}
