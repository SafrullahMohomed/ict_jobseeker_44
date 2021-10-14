<?php
class Home extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Home()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Home'); 
        
    }
}