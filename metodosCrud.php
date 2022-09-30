<?php
class Metodos{
    public function mostrarDatos($sql){
        $c=new conectar();
        $conexion=$c->conexion();
        $result=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
        
    }
    public function insertarDatosNombre($datos){
        $c=new conectar();
        $conexion=$c->conexion();
        $sql="INSERT into t_datos (nombreDis,modelo,marca,color,descripcion)
                                  values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";

    return $result=mysqli_query($conexion,$sql);

    }
    public function actualizaDatosNombre($datos){
        $c= new conectar();
        $conexion=$c->conexion();
        $sql="UPDATE t_datos set nombreDis='$datos[0]'
                                ,modelo='$datos[1]' 
                                ,marca='$datos[2]'
                                ,color='$datos[3]'
                                ,descripcion='$datos[4]'
                                where id='$datos[5]'";
                                
            return $result=mysqli_query($conexion,$sql);
    }
    public function eliminarDatos($id){
        $c= new conectar();
        $conexion=$c->conexion();
        $sql="DELETE from t_datos where id='$id'";
        return $result=mysqli_query($conexion,$sql);
    }

}
?>
