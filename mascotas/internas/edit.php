<?php

    include("conexion.php");
    include("../dll/class_mysqli.php");

    $miconexion= new class_mysqli();
	$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM personal WHERE id = $id";
    }


    $resSql = $miconexion->consulta($sql)

    if($resSql){
        echo '<script>alert("Se elimino correctamente");</script>';
		echo "<script>location.href='../'</script>";
	}else{
		echo "Error..  Problemas de sql";
    }

?>