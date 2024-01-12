<?php
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
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Perform validation
    if (!empty($username)) {
        // Check if the data already exists
        $checkQuery = "SELECT * FROM customer WHERE username = ? OR email = ? OR phone = ?";
        $stmt = $conn->prepare($checkQuery);
        $stmt->bind_param("sss", $username, $email, $phone);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $message = "The provided data is already in use.";
        } else {
            // Handle photo upload
            $photo = $_FILES['photo']['name'];
            $photo_tmp = $_FILES['photo']['tmp_name'];

            // Specify the directory to save the uploaded photo
            $photo_directory = 'Pictures';
            $target_photo = $photo_directory . $photo;

            // Move the uploaded photo to the target directory
            move_uploaded_file($photo_tmp, $target_photo);

            // Prepare the SQL statement using a prepared statement
            $insertQuery = "INSERT INTO customer (username, email, phone, password, photo) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("sssss", $username, $email, $phone, $password, $target_photo);

            if ($stmt->execute()) {
                header("Location: RES Loginn.php");
                exit();
                $message = "Customer added successfully!";
            } else {
                $message = "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    } else {
        $message = "Username is required!";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIGNUP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="signup css.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="wrapper">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    <h2>Register</h2>
    <div class="input-box">
        <label>Username:
            <input type="text" name="username" id="username" placeholder="Username" required>
            <i class='bx bx-pencil'></i>
        </label>
    </div>

    <div class="input-box">
        <label>E-mail:
            <input type="text" name="email" id="email" placeholder="E-mail" required>
            <i class='bx bxs-envelope'></i>
        </label>
    </div>

    <div class="input-box">
        <label>Phone:
            <input type="number" name="phone" id="phone" placeholder="Phone" required>
            <i class='bx bxs-phone'></i>
        </label>
    </div>

    <div class="input-box">
        <label>Password:
            <input type="password" name="password" id="password" placeholder="Password" required>
            <i class='bx bxs-lock'></i>
        </label>
    </div>
     
    <div class="input-box">
        <label>photo profile:
            <input type="file" name="photo" id="photo" placeholder="Photo" required>
            <i class='bx bx-user'></i>
        </label>
    </div>
    <button type="submit" class="btn">Submit</button>

    <div class="login-link">
        <p>I have an account?
            <a href="RES Loginn.php">Login</a>, 
            <a href="index1.php">Home</a>
        </p>
    </div>
</form>
            <?php echo $message; ?>
        </div>
       
        <script src="" async defer></script>
    </body>
</html>