<?php
require 'db_config.php';

$id = $_POST['id'];
$fullName = $_POST['fullName-edit'];
$address = $_POST['address-edit'];
$birthdate = $_POST['birthdate-edit'];
$age = intval($_POST['age-edit']);
$gender = $_POST['gender-edit'];
$civilStatus = $_POST['civilStatus-edit'];
$contactNo = $_POST['contactNo-edit'];
$salary = $_POST['salary-edit'];
$status = $_POST['status-edit'] ?? 0;

$stmt = $conn->prepare("UPDATE employeefile SET fullname = ?, address = ?, birthdate = ?, age = ?, gender = ?, civilstat = ?, contactnum = ?, salary = ?, isactive = ? WHERE recid = ?");

$stmt->bind_param("sssisssdii", $fullName, $address, $birthdate, $age, $gender, $civilStatus, $contactNo, $salary, $status, $id);

if ($stmt->execute()) {
    echo "Employee Updated Successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
