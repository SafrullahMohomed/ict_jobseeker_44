<?php

class Show_cp_profile_Model extends Model{
    function __construct()
    {
       parent :: __construct(); 
    }

   

function Get_cp_data(){

    $this->db-> runQuery("SELECT *FROM user");
}

}

?>