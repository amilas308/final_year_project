<?php
    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'syntax_db';
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if($conn->connect_error){
        die('There was problem connecting to the database' . $conn->connect_errno);
    } else{
        // print('Database connected sucessfully');
    }
?>