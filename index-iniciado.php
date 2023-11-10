<?php

if (isset($_GET['user'])) {
    $mensaje = $_GET['user'];
    // Haz algo con el mensaje
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
        <li class="nav-item">
        <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $mensaje;?>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php">Cerrar sesion</a></li>
        </ul>
        </div>
        </li>
        <button type="button" class="boton-nav boton-nav" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Registrarse
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h1 id="exampleModalLabel">Registro</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="iniciar-sesion.php">
                        <div class="form">
                            <h1>Iniciar Sesion</h1>
                            <div class="login" >
                                <input type="email" placeholder="Correo" value="" name="correo">
                                <br>
                                <input type="password" placeholder="Clave" value="" name="pass">
                                <br>
                                <button type="submit">Iniciar sesion</button>
                                <br>
                            </div>
                            <div class="forgot" >
                                <div class="flex-f">
                                    <p>No tienes cuenta?</p>
                                    <a href="crear-cuenta.html" class="enlace">Registrate</a><br>
                                    <a href="recuperar-clave.php" class="enlace">Recuperar Clave</a>
                                </div>                        
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  
                </div>
              </div>
            </div>
          </div>
        
      </ul>
      </div>
    </div>
    </div>
    </nav>
    <header>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imagenes/Banner horizontal descuento en indumentaria moderna amarillo y negro.png" class="d-block w-100 b-imagen" alt="...">
              </div>
              <div class="carousel-item ">
                <img src="imagenes/Banner horizontal descuento en indumentaria moderna amarillo y negro.png" class="d-block w-100 b-imagen" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </header>
    <section class="bg-white">
        <div class="container pt-5">
            <div class="row titulo">
                <div class="col-12 text-center">
                    <h1>Las marcas que tenemos son:</h1>
                </div>
            </div>
            <div class="row marcas pt-5">
              <div class="col-4"><img src="imagenes/accesorios.png" alt="" class="rounded marca"></div>
              <div class="col-4"><img src="imagenes/imagenlogocara.png" alt="" class="rounded marca"></div>
              <div class="col-4"><img src="imagenes/accesorios.png" alt="" class="rounded marca"></div>
            </div>
            <div class="row pt-3">
                <div class="col-4 text-center titulo texto">
                    <h2>Marca 1</h2>
                </div>
                <div class="col-4 text-center titulo texto">
                  <h2>Marca 2</h2>
              </div>
              <div class="col-4 text-center titulo texto">
                <h2>Marca 3</h2>
            </div>
            </div>
        </div>
    </section>
    <main class="pt-3">
          <div class="container-fluid pt-5 main">
              
              <div class="row pt-5">
                  <div class="col-6 text-center">
                    <h1 style="color: white;">Video de prescentacion</h1>
                    <iframe class="video" width="580vh" height="410vh" src="https://www.youtube.com/embed/-SQA4-AJ_JM?si=UXPiPtoI1lHhnYlY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                    </iframe>
                  </div>
                  <div class="col-6 text-center">
                    <h1 style="color: white;">Preguntas Frecuentes</h1>
                    <div class="accordion accordion-flush pt-5" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Pregunta 1: ¿Cómo puedo saber si la ropa me quedará bien?
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">La mejor manera de asegurarte de que la ropa te quede bien es tomar tus medidas y compararlas con la tabla de tallas proporcionada por la tienda. Si no estás seguro de cómo tomar tus medidas, la mayoría de las tiendas tienen una guía de medición en su sitio web. Además, muchos sitios web tienen una política de devolución gratuita, lo que significa que puedes devolver la ropa si no te queda bien</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Pregunta 2: ¿Cuánto tiempo tardará en llegar mi pedido?
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">El tiempo de envío depende de varios factores, como tu ubicación y el método de envío que elijas. La mayoría de las tiendas proporcionan una estimación del tiempo de envío en su sitio web. Si necesitas tu pedido con urgencia, asegúrate de elegir un método de envío más rápido.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Pregunta 3: ¿Cómo puedo pagar mi pedido?
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">La mayoría de las tiendas aceptan tarjetas de crédito y débito como forma de pago. Algunas tiendas también aceptan PayPal y otros métodos de pago en línea. Asegúrate de leer la política de pago en el sitio web antes de realizar tu pedido.</div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="container text-center pt-5">
            <div class="row titulo">
              <div class="col-12">
                <h1>Productos</h1>
              </div>
          </div>
          </div>
          <div class="container pt-5 text-center">
              
              <div class="row pt-4" >
                  <div class="col-3">
                    <div class="card" style="width: 16rem;">
                      <img src="imagenes/Black White Professional Concept Shoes Store Logo.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Zapatos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    
                      <div class="card" style="width: 16rem;">
                        <img src="imagenes/img2paranosotros.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Pantalones</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                      </div>
                    
                  </div>
                  <div class="col-3">
                    
                      <div class="card" style="width: 16rem;">
                        <img src="imagenes/Tan Brown Closet Collection Clothing Fashion Logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Poleras</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                      </div>
                    
                  </div>
                  <div class="col-3">
                    
                    <div class="card" style="width: 16rem;">
                      <img src="imagenes/Black White Professional Concept Shoes Store Logo (1).png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Accesorios</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                      </div>
                    </div>
                  
                </div>
              </div>
          </div>
    </main>
    <section class="pt-5">
      <div class="container-fluid text-center titulo2"><h1>Nuestra tienda</h1></div>
      <div class="container-fluid tienda">
              
      </div>
    </section>
    <footer class="fot">
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