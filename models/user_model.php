<?php

class User_Model extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function users(){

        $row=$this->db->prepare('select * from users');
        $row->execute();
        $json_data['data']=array();//create the array
        foreach($row as $rec)//foreach loop
        {
            $json_array['id']=$rec['id'];
            $json_array['user_name']=$rec['user_name'];
            $json_array['email']=$rec['email'];

            array_push($json_data['data'],$json_array);

        }


        echo json_encode($json_data);

    }

}