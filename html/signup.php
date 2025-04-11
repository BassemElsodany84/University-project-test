<?php
session_start();
include 'db.php';

// Check if email exists
$email = $_POST['email'];
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    $_SESSION['signup_error'] = "Email already registered.";
    header("Location: index.php#signup");
    exit;
}
$check->close();

// Proceed with signup
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];
$active = $role === 'patient' ? 1 : 0;

$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, role, active) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $first, $last, $email, $password, $role, $active);
$stmt->execute();
$user_id = $stmt->insert_id;
$stmt->close();

if ($role === 'doctor') {
    $license = $_POST['license'] ?? '';
    $degree = $_POST['degree'] ?? '';
    $filename = '';

    if (isset($_FILES['verification_id']) && $_FILES['verification_id']['error'] === 0) {
        $upload_dir = 'uploads/ids/';
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        $filename = $upload_dir . time() . "_" . basename($_FILES["verification_id"]["name"]);
        move_uploaded_file($_FILES["verification_id"]["tmp_name"], $filename);
    }

    $stmt = $conn->prepare("INSERT INTO doctors (user_id, license_number, medical_degree, verification_file) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $license, $degree, $filename);
    $stmt->execute();
    $stmt->close();
}

$_SESSION['user_id'] = $user_id;
$_SESSION['user_name'] = "$first $last";
$_SESSION['role'] = $role;
$_SESSION['active'] = $active;

$_SESSION['signup_success'] = "Account created successfully!";
header("Location: index.php");
exit;
?>