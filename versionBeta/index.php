<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://crea.guemil.info/TemplateData/favicon.png" /> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://guemil.github.io/Guemil_Guidelines/assets/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <style>
      body {
        background: #eee;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
      }

      div.card, div.alert{
        border:none;
        border-radius: 0 0;
      }

      div.alert small{
        line-height: 1.3;
      }

      div.card-body span.icon{
        font-family: "guemil_15picto", sans-serif;
        font-size: 5rem;
        line-height: 6rem;
        width:6rem;
        padding: 0 0.5rem 0 5.5rem;
        margin-top:1.4rem;
      }

      div.card-body h1.card-title{
        margin: 1rem 0 1.4rem 0.4rem; 
        font-size: 1.75rem;
        line-height: 2rem;
      }

      div.card-body h1.card-title strong{
        margin-right:0.25rem;
      }

      .btn-warning{
        background:#FFC043 url('TemplateData/warning-strip.png') 98% 0 no-repeat;
        background-size:auto 2.25rem;
        font-weight: 700;
        text-align: left;
      }

      .btn-warning:hover{
        background:#E2A738 url('TemplateData/warning-strip.png') 98% 0 no-repeat;
        background-size:auto 2.25rem;
        transition: background ease 0.3s;
      }
    </style>
    <title>CreaGuemil</title>
    <!-- Metadata -->    
    <meta name="title" content="CreaGuemil" />  
    <meta name="description" content="CreaGuemil es parte de una iniciativa abierta de íconos, orientada a representar situaciones de riesgo y emergencia">
    <meta name="image" content="https://crea.guemil.info/creaguemil.png">  
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="CreaGuemil" />
    <meta name="twitter:description" content="CreaGuemil es parte de una iniciativa abierta de íconos, orientada a representar situaciones de riesgo y emergencia" />
    <meta name="twitter:image:src" content="https://crea.guemil.info/creaguemil.png">
    <!-- Open Graph data -->
    <meta name="og:url" content="https://crea.guemil.info" />
    <meta name="og:site_name" content="CreaGuemil" />
    <meta name="og:description" content="CreaGuemil es parte de una iniciativa abierta de íconos, orientada a representar situaciones de riesgo y emergencia" />
    <meta name="og:image" content="https://crea.guemil.info/creaguemil.png">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-11 col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card mt-4 pb-0">
            <div id="importante" class="alert alert-dark alert-dismissible fade show d-none" role="alert">
              <small><strong>Para continuar, te recomendamos utilizar computador o teléfono</strong>, porque la versión de CreaGuemil que hoy estamos poniendo a prueba no está ajustada para tablet.</small>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="card-body">
              <span class="icon">…</span>
              <h1 class="card-title"><strong>Crea</strong>Guemil</h1></span>
              <form class="form-signin" action="beta.php" method="POST">
                <div class="form-label-group pb-4">
                  <label>¿Cómo te llamas?</label>
                  <input type="text" name="name" class="form-control" placeholder="Nombre Apellido" required autofocus>
                </div>
                <div class="form-label-group pb-4">
                  <label>¿En qué año naciste?</label> 
                  <select name="age" class="custom-select" required>
                    <option selected value="">Selecciónalo…</option><?php for ($x = 2000; $x <= 2020; $x++) { ?> <option value="<?php print $x;?>"><?php print $x;?></option> <?php }; ?>
                  </select>
                </div>
                <button class="btn btn-warning btn-block mb-1" type="submit">Continuar</button>
              </form>
            </div><!--.card-body-->
            <div class="card-footer">
              <div class="row py-2 mb-0">
                <div class="col-5 col-sm-4"><img src="https://www.guemil.info/wp-content/uploads/2020/04/fondart.png" class="img-fluid"></div>
                <div class="col-7 col-sm-8"><p class="pl-1 pt-1 small"><a href="https://www.guemil.info/"><strong>Guemil</strong> <span class="d-none d-sm-inline">Iconos para Emergencia</span></a> es apoyado por el Fondo Nacional de Desarrollo Cultural y Las Artes (FONDART).</p></div>
              </div>
            </div>            
          </div><!--.card-->
        </div><!--.col- -->
      </div><!--.row-->
    </div><!--.container-->
    <script>
    var element = document.getElementById("importante");
    var tablet = navigator.userAgent.match(/Tablet|iPad|iPod/i) != null;
    if (tablet == true){
      element.classList.remove("d-none");
    }
    </script>    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>