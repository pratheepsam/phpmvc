<?php

class Bootstrap {

    function __construct()
    {
       //$url = $_GET['url'];
       $url  = isset($_GET['url'])? $_GET['url'] : null;
        $url = rtrim($url,'/');
        $url = explode('/',$url);
        //print_r($url);
       if(empty($url[0])){
            require 'controllers/index.php';
            $controller = new Index();
           $controller->index();
            return false;
        }
        $file = 'controllers/' .$url[0]. '.php';

        if (file_exists($file)){

            require  $file;
        } else {
            require 'controllers/errors.php';
            $controller = new Errors();
            return false;
    }


        $controller = new $url[0];
        $controller->loadModel($url[0]);
       /* if(isset($url[2])){

            $controller->{$url[1]}($url[2]);

        } else {

            if(isset($url[1])){

                $controller->{$url[1]}();

            }else{
                $controller->index();

            }
        }*/
        $length = count($url);

        // Make sure the method we are calling exists
        if ($length > 1) {
            if (!method_exists($controller, $url[1])) {
                require 'controllers/errors.php';
                $controller = new Errors();
               return false;

            }
        }

        // Determine what to load
        switch ($length) {

            case 8:
                //Controller->Method(Param1, Param2, Param3)
                $controller->{$url[1]}($url[2], $url[3], $url[4], $url[5], $url[6], $url[7]);
                break;
            case 7:
                //Controller->Method(Param1, Param2, Param3)
                $controller->{$url[1]}($url[2], $url[3], $url[4], $url[5], $url[6]);
                break;
            case 6:
                //Controller->Method(Param1, Param2, Param3)
                $controller->{$url[1]}($url[2], $url[3], $url[4], $url[5]);
                break;
            case 5:
                //Controller->Method(Param1, Param2, Param3)
                $controller->{$url[1]}($url[2], $url[3], $url[4]);
                break;

            case 4:
                //Controller->Method(Param1, Param2)
                $controller->{$url[1]}($url[2], $url[3]);
                break;

            case 3:
                //Controller->Method(Param1, Param2)
                $controller->{$url[1]}($url[2]);
                break;

            case 2:
                //Controller->Method(Param1, Param2)
                $controller->{$url[1]}();
                break;

            default:
                $controller->index();
                break;
        }

    }


}