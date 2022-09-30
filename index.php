<?php
require_once"conexion.php";
require_once"metodosCrud.php";
?>

<!DOCTYPE html>
<html >
<head>
    
    <title>Document</title>
</head>
<body>
<form action="procesos/insertar.php" method="post">
    <label>nombreDis</label>
    <p></p>
    <input type="text"name="txtnombreDis">
    <p></p>
    <label>modelo</label>
    <p></p>
    <input type="text" name="txtmodelo">
    <p></p>
    <label>marca</label>
    <p></p>
    <input type="text" name="txtmarca">
    <p></p>
    <label>color</label>
    <p></p>
    <input type="text" name="txtcolor">
    <p></p>
    <label>descripcio</label>
    <p></p>
    <input type="text" name="txtdescripcion">
    <p></p>    
    <button>agregar</button>
</form>
   <br>
            <table style="border-collapse:collapse;" border="1">
                <tr>
                    <td>nombreDis</td>
                    <td>modelo</td>
                    <td>marca</td>
                    <td>color</td>
                    <td>descripcion</td>
                    <td>fecha</td>
                    <td>actualiza</td>
                    <td>Eliminar</td>
                </tr>
                <?php

                $obj=new Metodos();
                $sql="SELECT id,nombreDis,modelo,marca,color,descripcion,fecha from t_datos";
                $datos=$obj->mostrarDatos($sql);

                foreach ($datos as $key){            
                
                ?>
                <tr>
                    <td><?php echo $key['nombreDis'];?></td>
                    <td><?php echo $key['modelo'];?></td>
                    <td><?php echo $key['marca'];?></td>
                    <td><?php echo $key['color'];?></td>
                    <td><?php echo $key['descripcion'];?></td>
                    <td><?php echo $key['fecha'];?></td>
                    <td><a href="editar.php?id=<?php echo $key['id'] ?>">Editar</a></td>
            <td><a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a></td>
                </tr>
                <td>
                <?php
                }
                ?>
            </table>  
</body>
</html>