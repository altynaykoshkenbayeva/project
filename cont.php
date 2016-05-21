
!DOCTYPE HTML>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Travel Agency</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/travel.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
 
data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="about.php">About <span class="sr-only">(current)</span></a>
        </li>
        
              <li>
                <a href="cont.php">Contact</a>
              </li>
              <li>
                <a href="book.php">Booking</a>
              </li>
              <li>
                <a href="photo.html">Gallery</a>
              </li>
            </ul>


    </div>
  </div>
</nav>
<br>
<br>
 <div class="section">
>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96467.49387298936!2d-74.21978519638071!3d40.924314243835305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fb98d6299219%3A0x7fabe4847f1cad1e!2sSea+%26+Air+Travel+Agency+Inc!5e0!3m2!1sen!2skz!4v1458002401414"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
          </div>
          <div class="col-md-6">
            <h1 class="text-center">OUR LOCATION</h1>
            <br>
            <br>
            <div class="contact-infos">
              <ul class="lead text-left">
                <li>32-16 Broadway # 1, Fair Lawn</li>
                <li>NJ 07410, United States</li>
                <li>Tel: +1 201-791-3100</li>
                <li>Email:
                  <a href="mailto:info@company.com">besttravelagency.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

        





       
          <footer class="section section-primary">
      <div class="container">
        <div class="row text-left">
          <div class="col-sm-6">
          
            <br>
            <p class="text-center">Copyright © Website 2016 by Altynay Koshkinbayeva</p>
          </div>
         <div class="col-sm-6">
            <p class="text-info text-right"></p>
            <form id="contact_form" action="send.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <label for="name">Your name:</label>
                <input id="name" class="input" name="name" type="text"
                value="" size="50">
                <br>
              </div>
              <br>
              <div class="row">
                <label for="email">Your email:</label>
                <input id="email" class="input" name="email" type="text"
                value="" size="50">
              </div>
              <br>
              <div class="row">
                <label for="message">Your message:</label>
                <br>
                <textarea id="message" class="input" name="message" rows="7" cols="63"></textarea>
                <br>
              </div>
              <a class="btn btn-primary1">Send email</a>
            </form>
          </div>
        </div>
      </div>
          </div>
        </div>
        
      </div>
    </footer>
  
  <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 })
    </script>

</body>

</html>