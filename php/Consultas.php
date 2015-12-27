<?php



//Clase para realizar todo tipo de consultas

class Clconsulta
{
    //Método para insertar datos se envia los parametros a guardar y la conexion

    public function insertar($nombres,$apellidos,$alias,$contrasenia,$email,$conexion)
    {
        $insertar="INSERT into Tuser(`nombres`,`apellidos`,`alias`,`contrasenia`,`email`)
        values('$nombres','$apellidos','$alias',AES_ENCRYPT('$contrasenia','alalsdk'),'$email')";

        mysql_query($insertar,$conexion);
        echo "Ingreso satidfactorio";
        mysql_close($conexion)
    }


    public function verificar($email,$contrasenia,$conexion)
    {
        $buscar="SELECT * FROM Tuser";

        result=mysql_query($buscar,$conexion);
        while(result)
        {

        }
    }
}

?>
