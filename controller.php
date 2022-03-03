<?php
include('model/model.php');
class controller{
    public $model;
    
    public function __construct()
    {
        $this->models=new Model();
    }
    public function invoke()
    {
        $result=$this->models->getlogin();
        if($result=='login')
        {
            include 'view/afterlogin.php';
        }
        else
        {
            include'view/login.php';
        }
    }
}

?>