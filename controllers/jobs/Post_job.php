<?php
class Post_job extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Post_job()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Post_job'); 
        
    }
}