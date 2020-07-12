<?php
$weather = "";
if (array_key_exists('city', $_GET)) {
  $urlContents =  file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city'])."&appid=cc0c87503e7eb6fb503d93b8dee70f2a");

$weatherArray = json_decode($urlContents, true);
$weather = "THE weather in ".$_GET['city']." is currently
'".$weatherArray['weather'][0]['description']."'. ";
$temp = $weatherArray['main']['temp'] - 273;
$weather .= " The Temperature is ".$temp."&deg;c and wind speed is ".$weatherArray['wind']['speed']."m/s.";

print_r($weather);


}
?>












<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>weather Scrapper</title>
    <style type="text/css">
    html { 
  background: url(background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body {
    background: none;
}
.container {
    text-align: center;
    margin-top: 200px;
    width: 450px;
}

</style>
  </head>
  <body>
  <div class="container">
  <h1>What is The Weather?</h1>
  
  <form>
  <div class="form-group">
    <label for="city">Enter a name of a city</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Eg.London, Tokyo">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>