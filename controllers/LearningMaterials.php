<?php
class LearningMaterials extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function LearningMaterials()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('LearningMaterials'); 
        
    }
}