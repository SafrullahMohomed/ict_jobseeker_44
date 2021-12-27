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

    public function SearchLearningMaterials()
    {
      $ResourceName=NULL;
      $Category=NULL;
      if(isset($_POST['submit']))
      {
        $ResourceName=$_POST['ResourceName'];
        $Category=$_POST['Category'];

      }
      // var_dump($_POST);
      $data = [];
      $result = $this->model->SelectLearningMaterials($ResourceName, $Category);


      $data['result'] = $result;
      print_r($result);

      $this->view->render2('ViewLearningMaterials', $data);
    }
}