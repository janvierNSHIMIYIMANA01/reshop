<?php
$host = 'localhost';
$db = 'reshop';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Password reset functionality
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['reset_password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Hash the new password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Update the password in the database
        $sql = "UPDATE customer SET password='$password' WHERE email='$email'";
        $conn->query($sql);

        // Display success message
       // echo "Password reset successfully!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resert</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="RES Login.css">

<style>
    form {
        width: 400px;
        height: 400px;
        margin: 0 auto;
        margin-bottom: 10%;
        padding: 20px 30px;
        background-color: transparent;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    h2 {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #fff;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 50px;
        border: 1px solid #ccc;
        border-radius: 20px;
        box-sizing: border-box;
        background: transparent;
        color: #fff;
        font-weight: bold;
        font-size: 20px;
    }

     input[type="email"]::placeholder {
        color: #fff;
    }

    input[type="password"]::placeholder {
        color: #fff;
    }

    button[type="submit"] {
        background-color: #fff;
        color: #000;
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        margin-top: 30px;
        margin-left: 1px;
        width: 100%;
        font-size: 20px;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    button a{
        text-decoration: none;
        color: #000;
    }
</style>
</head>

<body>

<form method="POST">
    <h2>RESERT Password</h2><hr>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="New Password" required><br>
    <button type="submit" name="reset_password"><a href="RES Loginn.php">Reset Password</a></button>
</form>

</body>
</html>


