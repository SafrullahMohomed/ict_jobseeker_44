<?php
class Admin_add_lm extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_lm()
    {
        $data = [
            'learning_material_link_err' => '',
            'learning_material_title_err' => '',
            // 'controller'=>'ChangePassword'
          ];

        //pass view name
        $this->view->renderAdmin('Admin_add_lm');
    }
    public function AddLearningMaterials()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'MaterialLink' => trim($_POST['MaterialLink']),
                'MaterialTitle' => trim($_POST['MaterialTitle']),
                'learning_material_link_err' => '',
                'learning_material_title_err' => '',
            ];
        if(empty($data['MaterialLink'])) 
        {
          $data['learning_material_link_err'] = "Please enter the Material Link";
        }
        if(empty($data['MaterialTitle'])) 
        {
          $data['learning_material_title_err'] = "Please enter the Material Title";
        }

        //Make sure errors are empty
        if(empty($data['learning_material_link_err']) && empty($data['learning_material_title_err'])) 
        {
            
        }
    }

}
}
