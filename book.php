
<?php
  include("connection.php");

  if(isset($_POST['submit'])){
   

//if(isset($_POST['name'])){
  $name = $_POST['name'];
//}
//if(isset($_POST['email'])){
  $surname = $_POST['email'];
//}
//if(isset($_POST['tour'])){
  $email = $_POST['tour'];
//}
//if(isset($_POST['number'])){
  $number = $_POST['number'];
//}
//if(isset($_POST['data'])){
  $data= $_POST['data'];
//}
//if(isset($_POST['time'])){
  $time= $_POST['time'];
//}

    $result = mysqli_query($db, "SELECT * FROM book WHERE email='$email'");
  $row = $result->fetch_array();
    if (!empty($row['id'])) {
    echo "Sorry, this email have been booked. ";
    }

    $result1 = mysqli_query($db,"INSERT INTO book VALUES ('$name','$email','$number','$tour','$data','$time')");

}


?>
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
<br>
<br>
<hr>
<div class="form-horizontal">
<fieldset>


<!-- Text input-->
<form method="post" onsubmit="func();return res;" action="book.php">
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name Surname</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailaddress">Email Address</label>  
  <div class="col-md-4">
  <input id="emailaddress" name="email" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone Number</label>  
  <div class="col-md-4">
  <input id="phone" name="number" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tourselection">Tour</label>
  <div class="col-md-4">
    <select id="tourselection" name="tour" class="form-control">
      <option value="1">France</option>
      <option value="2">Spain</option>
      <option value="3">Italy</option>
      <option value="4">Germany</option>
    </select>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dateselection">Date</label>  
  <div class="col-md-4">
  <input id="dateselection" name="data" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="timeselect">Time</label>
  <div class="col-md-4">
     <input id="timeselect" name="time" type="text" placeholder="" class="form-control input-md" required="">
        
    

   </div>

  <button type="submit" name="submit" class="btn btn-primary1 btn=block btn-large" >Send</button> 
  

</div>
 </form>
</fieldset>

</div>

             
          <footer class="section section-primary">
      <div class="container">
        <div class="row text-left">
          <div class="col-sm-6">
        
            
            <p class="text-center">Copyright © Website 2016 by Altynay Koshkinbayeva</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right"></p>
            
        
          </div>
        </div>
      </div>
    </footer>
   <script src="js/index.js"></script>

  <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 })
    </script>

</body>

</html>