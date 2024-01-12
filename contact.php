<?php
session_start();

// Establish a connection to the database
$host = 'localhost';
$db = 'reshop';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Retrieve the username from the "customer" table
$username = '';
if (isset($_SESSION['email'])) {
    $loggedInEmail = $_SESSION['email'];
    $sql = "SELECT username FROM customer WHERE email = '$loggedInEmail'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $username = $row['username'];
        } else {
            echo 'No rows returned.';
        }
    } else {
        echo 'Query failed: ' . $conn->error;
    }
} else {
    echo 'Email not found in session.';
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width. initial-scale=1.0">

    <!----------link to design------------>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <title>RESHOP</title>

    <!------------link to css------------>
    <link rel="stylesheet" href="reshome.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body bgcolor="#f3f6ff">
    <!-------------top bar---------------->
      <span>
        <i class='bx bx-envelope'> support@gmail.com</i>
        <i class='bx bx-phone'> +250 784 573 353</i>
      </span>

      <div class="nav">
        <a href="reshome.php">HOME</a>
        <a href="product.php">PRODUCTS</a>
        <a href="products-details.html">PRODUCTS-DETAILS</a>
        <a href="cart.php">CART</a>
        <a href="checkout.html">CHECKOUT</a>
        <a href="my account.html">MY ACCOUNT</a>

        <p>
         <select id="country-select">
            <option value="" disabled selected>Select Country</option>
            <option value="en">Rwanda</option>
            <option value="fr">DRC</option>
            <option value="es">Kenya</option>
            <option value="kin">Uganda</option>
            <option value="ar">USA</option>
            <option value="ch">China</option>
         </select>

         <select id="language-select">
            <option value="" disabled selected>Select Language</option>
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
            <option value="kin">Kinyarwanda</option>
            <option value="ar">Arabic</option>
            <option value="ch">Kiswahili</option>
         </select>
        </p>
      </div>

      <script>
        // Check if the user has an account
        var hasAccount = true; // Replace with your actual logic to check the user's account status
      
        // Get the cart link element
        var cartLink = document.getElementById('cart-link');
      
        // Add event listener to the cart link
        cartLink.addEventListener('click', function(event) {
          // Check if the user has an account
          if (!hasAccount) {
            event.preventDefault(); // Prevent default link behavior
            alert('You need to have an account to view the cart.'); // Display error message
            window.location.href = 'cart.html'; // Redirect to loading page (index1.html)
          }
        });
      </script>

      <div class="header">
        <div class="logo">
          <a href="reshome.php">
           <img src="LOGO12.png" alt="logo">
          </a>
        </div>

        <div class="search">
          <input type="text" placeholder="Search">
          <a href="#" class="search-link"><i class='bx bx-search-alt-2'></i></a>
        </div>

        <div class="cartt">
            <a href="cart.html">
              <i class='bx bx-cart-add'> Cart <i class='bx bx-chevron-right'></i></i>
            </a>
        </div>

        <div class="user">
   <button class="user-button">
      <i class="bx bx-user"></i>
      <h>Hi, <?php echo $username; ?></h>
   </button>
   <ul class="dropdown-menu">
      <li><a href="#">My RES</a></li>
      <li><a href="#">My order</a></li>
      <li><a href="#">Shipping address</a></li>
      <li><a href="#">Recently Viewed</a></li>
      <li><a href="#">Reset Password</a></li>
      <li><a href="#">Logout</a></li>
   </ul>
</div>
      </div><br/>

     <!----------end top bar------------>

<div class="container">
    <div class="content">
        <div class="left-side">
            <div class="address details">
            <i class='bx bx-location-plus' style='color:#ff6f6f' ></i>
                <div class="topic" style="font-size: 20px;">Address</div>
                <div class="text-two" style="font-size: 20px;">Nyamirambo</div>
            </div>
            <div class="phone details">
            <i class='bx bx-phone-call' style='color:#ff6f6f' ></i>
                <div class="topic" style="font-size: 20px;">Phone</div>
                <div class="text-one" style="font-size: 20px;">+250 784 573 353</div>
                
            </div>
            <div class="email details">
            <i class='bx bx-envelope-open' style='color:#ff6f6f' ></i>
                <div class="topic" style="font-size: 20px;">Email</div>
                <div class="text-one" style="font-size: 20px;">janvier@gmail.com</div>
                
            </div>
        </div>
        <div class="right-side">
            <div class="topic-text" style="color: #ff6f6f;">Share your idea</div>
            <marquee behavior="animation" direction="left" style="color: #000;"><p style="font-size: 25px;">Your are Allowed to share your, idea please, dropped like a rock.</p></marquee>
            <form method="post" action="#">
                <div class="input-box">
                    <input type="text" name="name" value="" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <input type="email" name="email"value="" placeholder="Enter your email" required>
                </div>
                <div class="input-box message-box">
                    <textarea name="message" value="message" placeholder="Your message" required></textarea>
                </div>
                <div class="button">
                    <input type="submit" value="Send Now">
                </div>
            </form>

            <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "reshop";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input from the form
    $name = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO message (username, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    // Execute the statement
    $stmt->execute();

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>

        </div>
    </div>
</div><br/>
     <!----------------footer start---------->

     <footer>
        <div class="footer-container">
          <div class="footer-section">
            <h2>Get in Touch</h2>
            <ul class="contact-info">
              <li><a href="#"><i class='bx bx-current-location'></i>KN 236 st, Nyamirambo, RWANDA</a></li>
              <li><a href="#"><i class='bx bx-envelope'></i>reshop@gmail.com</a></li>
              <li><a href="#"><i class='bx bx-phone'></i>+250 784 573 353</a></li>
            </ul>
          </div>
      
          <div class="footer-section">
            <h2><b>Follow Us</b></h2>
            <div class="contact-info">
              <div class="social">
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
              </div>
            </div>
          </div>
      
          <div class="footer-section">
            <h2>Company Info</h2>
            <ul>
              <li><a href="#"><i class='bx bx-chevron-right'></i>About Us</a></li>
              <li><a href="#"><i class='bx bx-chevron-right'></i>Privacy Policy</a></li>
              <li><a href="#"><i class='bx bx-chevron-right'></i>Terms & Condition</a></li>
            </ul>
          </div>
      
          <div class="footer-section">
            <h2>Purchase Info</h2>
            <ul>
              <li><a href="#"><i class='bx bx-chevron-right'></i>Payment Policy</a></li>
              <li><a href="#"><i class='bx bx-chevron-right'></i>Shipping Policy</a></li>
              <li><a href="#"><i class='bx bx-chevron-right'></i>Return Policy</a></li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="footer-section">
          <div class="payment-method">
            <h2>We Accept:</h2>
            <img src="payment-method.png" alt="Payment Method" />
          </div>
        </div>
        <div class="footer-section">
          <div class="payment-security">
            <h2>Secured By:</h2>
            <div class="security-logos">
              <img src="godaddy.svg" alt="Payment Security" />
              <img src="norton.svg" alt="Payment Security" />
              <img src="ssl.svg" alt="Payment Security" />
            </div>
          </div>
        </div>
      </footer>
      <!----------------end of footer----------->

      <div class="footer-bottom">
        <div class="col-md-6 copyright">
          <h3 class="left-text">&copy; <a href="reshome.php">Reshop online</a>.</h3>
          <h3 class="right-text">Designer: <a href="#">Janvier Cruise</a></h3>
        </div>
      </div>

        <!---------------back to top bttn---------------->
        <a href="#" class="back-to-top"><i class='bx bx-up-arrow-circle'></i></a>

        <!------------------end of top bttn------------->
  

<script src="index1.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
  var profilePicInput = document.getElementById('profile-pic-input');
  var profilePic = document.querySelector('.profile-pic');

  profilePic.addEventListener('click', function() {
    profilePicInput.click();
  });

  profilePicInput.addEventListener('change', function(event) {
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
      profilePic.src = e.target.result;
    };

    reader.readAsDataURL(file);
  });
});
</script>
</body>
</html>