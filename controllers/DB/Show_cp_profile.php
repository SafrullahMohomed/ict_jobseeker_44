
<?php
class Show_cp_profile extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Show_cp_profile()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        
    
           $this->view->cp= $this->model->Get_cp_data();
           $this->view ->render('Show_cp_profile'); 
        }
    }
