<?php
 $host = "localhost";
 $username = "root";
 $pass = "";
 $dbname = "reshop";

 $conn =new mysqli($host,$username,$pass,$dbname);
 if($conn-> connect_error){
        die("connection error:" .$conn->connect_error);
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
    // echo 'Email not found in session.';
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----------link to design------------>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <title>RESHOP</title>

    <!------------link to css------------>
    <link rel="stylesheet" href="product.css">
</head>
<body>
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

      <div class="header">
        <div class="logo">
          <a href="index.html">
           <img src="LOGO12.png" alt="logo">
          </a>
        </div>

        <div class="search">
          <input type="text" placeholder="Search">
          <a href="#" class="search-link"><i class='bx bx-search-alt-2'></i></a>
        </div>

      </div><br/>

     <!----------end top bar------------>

        <marquee><h1>PRODUCT SITE VIEWED, U'RE WELCOME TOO... </h1></marquee>
       <!---------viewed list--------->
       <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="reshome.php">Home</a></li>
            <li class="breadcrumb-item"><a href="product.php">Products</a></li>
            <li class="breadcrumb-item active">Product List</li>
        </ul>
    </div>
    <!-------------end viewed list--------->

    <!-------------search, price-range------>
    <div class="container1">
        <div class="search">
            <input class="srch" type="search" name="" size="20" placeholder="What are you looking?">
            <a href="#">
             <button class="btn">
               Search
             </button>
            </a>
        </div>
      
        <select name="" id="option" class="select1">
          <option value="product short by">Product Short By</option>
          <option value="">Newest</option>
          <option value="">Popular</option>
          <option value="">Most Sale</option>
         </select>

         <select name="" id="option" class="select">
          <option value="select price range">select price range</option>
           <option value="">$100</option>
           <option value="">$200</option>
           <option value="">$300</option>
           <option value="">$400</option>
         </select>

    </div>
<!---------------end search----------->
<hr>

<!--------products------->
<div class="products">
 <div class="cards">
  <div class="card0">
     <img src="kik2.jpeg"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>BlackBery/h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>

 <div class="cards">
  <div class="card0">
     <img src="kik16.jpeg"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>Air Pro3</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
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
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>

 <div class="cards">
  <div class="card0">
     <img src="kig22.png"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>Smooth Shirt</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>

 <div class="cards">
  <div class="card0">
     <img src="kig22.jpg"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>Shirt</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>

 <div class="cards">
  <div class="card0">
     <img src="kig23.jpg"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>Shirt</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>

 <div class="cards">
  <div class="card0">
     <img src="kik27.webp"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>Smooth Shirt</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>

 <div class="cards">
  <div class="card0">
     <img src="kik31.webp"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>Smooth Shirt</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>

 <div class="cards">
  <div class="card0">
     <img src="kik28.jpg"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>Smooth Shirt</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>

 <div class="cards">
  <div class="card0">
     <img src="kik14.webp"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>Shirt</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>
 <div class="cards">
  <div class="card0">
     <img src="kik10.jpg"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>Iphone6 +</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div>
 <div class="cards">
  <div class="card0">
     <img src="kik9.webp"width="100%"height="40%" alt="Description of the image">
  </div>
     <div class="card1">
       <p><h1>T-Shirt</h1></p>
       <p><h6>Meaning of pic or $???</h6></p>
     </div>
         <div class="card2">
            <button><i class='bx bx-cart-add'></i> <a href="#"> BUY</a></button>
         </div>
 </div><br/>

     
       <!-- Pagination Start -->
          <div class="col-md-12">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
              </ul>
            </nav>
          </div>
        <!-- Pagination Start -->

<!-------slide--------
<div class="container2">
  <h2>Category</h2>
  <li><a href="#"><i class='bx bxs-t-shirt'></i> Fashion & Beauty</a></li><hr>
  <li><a href="#"><i class='bx bxs-baby-carriage'></i> Kids & Women Clothes</a></li><hr>
  <li><a href="#"><i class='bx bx-male'></i> Men & Women Clothes</a></li><hr>
  <li><a href="#"><i class='bx bx-microchip'></i> Electronics & Accessories</a></li><hr>
  <li><a href="#"><i class='bx bxs-t-shirt'></i> Made In Rwanda Fashion Clothes</a></li><hr>
  <li><a href="#"><i class='bx bxs-coffee'></i> Made In Rwanda Products</a></li><hr>
</div>
</div>
--->

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
      <h3 class="left-text">&copy; <a href="index.html">Reshop online</a>.</h3>
      <h3 class="right-text">Designer: <a href="https://www.facebook.com/">Janvier Cruise</a></h3>
    </div>
  </div>

    <!---------------back to top bttn---------------->
    <a href="#" class="back-to-top"><i class='bx bx-up-arrow-circle'></i></a>

    <!------------------end of top bttn------------->


  <script src="index1.js"></script>
</body>
</html>