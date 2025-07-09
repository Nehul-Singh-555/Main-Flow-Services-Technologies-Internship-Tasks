<?php
session_start();
if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css?v=2">
</head>
<body>
    <form method="POST" action="login.php">
        <h2>Login</h2>

        <!-- Show error message if login fails -->
        <?php if (isset($_GET['error'])): ?>
            <div class="error-box">
                Incorrect username/email or password!
            </div>

        <?php endif; ?>

        <input type="text" name="username" placeholder="Username or Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
</body>
</html>
