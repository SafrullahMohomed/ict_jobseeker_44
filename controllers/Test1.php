<?php
class Test1 extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Test1()
    {

        //pass view name
        $this->view->render('Test1');
        // print_r($this->model->select_users_from_test());
    }

    // get the data of submitted form 
    function get_user_inputs(){
        if (isset($_POST['Submit'])){
            $Name = $_POST['Name'];
            $Age = $_POST['Age'];
            $Address = $_POST['Address'];
            $City = $_POST['City'];

        }
 

        // var_dump($_POST);
        echo $Name;
        print_r($_POST);

        $this->model->run_insert_query_for_user($Name, $Age);
    }



    function get_selected_data(){
        print_r($this->model->select_users_from_test());



    }

    // var_dump($_POST);
}
