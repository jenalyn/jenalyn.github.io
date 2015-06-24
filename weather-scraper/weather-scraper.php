<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Weather Predictor</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <style type="text/css">
      
      html, body {
        height: 100%;
      }

      .container {
        background-image: url('weather.jpg');
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        padding-top: 100px;
      }

      .container h1 {
        color: #280004;
        font-size: 4em;
        margin-bottom: 30px;
      }

      .container p {
        color: #A53F2B;
        font-size: 1.2em;
        margin-bottom: 20px;
      }

      button {
        margin-top: 20px;
        margin-bottom: 20px;
      }

      .alert {
        margin-top: 20px;
        display: none;
      }

    </style>

  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <h1>Weather Predictor</h1>
          <p>Enter your city below to get a forecast for the weather.</p>

          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco...">
            </div>
            <button class="btn btn-success btn-lg" id="findMyWeather">Find My Weather</button>
          </form>
        </div>


      </div>

      <div id="success" class="alert alert-success">Success!</div>
      <div id="fail" class="alert alert-danger">Could not find the data for that city.</div>
      <div id="noCity" class="alert alert-danger">Please enter a city.</div>
    </div>
  
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">

      $('#findMyWeather').click(function(event) { //event variable to click function
        event.preventDefault(); //preventing the default event from happening, that will stop the form from submitting and run the code instead

        if ($('#city').val() != '') {
          $.get('scraper.php?city='+$('#city').val(), function(data) {
          // $('.alert').hide();
            if (data !== "") {
              $('#success').html(data).fadeIn();//take the alert, set the html to the  value of the data returned and fade it in
              $('#fail').hide();
              $('#noCity').hide();
            } else {
              $('#fail').fadeIn();//we don't want any data in it this time
              $('#success').hide();
              $('#noCity').hide();
            }
          });
        } else {
          $('#noCity').fadeIn();
          $('#fail').hide();
          $('#success').hide();
        }
      });

    </script>


  </body>
</html>