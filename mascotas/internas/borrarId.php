<?php

    // extract($_POST);


    include("../dll/conexion.php");


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM personal WHERE id = $id";
    }


    $resSql = mysqli_query($conexion, $sql);

    // $idPersonal=$_POST['idPersonal'];
   


    // $sql = "delete from personal where id=$idPersonal";


    // $resSql=mysqli_query($conn, $sql);




    if($resSql){
        echo '<script>alert("Sus datos se eliminaron correctacmente");</script>';
        echo "<script>location.href='../'</script>";
    } else {
        echo "Problemas de sql";
    }
   

?>