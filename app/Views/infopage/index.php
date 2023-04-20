<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Capital Mining</title>
  <meta name="author" content="@topherlid on github">
  <meta name="description" content="Productos y soluciones enfocados al ámbito de la minería de Chile">
  <meta name="keywords" content="Productos minera, servicio minera, drones">
  <link rel="icon" type="image/png" href="<?= base_url(); ?>public/assets/img/icons/favicon.png" />
  <link href="<?= base_url(); ?>public/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="<?= base_url(); ?>public/assets/js/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/default.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/index.css" />
  <script src="<?= base_url(); ?>public/assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <!-- Navbar -->
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url();?>"><img src="<?= base_url(); ?>public/assets/img/logo-icon.png" class="navbar-logo-icon"
          alt="Capital Mining Logo" />
        Capital Mining</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url();?>"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="<?= base_url(); ?>sobre-nosotros"><i class="fa-solid fa-users"></i> Qui&eacute;nes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="<?= base_url(); ?>productos"><i class="fa-solid fa-box"></i> Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="<?= base_url(); ?>servicios"><i class="fa-solid fa-hand-holding-hand"></i> Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="<?= base_url(); ?>proyectos"><i class="fa-solid fa-book"></i> Proyectos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header video bg + hooker -->

  <header>
    <div class="container-flex contenedor-main bg-dark">
      <div class="videito">
        <video autoplay muted loop plays-inline preload="auto" width="100%">
          <source src="<?= base_url(); ?>public/assets/vid/bg-home.mp4" type="video/mp4">
        </video>
      </div>
      <div class="text-contenedor">
        <h1 class="text-center pb-3">Capital Mining SpA.</h1>
        <p class="h4 text-center">Productos, servicios y soluciones mineras a su disposición.</p>
      </div>
    </div>
  </header>

  <!-- contenedor certificaciones -->

  <section>
    <div class="container text-center">
      <h2 class="text-center py-5">Certificaciones</h2>
      <div class="row py-5 gy-3">
        <!-- Creación de las cards por columna -->
        <div class="col-md-6 col-lg-4 col-card">
          <div class="card mx-auto card-effect card-certificacion">
            <a href="https://www.achilles.com/community/regic/">
              <img src="<?= base_url(); ?>public/assets/img/home/cert-REGIC.png" class="card-img-top" alt="Certificado REGIC" />
            </a>
            <div class="card-body">
              <h5 class="card-title">
                Certificado por <br> REGIC
              </h5>
            </div>
          </div>
        </div>
        <!-- Creación de las cards por columna -->
        <div class="col-md-6 col-lg-4 col-card">
          <div class="card mx-auto card-effect card-certificacion">
            <a href="https://www.sicep.cl/">
              <img src="<?= base_url(); ?>public/assets/img/home/sicep.png" class="card-img-top" alt="Certificado SICEP" />
            </a>
            <div class="card-body">
              <h5 class="card-title">
                Certificado por <br> SICEP
              </h5>
            </div>
          </div>
        </div>
        <!-- Creación de las cards por columna -->
        <div class="col-md-6 col-lg-4 col-card">
          <div class="card mx-auto card-effect card-certificacion">
            <a href="https://www.ccs.cl/">
              <img src="<?= base_url(); ?>public/assets/img/home/CCS.png" class="card-img-top" alt="Certificado CCS" />
            </a>
            <div class="card-body">
              <h5 class="card-title">
                Certificado por <br>
                Cámara Comercio Santiago
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contenedor informacion general -->

  <section class="bg-dark">
    <div class="container historia-capmining">
      <div class="row py-5">
        <div class="col-lg-12">
          <div class="card mx-auto bg-dark border-0">
            <div class="row g-0">
              <div class="col-xl-8">
                <div class="card-body">
                  <h5 class="h2 text-center card-title">Historia</h5>
                  <p class="card-text align-middle">La empresa fue fundada en 2020 y cuenta con
                    profesionales experimentados en ingeniería, fabricación y montaje.
                    Ofrece servicios integrales de proyectos basados en ideas claras y experiencia,
                    capacitando a sus trabajadores para desarrollar técnicas innovadoras y creativas
                    que mejoren su servicio. La empresa utiliza tecnología avanzada, incluyendo
                    proyectos 3D con detalles precisos, prototipos virtuales en modelamiento de
                    maquetas basado en el sistema BIM, software de simulaciones y análisis, y
                    sistemas de escáner 3D para visualizar posibles interferencias de choque
                    en montajes. Además, la empresa entrega certificaciones de calidad en sus
                    servicios de fabricación y montaje, y está dirigida por personal con gran
                    experiencia.</p>
                </div>
              </div>
              <div class="col-xl-4">
                <img src="<?= base_url(); ?>public/assets/img/equipo.avif" class="img-fluid rounded-start" alt="...">
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>

  <!-- contenedor cards clientes-->

  <section>
    <div class="container d-block d-lg-none">
      <h2 class="text-center py-5">Principales Clientes</h2>
      <div class="row py-3 gy-5">
        <!-- Creación de las cards por columna -->
        <div class="col-md-6 col-lg-4 col-card">
          <div class="card card-effect card-certificacion">
            <a href="https://www.codelco.com/">
              <img src="<?= base_url(); ?>public/assets/img/clientes/codelco.png" class="card-img-top" alt="Cliente Codelco" />
            </a>
            <div class="card-body">
              <h5 class="card-title">Codelco</h5>
              <p class="card-text">Cliente desde el año 2021</p>
            </div>
          </div>
        </div>
        <!-- Creación de las cards por columna -->
        <div class="col-md-6 col-lg-4 col-card">
          <div class="card card-effect card-certificacion">
            <a href="https://www.bhp.com/es">
              <img src="<?= base_url(); ?>public/assets/img/clientes/bhp-billiton.png" class="card-img-top" alt="Cliente BHP Billiton" />
            </a>
            <div class="card-body">
              <h5 class="card-title">BHP Billiton</h5>
              <p class="card-text">Cliente desde el año 2021</p>
            </div>
          </div>
        </div>
        <!-- Creación de las cards por columna -->
        <div class="col-md-6 col-lg-4 col-card">
          <div class="card card-effect card-certificacion">
            <a href="https://www.wsp.com/es-cl">
              <img src="<?= base_url(); ?>public/assets/img/clientes/wsp.png" class="card-img-top" alt="Cliente WSP" />
            </a>
            <div class="card-body">
              <h5 class="card-title">WSP Ambiental</h5>
              <p class="card-text">Cliente desde el año 2021</p>
            </div>
          </div>
        </div>
        <!-- Creación de las cards por columna -->
        <div class="col-md-6 col-lg-4 col-card">
          <div class="card card-effect card-certificacion">
            <a href="https://www.ferrovial.com/es-la/">
              <img src="<?= base_url(); ?>public/assets/img/clientes/ferrovial.png" class="card-img-top" alt="Cliente Ferrovial Servicios" />
            </a>
            <div class="card-body">
              <h5 class="card-title">Ferrovial Servicios</h5>
              <p class="card-text">Cliente desde el año 2021</p>
            </div>
          </div>
        </div>
        <!-- Creación de las cards por columna -->
        <div class="col-md-6 col-lg-4 col-card">
          <div class="card card-effect card-certificacion">
            <a href="https://aprimin.cl/site/asociados/berliam-la-nueva-marca-de-broadspectrum-en-chile/">
              <img src="<?= base_url(); ?>public/assets/img/clientes/berliam.png" class="card-img-top" alt="Cliente Berliam" />
            </a>
            <div class="card-body">
              <h5 class="card-title">Berliam</h5>
              <p class="card-text">Cliente desde el año 2021</p>
            </div>
          </div>
        </div>
        <!-- Creación de las cards por columna -->
        <div class="col-md-6 col-lg-4 col-card">
          <div class="card card-effect card-certificacion">
            <a href="https://carola-coemin.cl/">
              <img src="<?= base_url(); ?>public/assets/img/clientes/carola-coemin.png" class="card-img-top" alt="Cliente Carola-Coemin" />
            </a>
            <div class="card-body">
              <h5 class="card-title">Grupo Minero Carola-Coemin</h5>
              <p class="card-text">Cliente desde el año 2021</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contenedor carrusel -->

  <section>
    <div class="container text-center d-none d-lg-block">
      <h2 class="text-center py-5">Principales Clientes</h2>
      <div id="carrusel-home" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicador -->
        <div class="carousel-inner">
          <!-- Primera página del carrusel -->
          <div class="carousel-item active">
            <div class="row gy-3">
              <!-- Creación de la Card -->
              <div class="col-xs-6 col-md-4 col-card">
                <div class="card mx-auto border-0 card-certificacion">
                  <a href="https://www.codelco.com/">
                    <img src="<?= base_url(); ?>public/assets/img/clientes/codelco.png" class="card-img-top" alt="Cliente Codelco" />
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Codelco</h5>
                    <p class="card-text">Cliente desde el año 2021</p>
                  </div>
                </div>
              </div>
              <!-- Creación de la Card -->
              <div class="col-xs-6 col-md-4 col-card">
                <div class="card mx-auto border-0 card-certificacion">
                  <a href="https://www.bhp.com/es">
                    <img src="<?= base_url(); ?>public/assets/img/clientes/bhp-billiton.png" class="card-img-top" alt="Cliente BHP Billiton" />
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">BHP Billiton</h5>
                    <p class="card-text">Cliente desde el año 2021</p>
                  </div>
                </div>
              </div>
              <!-- Creación de la Card -->
              <div class="col-xs-6 col-md-4 col-card">
                <div class="card mx-auto border-0 card-certificacion">
                  <a href="https://www.wsp.com/es-cl">
                    <img src="<?= base_url(); ?>public/assets/img/clientes/wsp.png" class="card-img-top" alt="Cliente WSP" />
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">WSP Ambiental</h5>
                    <p class="card-text">Cliente desde el año 2021</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Segunda página -->
          <div class="carousel-item">
            <div class="row gy-3">
              <!-- Creación de la Card -->
              <div class="col-md-6 col-lg-4 col-card">
                <div class="card mx-auto border-0 card-certificacion">
                  <a href="https://www.ferrovial.com/es-la/">
                    <img src="<?= base_url(); ?>public/assets/img/clientes/ferrovial.png" class="card-img-top" alt="Cliente Ferrovial Servicios" />
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Ferrovial Servicios</h5>
                    <p class="card-text">Cliente desde el año 2021</p>
                  </div>
                </div>
              </div>
              <!-- Creación de la Card -->
              <div class="col-md-6 col-lg-4 col-card">
                <div class="card mx-auto border-0 card-certificacion">
                  <a href="https://aprimin.cl/site/asociados/berliam-la-nueva-marca-de-broadspectrum-en-chile/">
                    <img src="<?= base_url(); ?>public/assets/img/clientes/berliam.png" class="card-img-top" alt="Cliente Berliam" />
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Berliam</h5>
                    <p class="card-text">Cliente desde el año 2021</p>
                  </div>
                </div>
              </div>
              <!-- Creación de la Card -->
              <div class="col-md-6 col-lg-4 col-card">
                <div class="card mx-auto border-0 card-certificacion">
                  <a href="https://carola-coemin.cl/">
                    <img src="<?= base_url(); ?>public/assets/img/clientes/carola-coemin.png" class="card-img-top" alt="Cliente Carola-Coemin" />
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Grupo Minero Carola-Coemin</h5>
                    <p class="card-text">Cliente desde el año 2021</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contenedor de botones del carrusel -->
    <div class="container d-none d-lg-block">
      <div class="row my-3">
        <div class="col text-center">
          <a href="#carrusel-home" class="btn btn-primary" data-bs-slide="prev"><i
              class="fa-solid fa-arrow-left"></i></a>
          <a href="#carrusel-home" class="btn btn-primary" data-bs-slide="next"><i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <h6 class="h2 py-5 text-center">¡Y muchos más!</h6>


  <!-- Contenedor whatsapp -->

  <div>
    <a href="https://wa.me/+56950295641" class="whatsapp-flotante" target="_blank">
      <i class="fa fa-whatsapp mi-whatsapp-flotante"></i>
    </a>
  </div>

  <!-- Foooter-->

  <?= view('infopage/footer');?>

  <script src="https://kit.fontawesome.com/178860d74b.js" crossorigin="anonymous"></script>

</body>
</html>