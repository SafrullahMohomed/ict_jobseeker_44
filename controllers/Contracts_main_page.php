<?php
class Contracts_main_page extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Contracts_main_page()
    {
        

        //pass view name
        $this->view ->render('Contracts_main_page'); 
        
    }
//select data from database and load to contract main paage
    function select_post_contract_data()
    {
  
       
        $contract=$this->model->select_query_post_contract();
        
        echo json_encode(count($contract) == 0 ? null : $contract);
       // return $contract;

      
        
        //pass js file name to view in libs
      //  return $this->view ->show_contract('Contracts_main_page'); 
        
    }

}