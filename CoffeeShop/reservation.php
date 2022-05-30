<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];


// echo $name;
// echo $email;
// echo $number;
// echo $message;


$conn = mysqli_connect("localhost","root","","reserve");
if(!$conn){echo'not';
}
else{
    echo' YOUR TABLE HAS BEEN RESERVED';
}

if(!empty($name) || !empty($number) || !empty($email) || !empty($message));

// $sql = "INSERT INTO 'reservation' ('name','email','number','message') VALUES ('$name','$email','$number','$message')";
$sql = "INSERT INTO `reservation` (`name`, `email`, `number`, `message`) VALUES ('$name', '$email', '$number', '$message')";
$result = mysqli_query($conn,$sql );

?>