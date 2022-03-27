<?php
class Manage_learning_materials extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_learning_materials()
    {

        //pass view name
        $this->view->render('Manage_learning_materials');
    }
}
