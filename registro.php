<?php
include_once("db.php");
//Recibo los datos del formulario
    $idpersona=$_POST["idpersona"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $sexo=$_POST["sexo"];
    $estadocivil=$_POST["estadocivil"];
    $sangre=$_POST["sangre"];
    $nacimiento=$_POST["nacimiento"];
    $direccion=$_POST["direccion"];
    $cedula=$_POST["cedula"];

echo "los datos son los siguientes: <br>";
echo "$idpersona, $nombre, $apellido, $edad, $sexo, $estadocivil, $sangre, $nacimiento, $direccion, $cedula";

$conectar = conn();
$sql= "INSERT INTO usuarios (idpersona, nombre, apellido, edad, sexo, estadocivil, sangre, nacimiento, direccion, cedula) VALUES ('$idpersona','$nombre','$apellido','$edad','$sexo','$estadocivil','$sangre','$nacimiento','$direccion','$cedula')";
$resul = mysqli_query($conectar, $sql) or trigger_error("Query failed! SQL= Error:" . mysqli_error($conectar), E_USER_ERROR);

echo "$sql";

?>