<?php

    // extract($_POST);

    include("../dll/config.php");
    include("../dll/class_mysqli.php");
    $miconexion = new class_mysqli();
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $nombre=$_GET['nombre'];
        $edad=$_GET['edad'];
        $raza=$_GET['raza'];
        $postulaciones=$_GET['postulaciones'] + 1;

        $sql = "INSERT INTO mascota VALUES(null, $nombre, $edad, $raza, $postulaciones)"
    }



    $resSql = $miconexion->consulta($sql);

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