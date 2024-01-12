<?php
session_start();

$dbname = "reshop";
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Prepare the SQL statement using a prepared statement
    $sql = "SELECT * FROM customer WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login successful
        $row = $result->fetch_assoc();

        // Set user data in session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];

        // Set a cookie to remember the user (optional)
        setcookie('remember_me', $row['id'], time() + (86400 * 30), '/');

        // Redirect to signin.html or any other page
        header("Location: reshome.php");
        exit(); // Make sure to exit after redirecting
    } else {
        // Login failed
        $message = "Invalid email or password.";
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RES</title>
    <link rel="stylesheet" href="RES Login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h2 style="font-style: italic;">Login</h2>

            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock'></i>
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox">Show password
                </label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account?
                    <a href="signin.php">Register</a>
                </p>
            </div>
             <div class="register-link">
                <p>Admin Access account!
                    <a href="adminlogin.php">Admin Login</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>