<?php

$conexion = mysqli_connect('localhost','root','','Bantrab') or die(mysqli_error($mysqli));
diferencia($conexion);

function diferencia($conexion){

    if(isset($_POST['Registrar'])){
        insertar($conexion);
    }
    if(isset($_POST['Borrar'])){
        eliminar($conexion);
    }
}
insertar($conexion);

function insertar($conexion){
    $Nombre = $_POST['Nombre'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    $Email = $_POST['Correo'];
    $DPI = $_POST['DPI'];
    $Sueldo = $_POST['Sueldo'];
  

    $consulta = "INSERT INTO empresa(Nombre, Direccion, Telefono, Email, DPI, Sueldo) 
    VALUES ('$Nombre', '$Direccion', '$Telefono', '$Email', '$DPI','$Sueldo')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
function eliminar($conexion){
    $Nombre = $_POST['Nombre'];
   

    $consulta = "DELETE FROM Empresa WHERE Nombre='$Nombre'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
}
?>