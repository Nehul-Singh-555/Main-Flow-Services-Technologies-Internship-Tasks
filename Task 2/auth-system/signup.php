<?php
require 'config.php';

$signupMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password !== $confirm_password) {
        $signupMessage = "<div class='error-box'>Passwords do not match!</div>";
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
        $stmt->bind_param("ss", $email, $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $signupMessage = "<div class='error-box'>Username or Email already exists!</div>";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);
            $stmt->execute();
            $signupMessage = "<div class='success-box'>Signup successful! <a href='index.php'>Login here</a></div>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css?v=2">
</head>
<body>
    <form method="POST">
        <h2>Signup</h2>

        <!-- Display messages -->
        <?php if (!empty($signupMessage)) echo $signupMessage; ?>

        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Signup</button>
        <p>Already have an account? <a href="index.php">Login</a></p>
    </form>
</body>
</html>
