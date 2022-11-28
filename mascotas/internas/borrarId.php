<?php

    // extract($_POST);


    include("../dll/conexion.php");

    $idPersonal=$_POST['idPersonal'];
   


    $sql = "delete from personal where id=$idPersonal";


    $resSql=mysqli_query($conn, $sql);




    if($resSql){
        echo '<script>alert("Sus datos se eliminaron correctacmente");</script>';
        echo "<script>location.href='../'</script>";
    } else {
        echo "Problemas de sql";
    }
   

?>