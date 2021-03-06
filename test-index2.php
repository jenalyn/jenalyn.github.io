<?php

  if ($_POST["submit"]) {

    if (!$_POST['name']) {
      $error="<br>Please enter your name";
    }
    if (!$_POST['email']) {
      $error.="<br>Please enter your e-mail address";
    }
    if (!$_POST['subject']) {
      $error.="<br>Please enter your subject";
    }
    if (!$_POST['message']) {
      $error.="<br>Please enter your message";
    }

    if ($_POST['email'] !=="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
      $error.="<br>Please enter a valid email address"; 
    }

    if($error) {
      $result='<div class="alert alert-danger"><strong>Please fill up the following:</strong>'.$error.'</div>';
    } else {

      if (mail("jenalyn.sindo@gmail.com", "Message from website", "Name: ".$_POST['name']
        ."Email: ".$_POST['email']
        ."Subject: ".$_POST['subject']
        ."Message: ".$_POST['message'])
        ){
          $result='<div class="alert alert-success"><strong>Thank you for the message!</strong></div>';
      } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again.</div>';
      }
    }
  }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Jenalyn Sindo</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Jockey+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cuprum:700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css">

  </head>

  <body data-spy="scroll" data-target=".navbar-collapse">

    <div class="navbar navbar-inverse navbar-fixed-top" id="navbarCustomize">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse navbarCenter">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#homeContainer">Home</a></li>
            <li><a href="#aboutmeContainer">About</a></li>
            <li><a href="#projectsContainer">Projects</a></li>
            <li><a href="#contactContainer">Contact</a></li>
          </ul>
        </div>  
      </div>
    </div><!--end of .navbar-->

    <div class="container contentsContainer" id="homeContainer">
      <div class="transparent"></div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3" id="topText">
          <img src="images/me.jpg" alt="Hello! This is me!" class="img-thumbnail imgMe">
          <h1>Jenalyn Sindo</h1>
          <p class="lead">Welcome!</p>
          <blockquote>"Continuous effort - not strength or intelligence - is the key to unlocking our potential." -<cite>Winston Churchill</cite></blockquote>
        </div>
      </div>
    </div><!--end of home-->

    <div class="container contentsContainer" id="aboutmeContainer">
      <div class="row marginTop marginBottom">
        <div class="col-md-4 col-md-offset-2">
          <h4>About Me</h4>

          <p class="text-justify infoCustomize">Hello! My name is Jenalyn Sindo, I am currently seeking for a position in a company to use my skills in web development and designing. Please feel free to browse my website!</p>
        </div>
        <div class="col-md-4 col-md-offset-1">
          <h4>My Skills</h4>

          <ul class="list-unstyled">
            <li><span class="glyphicon glyphicon-ok"></span> HTML5 / CSS</li>
            <li><span class="glyphicon glyphicon-ok"></span> Bootstrap</li>
            <li><span class="glyphicon glyphicon-ok"></span> Basic Javascript / jQuery</li>
            <li><span class="glyphicon glyphicon-ok"></span> Basic Wordpress</li>
            <li><span class="glyphicon glyphicon-ok"></span> Visual/Graphic Designing</li>
            <li><span class="glyphicon glyphicon-ok"></span> Web Designing</li>
            <li><span class="glyphicon glyphicon-ok"></span> Adobe Photoshop</li>
          </ul>
        </div>
      </div>
    </div><!--end of about me-->

  <div class="container contentsContainer center" id="projectsContainer">
    <div class="marginTop">
      <h3>MY PROJECTS</h3>

      <div class="row infoCustomize">
        <div class="col-md-4">
          <a href="http://jenalyn.github.io/leaflet-app-landing-page/" alt="Leaflet App Landing Page" target="_blank" class="imgLink"><img src="images/leaflet-mockup.png" title="Leaflet App Landing Page"></a>
          <h4>Leaflet (App Landing Page)</h4>
          <a href="http://jenalyn.github.io/leaflet-app-landing-page/" type="button" class="btn btn-info" target="_blank">Visit Site</a>
        </div>

        <div class="col-md-4">
          <a href="http://hardanodizedpans.com/" alt="Hard Anodized Pans" target="_blank" class="imgLink"><img src="images/pans-mockup.png" title="Hard Anodized Pans"></a>
          <h4>Hard Anodized Pans</h4>
          <a href="http://hardanodizedpans.com/" type="button" class="btn btn-info" target="_blank" alt="Visit Site">Visit Site</a>
        </div>

        <div class="col-md-4">
          <a href="http://sodamakerguide.com/" alt="Soda Maker Guide" target="_blank" class="imgLink"><img src="images/soda-maker-guide.png" title="Soda Maker Guide"></a>
          <h4>Soda Maker Guide</h4>
          <a href="http://sodamakerguide.com/" type="button" class="btn btn-info" target="_blank" alt="Visit Site">Visit Site</a>
        </div>
      </div>

      <div class="row infoCustomize marginBottom">
        
        <div class="col-md-4">
          <a href="http://jenalyn.github.io/photogal/" alt="PhotoGal" target="_blank" class="imgLink"><img src="images/photogal-mockup.png" title="PhotoGal"></a>
          <h4>PhotoGal</h4>
          <a href="http://jenalyn.github.io/photogal/" type="button" class="btn btn-info" target="_blank" alt="Visit Site">Visit Site</a>
        </div>

        <div class="col-md-4">
          <a href="http://79.170.44.103/jenaweb.com/php/weather-scraper.php" alt="Weather Predictor" target="_blank" class="imgLink"><img src="images/weather-scraper-mockup.png" alt="Weather Scraper"></a>
          <h4>Weather Predictor</h4>
          <a href="http://79.170.44.103/jenaweb.com/php/weather-scraper.php" type="button" class="btn btn-info" target="_blank" alt="Visit Site">Visit Site</a>
        </div>

        <div class="col-md-4">
          <img src="images/coming-soon-mockup.png" alt="Project #">
          <h4>Nintendo3D (Wordpress)</h4>
          <a href="#" type="button" class="btn btn-info" target="_blank" alt="Visit Site">Visit Site</a>
        </div>

      </div>

      <h3>DESIGNS</h3>

      <div class="row infoCustomize">
        <div class="col-md-4">
          <img src="images/leaflet-design.png" title="Leaflet App Landing Page">
          <h4>Leaflet (App Landing Page)</h4>
          <a href="#" type="button" class="btn btn-info" data-toggle="modal" data-target="#imgPreview" data-imagename="leaflet.jpg">View the Design</a>
        </div>

        <div class="col-md-4">
          <img src="images/photogal-design.png" title="PhotoGal">
          <h4>PhotoGal</h4>
          <a href="#" type="button" class="btn btn-info" data-toggle="modal" data-target="#imgPreview" data-imagename="photogal.jpg">View the Design</a>
        </div>

        <div class="col-md-4">
          <img src="images/cafe-journey-design.png" title="Cafe Journey Blog Layout">
          <h4>Cafe Journey Blog Layout</h4>
          <a href="#" type="button" class="btn btn-info" data-toggle="modal" data-target="#imgPreview" data-imagename="cafe-journey.png">View the Design</a>
        </div>
      </div>

      <div class="row infoCustomize marginBottom">
        
        <div class="col-md-4">
          <img src="images/simplicity-design.png" title="Simplicity">
          <h4>Simplicity</h4>
          <a href="#" type="button" class="btn btn-info" data-toggle="modal" data-target="#imgPreview" data-imagename="simplicity.jpg">View the Design</a>
        </div>

        <div class="col-md-4">
          <img src="images/coming-soon-design.png" title="Coming Soon">
          <h4>Coming Soon!</h4>
        </div>

        <div class="col-md-4">
          <img src="images/coming-soon-design.png" title="Coming Soon">
          <h4>Coming Soon!</h4>
        </div>

      </div>

    </div>
  </div><!--end of projects-->

  <div class="container contentsContainer" id="contactContainer">
    <div class="marginTop center">
      <h3>CONTACT ME</h3>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">


          <?php echo $result; ?>
          
          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-md-3" for="name">Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Your Name" name="name" id="name" value="<?php echo $_POST['name']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3" for="email">E-mail Address</label>
              <div class="col-md-9">
                <input type="email" class="form-control" placeholder="Your Email" name="email" id="email" value="<?php echo $_POST['email']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3" for="subject">Subject</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="subject" id="subject" value="<?php echo $_POST['subject']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3" for="message">Message</label>
              <div class="col-md-9">
                <textarea class="form-control" rows="3" name="message" id="message"><?php echo $_POST['message']; ?></textarea>
              </div>
            </div>
            <input type="submit" class="btn btn-info" name="submit" value="Submit">



          </form>
        </div>
      </div>

    </div>
  </div><!--end of contact-->

  <footer>
    <div class="container">
      <h5>&copy; Jenalyn Sindo, 2015. All Rights Reserved.</h5>
    </div>
  </footer><!--end of footer-->

  <div class="modal fade" id="imgPreview" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">X</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" style="width:100%">
        </div>
      </div>
    </div>
  </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $('#homeContainer')
        .css('min-height',$(window).height());
      $('.transparent')
        .css('min-height',$(window).height());

      $('#imgPreview').on('show.bs.modal', function(event) {
        var link = $(event.relatedTarget);
        var modal = $(this);
        var imageName = link.data('imagename');

        modal.find('.modal-body img').attr('src','images/' + imageName);
      })




    </script>
  </body>
</html>