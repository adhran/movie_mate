<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'Adhran');
    define('DB_PASS', 'adhran12345');
    define('DB_NAME', 'movie_mate');

    //Create connection

    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    // Check connection

    if(@$conn->connect_error){
        die('Connection Failed' . $conn->connect_error);
    }


    ?>