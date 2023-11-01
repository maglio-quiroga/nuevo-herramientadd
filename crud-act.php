<?php
$server = "localhost";
$user = "root";
$pass = "maglio100";
$db ="tarea1";

$conexion = new mysqli($server,$user,$pass,$db);

$email_a_actualizar=$_GET['id'];
$sql="SELECT * FROM clientes WHERE email='$email_a_actualizar'";
$query=mysqli_query($conexion,$sql);
$datos=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<nav class="navbar  navbar-expand-lg bg-primary">
    <div class="container-fluid c-navbar">
    <div>
    <a class="navbar-brand link" href="#">La Boutique</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div>
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link link" href="index.php">Inicio</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link link" href="api-crud.php">Gestion</a>
        </li>
        
        
      </ul>
      </div>
    </div>
    </div>
    </nav>

    <main style="margin-top: 40px;">
        <form action="sql-act.php" method="get">
            <div class="container">
                <h1 class="text-center">Modificar datos</h1>
                <div class="login2">
                    <input type="hidden" name="id" value="<?php  echo $datos['email'] ?>">
                    <input type="email" placeholder="Correo" value="<?php  echo $datos['email'] ?>" name="email" readonly>
                    <input type="password" placeholder="Clave" value="<?php  echo $datos['pass'] ?>" name="pass" readonly>
                    <input type="text" placeholder="Nombre" value="<?php  echo $datos['nombre'] ?>" name="nombre">
                    <input type="date"  value="<?php  echo $datos['fnac'] ?>" name="fnac">
                    <p>Genero</p>
                    <div class="rb">
                    <input type="radio" id="hombre" name="genero" value="hombre" <?php if ($datos['genero'] == "hombre") echo "checked"; ?>>
                    <label for="hombre">Hombre</label>
                    <input type="radio" id="mujer" name="genero" value="mujer" <?php if ($datos['genero'] == "mujer") echo "checked"; ?>>
                    <label for="mujer">Mujer</label>
                    <input type="radio" id="otro" name="genero" value="otro" <?php if ($datos['genero'] == "otro") echo "checked"; ?>>
                    <label for="otro">Otro</label>
                    </div>
                    <br>
                    <p>Productos de interes</p>
                    <div>
                    <input type="checkbox" id="prenda-superior" name="ropa" value="prenda-superior" <?php if ($datos['productos'] == "prenda-superior") echo "checked"; ?>>
                    <label for="prenda-superior">Poleras</label>  
                    <input type="checkbox" id="prenda-inferior" name="ropa" value="prenda-inferior" <?php if ($datos['productos'] == "prenda-inferior") echo "checked"; ?>>
                    <label for="prenda-inferior">Pantalones</label>
                    <input type="checkbox" id="calzado" name="ropa" value="calzado" <?php if ($datos['productos'] == "calzado") echo "checked"; ?>>
                    <label for="calzado">Calzado</label>  
                    </div>
                    <button type="submit" style="margin-top: 30px;">Modificar</button>
                </div>
                
            </div>
        </form>
    </main>
    <footer class="fot" style="margin-top: 40px;">
        <div class="container-fluid" >
          <div class="row text-center">
              <div class="col-3">
                <p>Moda Y Textil</p>
                <p>Tus marcas preferidas aqui</p>
                <p>Tus ropas preferidas aqui</p>
                <p>Tus estilos preferidas aqui</p>
              </div>
              <div class="col-3">
                <p>Contactos</p>
                <a href="" class="enlace"><p>enlace 1</p></a>
                <a href="" class="enlace"><p>enlace 2</p></a>
                <a href="" class="enlace"><p>enlace 3</p></a>
              </div>
              <div class="col-3">
                <p>Acerca de</p>
                <a href="" class="enlace"><p>enlace 1</p></a>
                <a href="" class="enlace"><p>enlace 2</p></a>
                <a href="" class="enlace"><p>enlace 3</p></a>
              </div>
              <div class="col-3">
                  <div class="row-12"><p>Redes</p></div>
                  <div class="row-12">
                    <img src="imagenes/face.png" alt="logo face"  class="img-redes">
                  </div>
                  <div class="row-12"><img src="imagenes/insta.jpg" alt="logo face"  class="img-redes"></div>
                  <div class="row12"><img src="imagenes/twiter.png" alt="logo face" class="img-redes"></div>
              </div>
          </div>
          <div class="row pt-2">
              <div class="col-12 text-center">
                <h3>©2023 Maglio Quiroga</h3>
              </div>
          </div>
        </div>
    </footer>
</body>
</html>