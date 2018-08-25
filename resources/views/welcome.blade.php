<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       <!-- ========== HEADER SECTION ========== -->
  <section id="home" name="home"></section>
  <div id="headerwrap">
    <div class="container">
      <div class="logo">
        <img src="img/logo.png">
      </div>
      <br>
      <div class="row">
        <h1>MINIMAL TEMPLATE</h1>
        <br>
        <h3>Hello, I'm Carlos. I love design.</h3>
        <br>
        <br>
        <div class="col-lg-6 col-lg-offset-3">
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->

  <!-- ========== ABOUT SECTION ========== -->
  <section id="about" name="about"></section>
  <div id="f">
    <div class="container">
      <div class="row">
        <h3>ABOUT ME</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <!-- INTRO INFORMATIO-->
        <div class="col-lg-6 col-lg-offset-3">
          <p>A full time theme crafter based in Madrid, Spain. I love designing beautiful, clean and user-friendly interfaces for websites.</p>
          <p>My passion is turning good ideas and products into eye-catching sites.</p>
          <p>Sometimes I blog about design and web trends. Also I share links and my thoughts on <a href="http://twitter.com/templatemag">Twitter</a>. Need a free handsome bootstrap theme? <a href="http://templatemag.com">Done!</a></p>
          <p>I'm available for freelance jobs. Contact me now.</p>
          <p><button type="button" class="btn btn-warning">I HAVE A FREELANCE JOB</button></p>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /f -->

  <!-- ========== CAROUSEL SECTION ========== -->
  <section id="portfolio" name="portfolio"></section>
  <div id="f">
    <div class="container">
      <div class="row centered">
        <h3>SOME PROJECTS</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <div class="col-lg-6 col-lg-offset-3">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active centered">
                <img class="img-responsive" src="img/c1.png" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="img/c2.png" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="img/c3.png" alt="">
              </div>
            </div>
            <br>
            <br>
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
        <!-- col-lg-8 -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- f -->

  
  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Minimal</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/minimal-bootstrap-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Minimal template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
