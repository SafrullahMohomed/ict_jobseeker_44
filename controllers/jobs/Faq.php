<?php
class Faq extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Faq()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Faq'); 
        
    }
}