<?php
    session_start();
if (isset($_POST['email'])) { 
$email = $_POST['email']; 
if ($email == '') { unset($email);}
 } 
    if (isset($_POST['password'])) {
		$password=$_POST['password']; 
	if ($password =='') {
		unset($password);} }
  

    
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
$password = stripslashes($password);
    $password = htmlspecialchars($password);

    $email = trim($email);
    $password = trim($password);

    include ("connection.php"); 
 
$result = mysqli_query($db,"SELECT * FROM book WHERE email='$email'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    
    exit ("Error");
    }
    else {
    
    if ($myrow['password']==$password) {
    
    $_SESSION['email']=$myrow['email']; 
    $_SESSION['id']=$myrow['id'];
    echo "Error! <a href='index.php'>Error</a>";
    }
 else {
   
	exit ("Error");
    }
    }
    ?>