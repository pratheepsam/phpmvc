<?php

class Database extends PDO{

    public function __construct()
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        parent::__construct('mysql:host=localhost;dbname=mvc','pratheep','pratheep123$',$pdo_options);
       // parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS,$pdo_options);
    }
}