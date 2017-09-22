<?php

class Login_Model extends Model{



        public function __construct(){

           parent::__construct();

           }
        public function run(){


            $sth = $this->db->prepare("select id from users where user_name = :userName AND password = MD5(:password)");

            $sth->execute(array(
                ':userName' => $_POST['name'],
                ':password' => $_POST['pass']

            ));
           // $data = $sth->fetchAll();
           $count = $sth->rowCount();
           if($count > 0){
               //login
               Session::init();
                Session::set('loggedIn',true);
                header('location:../dashboard');

           }else {

               //error
               header('location:./../login');

           }

        }



}