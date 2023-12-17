<?php
    session_start();
    session_regenerate_id();
    // print_r($_SESSION["id"]);
    // $_SESSION["email"] = $user["email"];
    if(isset($_SESSION['id'])){
        echo $_SESSION['email'];
    }
?>