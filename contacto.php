<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>DAELZ - CONTACTO</title>
    <?php include('bat/links.php');?>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
    <?php include('bat/header.php'); ?>
    
      <section class="section section-intro context-dark">
        <div class="intro-bg" style="background: url(images/contacto.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
              <h1 class="font-weight-bold wow fadeInLeft">Contacto</h1>
              <p class="intro-description wow fadeInRight">Estas a un clic de contactar a la mejor empresa de consultoria empresarial.</p>
            </div>
          </div>
        </div>
      </section>
     <!--Mailform-->
      <section class="section section-sm position-relative" id="about">
        <div class="decor-text decor-text-1">Contacto</div>
        <div class="container">
          <div class="row row-30">
            
            <div class="col-lg-6 col-12">
              <div class="block-sm offset-top-45">
                <div class="section-name wow fadeInRight" data-wow-delay=".2s">Contacto</div>
                <h3 class="wow fadeInLeft text-capitalize devider-bottom" data-wow-delay=".3s">¿Cotización<span class="text-primary"> ONLINE?</span></h3>
                
                <form id="formulario-contacto" class=" text-left"  method="post" action="bat/phpmailer/enviar.php">
                <div class="form-wrap">
                  <label class="form-label" for="contact-name">Name<span class="req-symbol">*</span></label> 
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-phone">Phone<span class="req-symbol">*</span></label>
                  <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">E-Mail<span class="req-symbol">*</span></label>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                </div>
                <div class="form-wrap">
                  <label class="form-label label-textarea" for="contact-message">Message<span class="req-symbol">*</span></label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
                <!--Google captcha-->

                <div class="form-button group-sm text-center text-lg-left">
                  <button class="button button-primary" type="submit">Send</button>
                </div>
                
                
              </form>
              </div>
                <div class="form-message">
          
                </div>
              
            </div>

            <div class="col-lg-6">
              <div class="block-decorate-img wow fadeInLeft" data-wow-delay=".2s"><img src="images/contacto-icono.png" alt="" width="570" height="351"/>
              </div>
            </div>

          </div>
        </div>
        
      </section>
 

      <!--Google Map-->
      <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.2160994264045!2d-77.03106328518693!3d-12.09735339143362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c868bd340ee1%3A0x14e3b337b0d072f1!2sC.%20las%20Camelias%20790%2C%20San%20Isidro%2015046!5e0!3m2!1ses-419!2spe!4v1651016208270!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>
       <?php include('bat/footer.php');?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/contacto.js"></script>
  </body>
</html>