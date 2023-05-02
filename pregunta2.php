<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Datos del usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Meta de responsividad -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
      body{
        margin: 30px;
      }
      .row {
        max-width: 800px;
        margin: 0 auto;
        border: 2px solid #D5D1D0;
        border-radius: 10px;
        overflow-x: hidden;
      }
      
      h1 {
        border-bottom: 2px solid #D5D1D0;
        padding: 10px;
        margin-top: 0;
        background-color: #e9e7e7a5;
        width: 100%;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <div class="row">
    <h1 class="text-center">Bienvenido/a</h1>
      <div class="col-12">
        <div class="col-md-12">
          <?php
            $nombre_apellido = $_POST["nombre_apellido"];
            $direccion = $_POST["direccion"];
            $email = $_POST["email"];
            $edad = $_POST["edad"];
            
            echo "<p>¡Hola " . $nombre_apellido . "<span>!</span></p>";
            echo "<p>Tu dirección es " . $direccion . "</p>";
            echo "<p>Tienes " . $edad . " años y tu correo es " . $email . "</p>";
          ?>
        </div>
      </div>
    </div>
  </body>
</html>