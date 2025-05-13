<?php
require_once 'connection.php'; // your DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define all variables from POST
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password']; // ✅ moved above conditional
    $userRole = $_POST['user-role'];

    // Now we can safely compare
    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    // Continue with hashing, inserting, etc.
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO Users (FullName, Email, Age, Password, UserRole) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $fullname, $email, $age, $hashedPassword, $userRole);

    if ($stmt->execute()) {
    // Registration successful — now redirect
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}


    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
