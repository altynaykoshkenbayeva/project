<?php
	include("connection.php");

	if(isset($_POST['submit'])){
	 

if(isset($_POST['name'])){
	$name = $_POST['name'];
}
if(isset($_POST['email'])){
	$surname = $_POST['email'];
}
if(isset($_POST['tour'])){
	$email = $_POST['tour'];
}
if(isset($_POST['number'])){
	$number = $_POST['number'];
}
if(isset($_POST['data'])){
	$data= $_POST['data'];
}
if(isset($_POST['time'])){
	$time= $_POST['time'];
}

    $result = mysqli_query($db, "SELECT * FROM book WHERE email='$email'");
	$row = $result->fetch_array();
    if (!empty($row['id'])) {
		echo "Sorry, this email have been booked. ";
    }

    $result1 = mysqli_query($db,"INSERT INTO book VALUES ('$name','$email','$number','$tour','$data','$time')");
	$resNew = mysqli_query($db,"SELECT * FROM book WHERE email='$email'");
	$row2 = $resNew->fetch_array();
	if($row2['email']!=$email){
		echo "Sorry you have problem with that";
	}else{
		echo "Hulk smash";
	}
}


?>