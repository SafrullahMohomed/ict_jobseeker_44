<?php
class cp extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function cp()
    {
       
        //pass view name
        $this->view ->render('cp'); 
        
    }

    //insert contract provider data into database (user and contract provider table)
    function insert_cp_data()
    {
       

        //pass view name
       
        $this->view->cp= $this->model->insert_query_cp_data();
        
        $this->view ->render('Contract_provider_profile'); 
        
    }
    
   //insert post contract data
    function insert_post_contract_data()
    {
       

        //pass view name
       
        $this->model->insert_query_post_contract();
        
        $this->view ->render('Contracts_main_page'); 
        
    }
    





}