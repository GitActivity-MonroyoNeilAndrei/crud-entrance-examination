<?php

require 'db_config.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM userfile WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($hashed_password);
$stmt->fetch();

if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
    $_SESSION['username'] = $username;
    echo "success";
} else {
    echo "Invalid username or password.";
}

$stmt->close();
$conn->close();

?>
