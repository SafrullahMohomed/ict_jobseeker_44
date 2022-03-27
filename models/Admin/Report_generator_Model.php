<?php

class Report_generator_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_duration_data_m($from_date, $to_date)
    {
        $results = array();
        $results['from_date'] = $from_date;
        $results['to_date'] = $to_date;

//        jobseeker
        $sqlJobseeker = "SELECT User_ID from `user` WHERE User_Type = 'Jobseeker' AND (Created_at >= '".$from_date."' AND Created_at <= '".$to_date."');";
        $statement = $this->db->prepare($sqlJobseeker);
        $statement->execute();
        $results['jobseekers'] = $statement->rowCount();

//        Jobs
        $sqlJob = "SELECT Job_ID from `job`;";
        $statement = $this->db->prepare($sqlJob);
        $statement->execute();
        $results['jobs'] = $statement->rowCount();

//        Companies
        $sqlCompany = "SELECT User_ID from `user` WHERE User_Type = 'Company' AND (Created_at >= '".$from_date."' AND Created_at <= '".$to_date."');";
        $statement = $this->db->prepare($sqlCompany);
        $statement->execute();
        $results['companies'] = $statement->rowCount();

//        Contracts
        $sqlContract = "SELECT Contract_ID from `contract`;";
        $statement = $this->db->prepare($sqlContract);
        $statement->execute();
        $results['contracts'] = $statement->rowCount();

//        Contract providers
        $sqlCp = "SELECT User_ID from `user` WHERE User_Type = 'Contract provider' AND (Created_at >= '".$from_date."' AND Created_at <= '".$to_date."');";
        $statement = $this->db->prepare($sqlCp);
        $statement->execute();
        $results['cproviders'] = $statement->rowCount();

//        Counsellors
        $sqlCounsellor = "SELECT User_ID from `user` WHERE User_Type = 'Counsellor' AND (Created_at >= '".$from_date."' AND Created_at <= '".$to_date."');";
        $statement = $this->db->prepare($sqlCounsellor);
        $statement->execute();
        $results['counsellors'] = $statement->rowCount();

        return $results;
    }
}
