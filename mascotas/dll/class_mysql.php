<?php

class class_mysql{
    // Variables de conexion
    var $BaseDatos;
    var $Servior;

    var $Usuario;
    var $Clave;

    // Cariables de identifiación de errores

    var $Error="";
    var $Errorno=0;

    // Identidicación de conexion y consultas

    var $Consulta_ID=0;
    var $Conexion_ID=0;


    public function __construct($host="", $user="", $pass="", $db="")
    {
        @$this -> $BaseDatos=$db;
        @$this -> $Usuario=$user;
        @$this -> $Clave=$pass;
        @$this -> $Servior=$host;

    }

    function conectar($host, $user, $pass, $db){
        if($host != "")$this->Servidor=$host;
        if($user != "")$this->Usuario=$user;
        if($pass != "")$this->Clave=$pass;
        if($db != "")$this->BaseDatos=$db;

        // Conecto a la db

        $this->Conexion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);

        if (!$this -> Conexion_ID){
            echo "Error de conexion";
            return 0;
        return $this->Conexion_ID;
        
        }
    }
    function consulta($sql=""){
        if($sql==""){
            echo "Error de SQL";
            return 0;
        }
        // ejecuta la sentencia sql
        $this->Consulta_ID = mysqli_query($this->Conexion_ID, $sql);
        if(!$this->Consulta_ID){
            echo "Error en la sentencia SQL";
            return 0;
        }
        return $this->Consulta_ID;
    }
    // Retorna numero de campos de la consulta
    function numcampos(){
        return mysqli_num_fields($this->Consulta_Id);
    }
    // Retorno el numero de registros de la consulta
    function numregistros(){
        return mysqli_num_rows($this->Consulta_ID);
    }

    function verconsultaCRUD(){
        echo "<table border='1'>";
        echo "<tr>";
        for ($i=0; $i < $this->numcampos(); $i++){
            echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)-> name."</td>";
        }
        echo "<td>Actualizar</td>";
        echo "<td>Borrar</td>";
        echo "</tr>";
        while($row=mysqli_fetch_array($this->Consulta_ID)){
            echo "<tr>";
            for ($i=0; $i < $this->numcampos(); $i++){
                echo "<td>".$row[$i]."</td>";
            }
            echo "<td><a href="update.php?id=$row[0]"></a>Actualizar</td>";
            echo "<td>Borrar</td>";
           
            echo "</tr>";

        }
       
        echo "</table>";
    }

    function verconsulta(){
        echo "<table border='1'>";
        echo "<tr>";
        for ($i=0; $i < $this->numcampos(); $i++){
            echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)-> name."</td>";
        }
        while($row=mysqli_fetch_array($this->Consulta_ID)){
            echo "<tr>";
            for ($i=0; $i < $this->numcampos(); $i++){
                echo "<td>".$row[$i]."</td>";
            }
            echo "</tr>";

        }
        echo "</tr>";
        echo "</table>";
    }
}



?>