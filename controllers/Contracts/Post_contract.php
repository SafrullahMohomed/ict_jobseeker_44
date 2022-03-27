<?php
class Post_contract extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Post_contract()
    {  
      $data = [
          'contract_Category'=>''
      ];
      
      $data['contract_Category']='';
        //load available ict contract_ categories from database
        $contract_Category=$this->model->get_contract_Category();
        $data['contract_Category']=$contract_Category;
        //pass view name
        $this->view ->render2('Post_contract',$data); 
        
    }

     //insert post contract data
     function insert_post_contract_data()
     {
        
 
         //pass view name
        
         $this->model->insert_query_post_contract();
         
         $this->view ->render('Contracts_main_page'); 
         
     }
     
 
}