<?php
error_reporting(E_ALL ^ E_NOTICE);
require "config.php";
?>

<!DOCTYPE html>
<html lang="es">
<!--cabezera-->
<head>
    <title>Social - Inicia sesión</title>

    <!-- información para el navegador-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- css-->

    <link rel="icon" href="img/icon_64.png" sizes="16x16">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrapvalidator/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrapvalidator/bootstrapValidator.css">

    <!--    javascript-->

    <script type="text/javascript" src="css/bootstrapvalidator/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/validaciones.js"></script>
    <script type="text/javascript" src="css/bootstrapvalidator/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/bootstrapvalidator/bootstrapValidator.js"></script>

 </head>


  <!--cuerpo-->

  <body>

    <!--barra permanete de navegación/header-->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="navbar-inner">
        <div class="container">
            <div class="navbar-header">

                <!--Nombre de la pagina-->
                <a class="navbar-brand" href="index.html">Social</a>

            </div>
        </div>
     </div>
    </nav>

      <!--   contenedor-->

      <div class="container">



            <!--contenedor de la izquierda-->

            <div class="izquierda">
                <p>
                  <h1>
                   La nueva red social para todas tus actividades
                  </h1>
                </p>

                <img src="img/Logo2.png" alt="logo">
            </div>


            <!--contenedor de la derecha-->

            <div class="derecha">

                    <!--formulario para login-->

                    <form action="php/login.php" id="formlogin"  method="post">
                        <!--grupos de input y label para validar y funcione el bootstrapValidator-->

                       <div class="form-group">

                            <label class="col-lg-9 control-label">
                             <h3>Correo eléctronico</h3>
                            </label>

                            <div class="col-lg-9">
                             <input class="form-control" type="email"  name="txtemail">
                            </div>
                        </div>


                        <!--grupo-->
                       <div class="form-group">

                            <label class="col-lg-9 ">
                                <h3>Contraseña</h3>
                            </label>


                            <div class="col-lg-9">
                                <input class="form-control" type="password"  name="txtcontrasenia">
                            </div>
                        </div>




                        <!--grupo-->
                        <div class="form-group">
                           <div class="col-lg-7">
                            <br>
                            <input type="submit" class="btn btn-primary" value="Entrar">
                           </div>
                        </div>

                    </form>

                     <!-- registrarse -->

                       <div class="registro">
                            <h6>No esta registrado?</h6>
                            <?php
                      echo '<a href="'.C.'registro.html">Registrate</a>';
						   ?>
                       </div>
        </div>







    </div>

</body>
</html>


