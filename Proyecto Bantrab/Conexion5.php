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
    $Correo = $_POST['Correo'];
    $IngresosSustentables = $_POST['Ingresos Sustentables'];
    $CuotaMensual = $_POST['Cuota Mensual'];
    $HistorialCrediticio = $_POST['Historial Crediticio'];

    $consulta = "INSERT INTO Cliente(Nombre, Direccion, Telefono, Correo, Ingresos Sustentables, Cuota Mensual, Historial Crediticio) 
    VALUES ('$Nombre', '$Direccion', '$Telefono', '$Correo', '$IngresosSustentables','$CuotaMensual','$HistorialCrediticio')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
function eliminar($conexion){
    $Nombre = $_POST['Nombre'];
   

    $consulta = "DELETE FROM Cliente WHERE Nombre='$Nombre'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
}
?>