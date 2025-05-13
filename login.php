<?php
session_start();
require_once 'connection.php'; // Include your DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement to check if the email exists
    $stmt = $conn->prepare("SELECT id, fullname, password, userrole FROM Users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Store session data for the user
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['role'] = $user['userrole'];

            // Debugging: Ensure session variables are set
            var_dump($_SESSION); 

            // Redirect to homepage (ensure no output above this line)
            header("Location: home.php");
            exit(); // Ensure the script stops here after the redirect
        } else {
            $error_message = "Incorrect password.";
            echo $error_message; // Output error message
        }
    } else {
        $error_message = "No account found with that email.";
        echo $error_message; // Output error message
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
