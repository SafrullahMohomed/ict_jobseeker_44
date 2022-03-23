<?php
class Companies extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Companies()
    {
        
        //pass view name
        $this->view ->render('Company/Companies'); 
        
    }
    //load all companies
    function load_all_companies(){

      $company=$this->model->select_company_data();     
      echo json_encode(count($company) == 0 ? null : $company);
      return $company;

    }
}