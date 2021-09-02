<?php
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Guerrero S.A.</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">


    <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
      <a class="navbar-brand" href="#">
        <img src="./img/logo.png" alt="logo" style="max-height: 150px; max-width: 250px;">
      </a>
      <ul class="nav nav-pills">
  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prueba">Servicios Médicos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cita">Agendar Cita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="administrativos/login.php" tabindex="-1" aria-disabled="true">Acceder</a>
        </li>
        <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
            <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
          </ul>
        </li>-->
      </ul>
    </nav>
    
</head>
<body>
  
  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
<!--aquí inicia carrusel-->
   <div id="home" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="./img/medicos.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Médicos Especialistas</h5>
          <p>Tenemos los médicos especialistas de diversas áreas de la salud con la más alta capacidad.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="./img/operacion.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="./img/pediatria.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/enfermeria.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!--aquí termina carrusel-->

<!--aquí empieza las tarjetas-->
<h2 id="prueba" class="text-center pt-5 mb-5">SERVICIOS MÉDICOS</h2>
<div margin-bottom: 5000px id="servicios" class="row row-cols-1 row-cols-md-3 g-4">

  <div top-1500 class="col">
    <div class="card">
      <img src="./img/oftamologia.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">OFTALMOLOGÍA</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget sagittis purus, eu mollis eros. Etiam dignissim bibendum augue at mattis. In feugiat tempus libero, quis mattis ante viverra ac. Integer ultricies mi et enim fringilla facilisis. Donec scelerisque mauris ac massa varius tempor. Mauris id sapien nec sapien vestibulum condimentum. Praesent semper libero ante, in tempor ante auctor et. Aenean eget suscipit nulla.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/otorrino.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">OTORRINOLARINGOLOGÍA</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget sagittis purus, eu mollis eros. Etiam dignissim bibendum augue at mattis. In feugiat tempus libero, quis mattis ante viverra ac. Integer ultricies mi et enim fringilla facilisis. Donec scelerisque mauris ac massa varius tempor. Mauris id sapien nec sapien vestibulum condimentum. Praesent semper libero ante, in tempor ante auctor et. Aenean eget suscipit nulla.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/cirugia.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CIRUGÍA GENERAL</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget sagittis purus, eu mollis eros. Etiam dignissim bibendum augue at mattis. In feugiat tempus libero, quis mattis ante viverra ac. Integer ultricies mi et enim fringilla facilisis. Donec scelerisque mauris ac massa varius tempor. Mauris id sapien nec sapien vestibulum condimentum. Praesent semper libero ante, in tempor ante auctor et. Aenean eget suscipit nulla.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/gine.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">GINECO-OBSTETRICIA</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget sagittis purus, eu mollis eros. Etiam dignissim bibendum augue at mattis. In feugiat tempus libero, quis mattis ante viverra ac. Integer ultricies mi et enim fringilla facilisis. Donec scelerisque mauris ac massa varius tempor. Mauris id sapien nec sapien vestibulum condimentum. Praesent semper libero ante, in tempor ante auctor et. Aenean eget suscipit nulla.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/dent.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ESTOMATOLOGÍA</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget sagittis purus, eu mollis eros. Etiam dignissim bibendum augue at mattis. In feugiat tempus libero, quis mattis ante viverra ac. Integer ultricies mi et enim fringilla facilisis. Donec scelerisque mauris ac massa varius tempor. Mauris id sapien nec sapien vestibulum condimentum. Praesent semper libero ante, in tempor ante auctor et. Aenean eget suscipit nulla.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./img/pediatria2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PEDIATRÍA</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget sagittis purus, eu mollis eros. Etiam dignissim bibendum augue at mattis. In feugiat tempus libero, quis mattis ante viverra ac. Integer ultricies mi et enim fringilla facilisis. Donec scelerisque mauris ac massa varius tempor. Mauris id sapien nec sapien vestibulum condimentum. Praesent semper libero ante, in tempor ante auctor et. Aenean eget suscipit nulla.</p>
      </div>
    </div>
  </div>
</div>

<!--aquí terminan las tarjetas-->

<!--aquí empieza el form-->
<form action="nss/validar_nss.php" method="POST">
  <div id="cita" class="mb-3 p-3 bg-primary text-white">
    <h2>¿DESEA AGENDAR UNA CITA?</h2>
    <label for="exampleInputEmail1" class="form-label">Ingrese su Número de Seguridad Social</label>
    <input type="number" class="form-control" name="nss" aria-describedby="emailHelp" placeholder="Ingrese solo números" required>
  </div>
  <button type="submit" class="btn btn-primary">Verificar</button>
</form>
<!--aquí terminan el form-->


    <div id="contacto" class="form-2">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>¿NECESITA AYUDA? CONTACTENOS</h2>
                  <ul class="list-unstyled li-space-lg">
                      <li class="address">No dude en llamarnos o enviarnos un mensaje con el formulario de contacto</li>
                      <li><i class="fas fa-map-marker-alt"></i>Zona Sin Asignación de Nombre de Col 44, 39097 Chilpancingo de los Bravo, Gro.</li>
                      <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">7471332569</a></li>
                      <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">atencion@hospitalguerrero.mx</a></li>
                  </ul>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
          <div class="row">
              <div class="col-lg-6">
                  <div class="map-responsive">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.592194373499!2d-102.25565696074882!3d19.983645396424514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e861d6df85b4f%3A0x87648cce4f8652d5!2sFraccionamiento%20Monte%20Olivo%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1608249635364!5m2!1ses-419!2smx" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
              </div> <!-- end of col -->
              <div class="col-lg-6">
                  
                  <!-- Contact Form -->
                  <form id="contactForm" data-toggle="validator" data-focus="false">
                      <div class="form-group">
                          <input type="text" class="form-control-input" id="cname" required>
                          <label class="label-control" for="cname">Nombre</label>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control-input" id="cemail" required>
                          <label class="label-control" for="cemail">Email</label>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                          <textarea class="form-control-textarea" id="cmessage" required></textarea>
                          <label class="label-control" for="cmessage">Mensage</label>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                          <!--button type="submit" class="form-control-submit-button">Enviar mensaje</button-->
                      </div>
                      <div class="form-message">
                          <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                      </div>
                  </form>
                  <!-- end of contact form -->

              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </div> <!-- end of form-2 -->
  <!-- end of contact -->




  </div>









  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>  
</body>
</html>