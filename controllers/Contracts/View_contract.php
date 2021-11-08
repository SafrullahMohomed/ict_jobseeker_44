<?php
class View_contract extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function View_contract()
    {
        
     // $bid=[];
        //pass view name
        //$this->view ->render('View_contract'); 
        $this->view ->render('View_contract');
    }

    //select data from database and load to view contract page
    function select_query_bid_contract_data()
    {
  
       
        $bid=$this->model->select_query_bid_contract();
       // print_r($bid);
        //$this->view ->render2('View_contract',$bid);

        
        //echo json_encode(count($bid) == 0 ? null : $bid);
        
      // return $contract;

      
    
        
    }

}