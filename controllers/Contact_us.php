<?php
class Contact_us extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Contact_us()
    {
        

        //pass view name
        $this->view ->render('Contact_us'); 
        
    }
}