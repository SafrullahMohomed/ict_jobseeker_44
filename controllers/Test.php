<?php
class Test extends Controller
{
    function __construct()
    {
      parent:: __construct();
     

    }

    function index()
    {
        #$this->model->printSomething();
        echo "Hello from the Test controller - Index Method";

        //pass view name
  
        $this->view->cp= $this->model->Get_cp_data();
        $this->view->c=$this->model->select_query_post_contract();
        
        $this->view ->render('Test'); 
        
    }

}