<?php
    $servername = "localhost";
    $database = "petsbd";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);


    if($conn -> connect_errno){  
        echo "Hay problemas de conexion";
    }
?>
