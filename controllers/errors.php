<?php

class Errors extends Controller {

    function __construct(){
        parent::__construct();

    }
    function index(){
        $this->view->msg = "This page is doesn't exists";
        $this->view->render('error/index');

    }
}