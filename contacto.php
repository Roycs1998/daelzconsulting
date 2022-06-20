<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>DPROTEC - CONTACTO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,700%7CNoto+Sans:400,700">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
  <?php include('php/estructura/header.php');?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic bg-image" style="background-image: url(&quot;images/servicios/contacto.jpg&quot;)">
        <div class="container">
          <div class="row">
            <ul class="list-breadcrumb">
              <li><a href="index.php">Inicio</a></li>
              <li>Contacto</li>
            </ul>
          </div>
        </div>
      </section>
 

      <section class="section-50  bg-wild-sand">
        <div class="container text-left">
          <h2><span class="small">Contáctanos</span>¿Deseas más información sobre nuestros servicios?</h2>
          <form id="formulario-contacto" class=" text-left"  method="post" action="bat/enviar-datos.php">
            <div class="row row-20 offset-top-40 offset-md-top-60">
              <div class="col-xl-4 col-lg-6">
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-name">Nombre *</label>
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                </div>
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-email">E-mail *</label>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                </div>
              </div>
              <div class="col-xl-4 col-lg-6">
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-company">Razón social *</label>
                  <input class="form-input" id="contact-company" type="text" name="company" data-constraints="@Required">
                </div>
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-subject">RUC *</label>
                  <input class="form-input" id="contact-subject" type="text" name="subject" data-constraints="@Required">
                </div>
              </div>
              <div class="col-xl-4">
                <div class="form-wrap postfix-xl-right-40">
                  <label class="form-label" for="contact-message">Mensaje *</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <button class="btn btn-dark btn-form" type="submit">Enviar mensaje</button>
          </form>
        </div>
        <div class="form-message">
          
        </div>
      </section>



      <section class="section-75 section-md-100 section-lg-150">
        <div class="rd-map-wrap">
          <div class="container text-md-left">
            <div class="row row-40">
              <div class="col-md-6">
                <h1>Ubicanos en</h1>
                <span class="small text-spacing-340 text-uppercase text-regular offset-top-40 offset-md-top-60">Oficina</span>
                <ul class="list offset-top-20 list-lg-middle text-left list-classic">
                  <li>
                    <div class="unit flex-row unit-spacing-md">
                      <div class="unit-left"><span class="icon icon-primary fa-map-marker"></span></div>
                      <div class="unit-body">
                        <h6><a class="text-darker" href="#">Av. Las Camelias 790, distrito de San Isidro</a></h6>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit flex-row unit-spacing-md">
                      <div class="unit-left"><span class="icon icon-primary fa-phone"></span></div>
                      <div class="unit-body">
                        <h6><a class="text-darker" href="tel:#">(+51) 957 404 672</a><br><a class="text-darker" href="tel:#">(+51) 981 453 402</a></h6>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit flex-row unit-spacing-md">
                      <div class="unit-left"><span class="icon icon-primary fa-envelope"></span></div>
                      <div class="unit-body">
                        <h6><a class="text-primary" href="mailto:ebelin@dprotec.com.pe">ebelin@dprotec.com.pe</a></h6>
                      </div>
                    </div>
                  </li>
                </ul>

              </div>
              <div class="col-md-6 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.216175974885!2d-77.03106328518436!3d-12.097348146137286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c868bd340ee1%3A0x14e3b337b0d072f1!2sC.%20las%20Camelias%20790%2C%20San%20Isidro%2015046!5e0!3m2!1ses-419!2spe!4v1649969920674!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>


     <!-- Page Footer-->
      <?php include('php/estructura/foot.php');?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/contacto.js"></script>
    
  </body>
</html>