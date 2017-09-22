<?php

class User extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view->render("user/index");
    }
    function allUsers(){

        $data = $this->model->users();
        return $data;
    }
}