<?php

    // extract($_POST);


    include("../dll/config.php");
    include("../dll/class_mysqli.php");
    

    $miconexion = new class_mysqli();
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $cedula=$_POST['cedula'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $fechaNacimiento=$_POST['fecha'];
    $correo=$_POST['correo'];
    $mascota=$_POST['miselector'];

    $sql = "insert into personal values(null,'$nombres','$apellidos','$cedula','$direccion', '$correo')";
    $resSql = $miconexion->consulta($sql);
   
    // $id=LAST_INSERT_ID($miconexion)
    

    // $resSql = mysqli_query($conexion, $sql);

   
    // // $nombre=$_GET['nombre'];
    // // $edad=$_GET['edad'];
    // // $raza=$_GET['raza'];
    
    // // $postulaciones=$_GET['postulaciones'];

    // mysqli_query($link, $query);
    
    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];
    //     $sql = "DELETE FROM personal WHERE id = $id";
    // }

    

  

    // $sql2 = "INSERT INTO mascota values(null, '$nombre', '$edad', '$raza', 12,'$id')";

    $sql3 = "UPDATE mascota SET postulaciones = postulaciones + 1 WHERE nombre=$mascota";
    $resSql2 = $miconexion->consulta($sql);

    

    

    
    
   
    // $resSql2 = $miconexion->consulta($sql2);



    // $sql = "delete from personal where id=3";


    if($resSql){
        echo "Sus datos se han registrado correctamente con el id id";
       
    } else {
        echo "Problemas de sql";
    }
   

?>