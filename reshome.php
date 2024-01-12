<?php

include("categorycall.php");

?>


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
        <a href="cart.html">CART</a>
        <a href="checkout.php">CHECKOUT</a>
        <a href="my account2.php">MY ACCOUNT</a>

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
      <li><a href="my account2.php">My RES</a></li>
      <li><a href="cart.html">My order</a></li>
      <li><a href="checkout.php">Shipping address</a></li>
      <li><a href="#">Recently Viewed</a></li>
      <li><a href="newpass.php">Reset Password</a></li>
      <li><a href="RES Loginn.php">Logout</a></li>
   </ul>
</div>
      </div><br/>

     <!----------end top bar------------>

     <!----------category we sell------->
     <div class="flex-container">
      <div class="container1">
        <li><a href="#"><i class='bx bx-home-heart'></i> Home</a></li>
        <hr>
        <li><a href="#"><i class='bx bxs-t-shirt'></i> Fashion & Beauty</a></li>
        <hr>
        <li><a href="#"><i class='bx bxs-baby-carriage'></i> Kids & Women Clothes</a></li>
        <hr>
        <li><a href="#"><i class='bx bx-male'></i> Men & Women Clothes</a></li>
        <hr>
        <li><a href="#"><i class='bx bx-microchip'></i> Electronics & Accessories</a></li>
        <hr>
        <li><a href="#"><i class='bx bxs-t-shirt'></i> Made In Rwanda Fashion Clothes</a></li>
        <hr>
        <li><a href="#"><i class='bx bxs-coffee'></i> Made In Rwanda Products</a></li>
        <hr>
      </div>
    
      <div class="slideshow-container">
        <img class="slide" src="iphone 10.jpg" alt="Image 1">
        <img class="slide" src="product-7.jpg" alt="Image 2">
        <img class="slide" src="product-1.jpg" alt="Image 3">
        <img class="slide" src="product-3.jpg" alt="Image 4">
        <img class="slide" src="product-5.jpg" alt="Image 5">
      </div>

      <div class="show">
        <input type="file" id="profile-pic-input" accept="image/*" style="display: none;">
        <img class="profile-pic" src="<?php echo $photo; ?>" alt="Profile Picture"><br/>
         <h><b><i>Hi, <?php echo $username; ?></i></b></h>

       <h6>WELCOME TO RWANDA EASY SHOP (RESHOP)</h6>

       <div class="contents">
        <h5><i class='bx bxs-truck'></i> Great Value</h5>
        <h5><i class='bx bx-globe'></i> World Wide Delivery</h5>
        <h5><i class='bx bxs-credit-card-alt'></i> Safe Payment</h5>
        <h5><i class='bx bx-purchase-tag-alt'></i> Shop With Confidence</h5>
        <h3>
        <i class='bx bx-message-rounded'></i>
        <a href="contact.php" style="color: #fff;">CONTACT US</a></h3>
       </div>
      </div>
    </div>
  

     <!-------------end slide pic------>

     <!------------js for grt--------->
     <marquee behavior="" direction="">
        <script type="text/javascript">

            var today= new Date();
            
            if (today.getHours() < 12 ) {
              document.write("<h1>GOOD MORNING Sir/Madam, WELCOME TO RES ONLINE SHOP</h1>");
            }
            else if ((today.getHours() > 12) && (today.getHours() < 18)){
              document.write("<h1>GOOD AFTERNOON Sir/Madam, WELCOME TO RES ONLINE SHOP</h1>");
            }
            else{
              document.write("<h1>GOOD EVENING Sir/Madam, WELCOME TO RES ONLINE SHOP</h1>");
            }
            
            
            </script>
        </marquee>
        <!---------end of js grt------->

     <!-------------start product view------------>
    <div class="products">
     <div class="cards">
      <div class="card0">
         <img src="kik1.webp"width="100%"height="40%" alt="Description of the image">
      </div>
         <div class="card1">
           <p><h1>Store Shoes</h1></p>
           <p><h6>Help u to store shoes in arrangement $20</h6></p>
         </div>
             <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
             </div>
     </div>

     <div class="cards">
      <div class="card0">
         <img src="kik13.webp"width="100%"height="40%" alt="Description of the image">
      </div>
         <div class="card1">
           <p><h1>under wear</h1></p>
           <p><h6>for Women help to make body shape $12</h6></p>
         </div>
             <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
             </div>
     </div>

     <div class="cards">
        <div class="card0">
           <img src="kik2.jpeg"width="100%"height="40%" alt="Description of the image">
        </div>
           <div class="card1">
             <p><h1>BlackBery</h1></p>
             <p><h6>BlackBery $35</h6></p>
           </div>
               <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
               </div>
       </div>

       <div class="cards">
        <div class="card0">
           <img src="kik25.webp"width="100%"height="40%" alt="Description of the image">
        </div>
           <div class="card1">
             <p><h1>clothes</h1></p>
             <p><h6>$15</h6></p>
           </div>
               <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
               </div>
       </div>

       <div class="cards">
        <div class="card0">
           <img src="kik26.webp"width="100%"height="40%" alt="Description of the image">
        </div>
           <div class="card1">
             <p><h1>computer</h1></p>
             <p><h6>Lenovo $70</h6></p>
           </div>
               <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
               </div>
       </div>

       <div class="cards">
        <div class="card0">
           <img src="kik4.webp"width="100%"height="40%" alt="Description of the image">
        </div>
           <div class="card1">
             <p><h1>Women Clothes</h1></p>
             <p><h6>Meaning of pic or $???</h6></p>
           </div>
               <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
               </div>
       </div>

       <div class="cards">
        <div class="card0">
           <img src="kik32.webp"width="100%"height="40%" alt="Description of the image">
        </div>
           <div class="card1">
             <p><h1>Viva</h1></p>
             <p><h6>Meaning of pic or $???</h6></p>
           </div>
               <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
               </div>
       </div>

       <div class="cards">
        <div class="card0">
           <img src="kik5.webp"width="100%"height="40%" alt="Description of the image">
        </div>
           <div class="card1">
             <p><h1>OPPO</h1></p>
             <p><h6>Meaning of pic or $???</h6></p>
           </div>
               <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
               </div>
       </div>

       <div class="cards">
        <div class="card0">
           <img src="kik6.webp"width="100%"height="40%" alt="Description of the image">
        </div>
           <div class="card1">
             <p><h1>For Men</h1></p>
             <p><h6>Meaning of pic or $???</h6></p>
           </div>
               <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
               </div>
       </div>

       <div class="cards">
        <div class="card0">
           <img src="kik30.jpeg"width="100%"height="40%" alt="Description of the image">
        </div>
           <div class="card1">
             <p><h1>Keyboard</h1></p>
             <p><h6>Meaning of pic or $???</h6></p>
           </div>
               <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
               </div>
       </div>

       <div class="cards">
      <div class="card0">
         <img src="kik7.webp"width="100%"height="40%" alt="Description of the image">
      </div>
         <div class="card1">
           <p><h1>Sumsang s8</h1></p>
           <p><h6>Meaning of pic or $???</h6></p>
         </div>
             <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
             </div>
     </div>

      <div class="cards">
        <div class="card0">
           <img src="kig20.jpeg"width="100%"height="40%" alt="Description of the image">
        </div>
            <div class="card1">
             <p><h1>Made in Rwanda</h1></p>
             <p><h6>Meaning of pic or $???</h6></p>
            </div>
              <div class="card2">
                <button><i class='bx bx-cart-add'></i> <a href="cart.html"> BUY</a></button>
              </div>
        </div>
    </div>
    



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