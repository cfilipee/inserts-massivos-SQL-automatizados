<?php

    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa";
   
    $conn = mysqli_connect($server, $user, $pass, $bd);
    
 
?>