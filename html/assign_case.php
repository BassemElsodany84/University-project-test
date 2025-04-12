<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'doctor') {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['case_id'])) {
    $doctor_id = $_SESSION['user_id'];
    $case_id = (int) $_POST['case_id'];

    $stmt = $conn->prepare("UPDATE cases SET doctor_id = ? WHERE id = ?");
    $stmt->bind_param("ii", $doctor_id, $case_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Case successfully assigned to you.";
    } else {
        $_SESSION['message'] = "Error assigning case.";
    }

    $stmt->close();
    header("Location: cases.php");
    exit;
}

header("Location: cases.php");
exit;
?>