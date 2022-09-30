<?php
require_once "conexion.php";
$obj=new conectar();
$conexion=$obj->conexion();
$id=$_GET['id'];
$sql="SELECT nombreDis,modelo,marca,color,descripcion
        from t_datos where id='$id'";
        $result=mysqli_query($conexion,$sql);
        $ver=mysqli_fetch_row($result);

?>  
<html lang="es">
<head>
    <title>Document</title>
</head>
<body>
        <form action="procesos/actualizar.php" method="post">
        <input type="text" hidden="" value="<?php echo $id?>" name="id">
            <p></p>
            <label>nombreDis</label>
            <p></p>
            <input type="text"name="txtnombreDis " value="<?php echo $ver[0]?>">
            <p></p>
            <label>modelo</label>
            <p></p>
            <input type="text" name="txtmodelo" value="<?php echo $ver[1]?>">
            <p></p>
            <label>marca</label>
            <p></p>
            <input type="text" name="txtmarca"value="<?php echo $ver[2]?>">
            <p></p>
            <label>color</label>
            <p></p>
            <input type="text" name="txtcolor" value="<?php echo $ver[3]?>">
            <p></p>
            <label>descripcio</label>
            <p></p>
            <input type="text" name="txtdescripcion" value="<?php echo $ver[4]?>">
            <p></p>    
            <button>agregar</button>
</form>
</body>
</html>