<?php

trait Controller
{
    public function view($name, $data = [])
    {
        if(!empty($data))
            extract($data);

        $filename = "../app/views/".$name.".view.php";
        
        file_exists($filename) ? require $filename : require "../app/views/404.view.php";

    }
}