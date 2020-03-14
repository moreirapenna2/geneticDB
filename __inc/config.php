<?php
    /**
     * @var DB_SERVER database server URL
     * @var DB_USERNAME database login username
     * @var DB_PASSWORD database login password
     * @var DB_DATABASE database name
     * @var db database object
     */
    define('DB_SERVER', 'localhost:3306');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_DATABASE', 'geneticdb');
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    define('DIR', 'C:\xampp\htdocs');
?>