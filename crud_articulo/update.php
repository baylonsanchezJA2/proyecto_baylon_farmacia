<?php

include("conexion.php");
$con=conectar();

$IDarticulo=$_POST['IDarticulo'];
$Nombre=$_POST['Nombre'];
$Precio=$_POST['Precio'];
$Cantidad=$_POST['Cantidad'];
$Fecha_vendido=$_POST['Fecha_vendido'];
$Descripcion=$_POST['Descripcion'];
$Tiempo_entrega=$_POST['Tiempo_entrega'];

$sql="UPDATE articulo SET  Nombre='$Nombre',Precio='$Precio',Cantidad='$Cantidad',Fecha_vendido='$Fecha_vendido',Descripcion='$Descripcion',Tiempo_entrega='$Tiempo_entrega' WHERE IDarticulo='$IDarticulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>