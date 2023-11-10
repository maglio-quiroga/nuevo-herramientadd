<?php
include "conexion.php";



$sql="SELECT * FROM clientes";
$consulta=mysqli_query($conexion,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion Crud</title>
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
          <a class="nav-link link" href="#">Nosotros</a>
        </li>
        
        
      </ul>
      </div>
    </div>
    </div>
    </nav>
    <main>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-4">
                    
            <form action="create.php" method="get">
            <div class="container">
                <h1>Crear Cuenta</h1>
                <div class="login3">
                    <input type="email" placeholder="Correo" value="" name="email" style="border-radius: 50px;margin-top: 5px;margin-bottom: 5px;height: 40px;width: 35vh;transform: translateX(100px);">
                    
                    <input type="password" placeholder="Clave" value="" name="pass" style="border-radius: 50px;margin-top: 5px;margin-bottom: 5px;height: 40px;width: 35vh;transform: translateX(100px);">
                    
                    <input type="text" placeholder="Nombre" value="" name="nombre" style="border-radius: 50px;margin-top: 5px;margin-bottom: 5px;height: 40px;width: 35vh;transform: translateX(100px);">
                    
                    <input type="date"  value="" name="fnac" style="border-radius: 50px;margin-top: 5px;margin-bottom: 5px;height: 40px;width: 35vh;transform: translateX(100px);">
                    
                    <p>Genero</p>
                    <div class="rb">
                    <input type="radio" id="hombre" name="genero" value="hombre">
                    <label for="hombre">Hombre</label>
                    <input type="radio" id="mujer" name="genero" value="mujer">
                    <label for="mujer">Mujer</label>
                    <input type="radio" id="otro" name="genero" value="otro">
                    <label for="otro">Otro</label>
                    </div>
                    <br>
                    <p>Productos de interes</p>
                    <div>
                    <input type="checkbox" id="prenda-superior" name="ropa" value="prenda-superior">
                    <label for="prenda-superior">Poleras</label>  
                    <input type="checkbox" id="prenda-inferior" name="ropa" value="prenda-inferior">
                    <label for="prenda-inferior">Pantalones</label>
                    <input type="checkbox" id="calzado" name="ropa" value="calzado">
                    <label for="calzado">Calzado</label>  
                    </div>
                    <button type="submit" style="border-radius: 50px;margin-top: 5px;margin-bottom: 5px;height: 40px;width: 35vh;transform: translateX(100px);">Crear</button>
                </div>
                
            </div>
        </form>
                </div>
                <div class="col-8">
                    <h1>Tabla de usuarios</h1>
                    <table class="table">
                      <thead class="table-success table-striped">
                          <tr>
                            <th>Email</th>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Fecha-nacimiento</th>
                            <th>Genero</th>
                            <th>Productos</th>
                            <th></th>
                            <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php 
                           # while($fila=mysqli_fetch_array($consulta)){
                            while($fila=$consulta->fetch_assoc()){
                          ?>
                          <tr>
                            <th><?php  echo $fila['email'] ?></th>
                            <th><?php  echo $fila['pass'] ?></th>
                            <th><?php  echo $fila['nombre'] ?></th>
                            <th><?php  echo $fila['fnac'] ?></th>
                            <th><?php  echo $fila['genero'] ?></th>
                            <th><?php  echo $fila['productos'] ?></th>
                            <th><a href="crud-act.php?id=<?php  echo $fila['email'] ?>" class="btn btn-info">Actualizar</a></th>
                            <th><a href="crud-del.php?id=<?php  echo $fila['email'] ?>" class="btn btn-danger">Eliminar</a></th>

                           <!--
                            <th>
                              
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  Eliminar
                                </button>

                                
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Alerta de Seguridad</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        Estas a punto de eliminar el usuario <?php #echo $fila['nombre']?>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <a href="crud-del.php?id=<?php  #echo $fila['email'] ?>" class="btn btn-warning">Eliminar</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </th>
                            -->
                          </tr>
                          <?php
                            }
                          ?>
                      </tbody>
                  </table>
                </div>
            </div>    
        </div>

    </main>
    <section class="pt-5">
         <div class="container text-center">
            <h1>Busqueda</h1>
            <form action="" method="get" style="margin:20px;">
                  <input type="text" name="correo" placeholder="ingrese el email del usuario" style="width:300px;border-radius:25px;">
                  <input type="submit" value="buscar" class="btn btn-primary">
            </form>
            
            <?php
            
                if(isset($_GET['correo']) && $_GET['correo'] !=''){
                  include "conexion.php";
                  if($conexion->connect_error){
                    echo "no se pudo conectar";
                  }else{
                    echo "se pudo conectar";
                    $correo=$_GET['correo'];
                    $sql="SELECT * FROM clientes WHERE email LIKE '%$correo%'";
                    $result=$conexion->query($sql);
                    if($result->num_rows > 0){
                      echo " hay registros";


                      echo "<table class='table'>";
                      echo "<thead class='table-success table-striped'>";
                        echo  "<tr>";
                        echo "<th>Email</th>";
                        echo  "<th></th>";
                        echo  "<th>Clave</th>";
                        echo  "<th></th>";
                        echo  "<th>Nombre</th>";
                        echo  "<th></th>";
                        echo  "<th>Fecha-nacimiento</th>";
                        echo  "<th></th>";
                        echo  "<th>Genero</th>";
                        echo  "<th></th>";
                        echo  "<th>Productos</th>";
                        echo  "<th></th>";
                        echo  "<th></th>";
                        echo  "<th></th>";
                        echo  "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        
                        while($row=$result->fetch_assoc()){
                          echo "<tr>";

                          echo "<th>".$row['email']."<th>";
                          echo "<th>".$row['pass']."<th>";
                          echo "<th>".$row['nombre']."<th>";
                          echo "<th>".$row['fnac']."<th>";
                          echo "<th>".$row['genero']."<th>";
                          echo "<th>".$row['productos']."<th>";
                          echo "<th><a href='crud-act.php?id=".$row['email']."' class='btn btn-info'>Actualizar</a></th>";
                          echo "<th>

                          
                          <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                            Eliminar
                          </button>
                          
                         
                          <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h1 class='modal-title fs-5' id='staticBackdropLabel'>Alerta de seguridad</h1>
                                  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                  Usted esta a punto de eliminar al usuario seleccionado,¿esta seguro?
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                  <a href='crud-del.php?id=".$row['email']."' class='btn btn-warning'>Eliminar</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          </th>";

                          echo "</tr>";
                        }
                        
                        echo "</tbody>";
                      echo "</table>";
        

                    }else{
                      echo "no hay registros";
                    }
                  }
                }
            
            ?>
         </div>                   
    </section>

    <footer class="fot ">
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