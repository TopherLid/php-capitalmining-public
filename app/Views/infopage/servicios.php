<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios - Capital Mining</title>
  <meta name="author" content="@topherlid on github">
  <meta name="description" content="Productos y soluciones enfocados al ámbito de la minería de Chile">
  <meta name="keywords" content="Productos minera, servicio minera, drones">
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/icons/favicon.png" />
  <link href="<?= base_url(); ?>public/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="<?= base_url(); ?>public/assets/js/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/default.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/servicios.css" />
  <script src="<?= base_url(); ?>public/assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?= base_url(); ?>public/assets/img/logo-icon.png" class="navbar-logo-icon"
          alt="Capital Mining Logo" />
        Capital Mining</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>sobre-nosotros"><i class="fa-solid fa-users"></i> Qui&eacute;nes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>productos"><i class="fa-solid fa-box"></i> Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url(); ?>servicios"><i class="fa-solid fa-hand-holding-hand"></i> Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>proyectos"><i class="fa-solid fa-book"></i> Proyectos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- contenedor servicios -->

  <section>
    <div class="container">
      <div class="row py-5 gy-5">
        <h2 class="text-center py-3">Servicios Ofrecidos</h2>
        <div class="col-lg-6 text-center">
          <div class="card mx-auto">
            <img src="<?= base_url(); ?>public/assets/img/servicios/1.png" class="card-img-top card-imagen" alt="Puentes Apiladores">
            <div class="card-body">
              <h5 class="card-title">Puentes Apiladores</h5>
              <p class="card-text">Reparaciones por fallas estructurales in situ. <br>Cambio de rieles con nueva estrategia basada en la metodología LEAN. 
                <br>Inspección estructural por profesional experto formado en USA.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="card mx-auto">
            <img src="<?= base_url(); ?>public/assets/img/servicios/2.png" class="card-img-top card-imagen" alt="Rotopalas">
            <div class="card-body">
              <h5 class="card-title">Rotopalas</h5>
              <p class="card-text">Reparación estructural de disco. <br>Rediseño a las puntas de capachos que incluye nueva geometría. 
                <br>Nuevos materiales con extrema resistencia a la abrasión.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="card mx-auto">
            <img src="<?= base_url(); ?>public/assets/img/servicios/2.png" class="card-img-top card-imagen" alt="Drones">
            <div class="card-body">
              <h5 class="card-title">Drones</h5>
              <p class="card-text">Servicio de préstamo de Drones. <br>Calidad de vídeo de tantos pixeles mega ultra bla bla. 
                <br>Resistencia a entornos desérticos.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="card mx-auto">
            <img src="<?= base_url(); ?>public/assets/img/servicios/4.jpg" class="card-img-top card-imagen" alt="Maquinaria">
            <div class="card-body">
              <h5 class="card-title">Maquinaria</h5>
              <p class="card-text">Arriendo de maquinaria. <br>Tipos de maquinaria. 
                <br>Dónde se maquina.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contenedor whatsapp -->

  <div>
    <a href="https://wa.me/+56950295641" class="whatsapp-flotante" target="_blank">
      <i class="fa fa-whatsapp mi-whatsapp-flotante"></i>
    </a>
  </div>

  <!-- foooter-->

  <?= view('infopage/footer');?>

  <script src="https://kit.fontawesome.com/178860d74b.js" crossorigin="anonymous"></script>
</body>
</html>