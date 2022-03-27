<?php
class Post_contract extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Post_contract()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Post_contract'); 
        
    }
}