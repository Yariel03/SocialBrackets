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
        echo "Ingreso satisfactorio";

    }


    public function verificar($email,$contrasenia,$conexion)
    {
        $buscar="SELECT * FROM Tuser
		where email='$email'";

		$decript="SELECT
		contrasenia as encriptado,
		CAST( AES_DECRYPT(contrasenia,'alalsdk') as char(50)) as decry
		FROM tuser";

        $result=mysql_query($buscar,$conexion);
        $result2=mysql_query($decript,$conexion);




        if($row=mysql_fetch_array($result))
		{
			echo $contrasenia." este en la variable<br>";
			while($row2=mysql_fetch_array($result2))
			{

				if($contrasenia==$row2['decry'])
				{
					echo "Esta aqui";
				}
				else
				{
					echo "Contraseña incorrecta";
				}
			}
		}
		else
		{
			echo"No existe";
		}

	}
}
?>


