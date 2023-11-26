<?php
$email = $_POST['email'];
$password = $_POST['password'];
$Confirmpassword = $_POST['Confirmpassword'];

/// Database connection
$conn = new mysqli('localhost', 'root', '', 'icoder');
if ($conn->connect_error) {
   die('Connection Failed : ' . $conn->connect_error);
} else {
$stmt = $conn->prepare("INSERT INTO login (email, password, Confirmpassword) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $password, $Confirmpassword);
$stmt->execute();
 echo "Create account successfully...";
 $stmt->close();
$conn->close();
}


?>


