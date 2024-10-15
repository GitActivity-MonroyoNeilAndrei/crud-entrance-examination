<?php
require 'db_config.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM employeefile WHERE recid = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Execution failed']);
        }
        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Statement preparation failed']);
    }
}

$conn->close();
?>
