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
    $checkQuery = "SELECT * FROM admin WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the admin data
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $photo = $row['photo'];

        // Store the admin data in session variables
        $_SESSION['admin_name'] = $name;
        $_SESSION['admin_photo'] = $photo;

        // Redirect to the admin dashboard
        header("Location: my res dashbrd.php");
        exit();
    } else {
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
        <form action="adminlogin.php" method="POST">
    <h2 style="font-style: italic;">Admin Login</h2>

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
        <p>Admin Access account!
            <a href="RES Loginn.php">Admin Login</a>
        </p>
    </div>
    <div class="register-link">
        <p>Add Admin
            <a href="signin.php">Regster Admin</a>
        </p>
    </div>
</form>

        <?php if (!empty($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>