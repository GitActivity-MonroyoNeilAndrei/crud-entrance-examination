<?php
require 'db_config.php';

$fullName = $_POST['fullName'];
$address = $_POST['address'];
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$civilStatus = $_POST['civilStatus'];
$contactNo = $_POST['contactNo'];
$salary = $_POST['salary'];
$status = $_POST['status'] ?? 0;


$stmt = $conn->prepare("INSERT INTO employeefile (fullname, address, birthdate, age, gender, civilstat, contactnum, salary, isactive) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssisssdi", $fullName, $address, $birthdate, $age, $gender, $civilStatus, $contactNo, $salary, $status);

if ($stmt->execute()) {
    echo "Employee Added Successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
