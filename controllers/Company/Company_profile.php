<?php
class Company_profile extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

 function Company_profile()
    {
        

        //pass view name
        $this->view ->render('Company/Company_profile'); 
        
    }

//window open from veiw.js file 
    function Company_profilejs($User_ID)
    {
      $data=[
        'User_ID'=>$User_ID
       ];

        //pass view name
        $this->view ->render2('Company/Company_profile',$data); 
        
    }

    //select company profile data
     function company_data($User_ID){

      $company=$this->model->select_company_data($User_ID);     
      echo json_encode(count($company) == 0 ? null : $company);
     return $company;




     }
}