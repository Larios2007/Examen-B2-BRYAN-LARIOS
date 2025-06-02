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
    $NombredeArea = $_POST['Nombre de Area'];
    $Equipo = $_POST['Equipo'];
    $Horarios = $_POST['Horarios'];
    $DiasLaborales = $_POST['Dias Laborales'];
    $Ventanilla = $_POST['Ventanilla'];
 

    $consulta = "INSERT INTO Area Laboral(Nombre de Area, Equipo, Horarios, Dias Laborales, Ventanilla ) 
    VALUES ('$NombredeArea', '$Equipo', '$Horarios', '$DiasLaborales', '$Ventanilla')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
function eliminar($conexion){
    $Nombre = $_POST['Nombre'];
   

    $consulta = "DELETE FROM Area Laboral WHERE Nombre de Area='$NombredeArea'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
}
?>