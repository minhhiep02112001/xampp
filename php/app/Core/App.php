<?php
    namespace App\Core;
    use App\Controllers\HomeController;

    class App
    {
        public  function __construct()
        {
            $home = new HomeController();
        }
    }