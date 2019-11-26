<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page</title>

  <!-- Custom fonts for this theme -->
  <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="{{asset('assets/css/freelancer.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <img width="10%" src="{{asset('assets/img/logo.png')}}" alt="">
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">¿Qué es Comanimals?</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">¿Quienes somos?</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contacta</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img width="50%" src="{{asset('assets/img/descarga.jpg')}}" alt=""><br><br>

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0 mt-5">COMANIMALS</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
       
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Ayuda a los Animales</p><!--Poner la imagen grande -->

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">¿Qué es Comanimals?</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        
        <div class="divider-custom-line"></div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4">
          <p class="lead">Comanimals es una página pensada para ayudar a los animales. En la página podrás consultar información sobre protectoras, veterinarias y hoteles para animales con el fin de mejorar su calidad de vida.</p>
        </div>

     
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">¿Quienes somos?</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
       
        <div class="divider-custom-line"></div>
      </div>



      <!-- About Section Content -->
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <p class="lead">Somos un grupo de tres personas del centro Zubiri Manteo que como proyecto de final de curso ha hecho una página para ayudar a los animales debido a que la calidad de vida de estos es mejorable.</p>
        </div>
        

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactanos</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
       
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post" action="{{route('enviardatos')}}">
            @csrf
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nombre</label>
                <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre" required="required" data-validation-required-message="Por favor, inserte su nombre.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email</label>
                <input class="form-control" name="email" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Por favor, inserte su email.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Comentario</label>
                <input class="form-control" type="text" name="comentario" id="comentario" rows="5" placeholder="Comentario" required="required" data-validation-required-message="Por favor, escriba un comentario.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

 
  <footer class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Jon Valdés, Andoni Bartolomé y Xabier Jacob &copy;</small>
    </div>
  </footer>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script><!--vendor/jquery/jquery.min.js -->
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script><!--vendor/bootstrap/js/bootstrap.bundle.min.js-->

  <!-- Plugin JavaScript -->
  <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script><!--vendor/jquery-easing/jquery.easing.min.js-->

  <!-- Contact Form JavaScript -->
  <script src="{{asset('assets/js/jqBootstrapValidation.js')}}"></script><!--js/jqBootstrapValidation.js-->
  <script src="{{asset('assets/js/contact_me.js')}}"></script><!--js/contact_me.js-->

  <!-- Custom scripts for this template -->
  <script src="{{asset('assets/css/freelancer.min.css')}}"></script>

</body>

</html>
