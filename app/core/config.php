<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    /** database config */
    define('DBNAME', 'mvc_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASSWORD', '');
    /** for postgresql you can also add */
    define('DBDRIVER', '');
    
    define('ROOT', 'http://localhost/testmvc/public');
}

else
{
    /** database config */
    define('DBNAME', 'mvc_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASSWORD', '');
    define('DBDRIVER', '');

    define('ROOT', 'https://www.yourwebsite.com');
}

define('APP_NAME', "My Website");
define('APP_DESCRIPTION', "Best website on the planet");

/** Once on live server turn this to false to not display BUGS to user*/
define('DEBUG', true);