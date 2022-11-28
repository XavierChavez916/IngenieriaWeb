<?php

    // extract($_POST);


    include("../dll/config.php");
    include("../dll/class_mysql.php");
    $miconexion = new class_mysql();
    $miconexion->conectar(DBHOST, DBSUSER, DBPASS, DBNAME);

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $cedula=$_POST['cedula'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $fechaNacimiento=$_POST['fecha'];
    $correo=$_POST['correo'];


    $sql = "insert into personal values(null,'$nombres','$apellidos','$correo','$telefono', '$direccion', '$fechaNacimiento')";

    $resSql = $miconexion->consulta($sql);



    // $sql = "delete from personal where id=3";


    if($resSql){
        echo "Sus datos se han registrado correctamente";
    } else {
        echo "Problemas de sql";
    }
   

?>