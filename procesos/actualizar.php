<?php
require_once "../conexion.php";
require_once "../metodosCrud.php";

$nombreDis=$_POST['txtnombreDis'];
$modelo=$_POST['txtmodelo'];
$marca=$_POST['txtmarca'];
$color=$_POST['txtcolor'];
$descripcion=$_POST['txtdescripcion'];
$id=$_POST['id'];

$datos=array(
            $nombreDis,
            $modelo,
            $marca,
            $color,
            $descripcion,
            $id
            );

$obj=new Metodos(); 
if($obj->actualizaDatosNombre($datos)==1){
    header("location:../index.php");

}else{
    echo"fallo al agregar";
    
}

?>