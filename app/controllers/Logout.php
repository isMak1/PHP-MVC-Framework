<?php

/**
 * Logout class
 */

class Logout 
{
    use Controller;

    public function index()
    {

        unset($_SESSION['USER']);
        redirect('home');
    }

}
