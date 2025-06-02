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
    $TipodeCredito = $_POST['Tipo de Creditp'];
    $Cantidad = $_POST['Cantidad'];
    $Plazo = $_POST['Plazo'];
    $FechaInicio = $_POST['Fecha Inicio'];
    $FechaVencimiento = $_POST['Fecha Vencimiento'];
 

    $consulta = "INSERT INTO Tipo de Credito(Tipo de Credito, Cantidad, Plazo, Fecha Inicio, Fecha Vencimiento ) 
    VALUES ('$TipodeCredito', '$Cantidad', '$Plazo', '$FechaInicion', '$FechaVencimiento')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
function eliminar($conexion){
    $Nombre = $_POST['Nombre'];
   

    $consulta = "DELETE FROM Tipo de Credito WHERE Tipo de Credito='$Tipo de Credito'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
}
?>