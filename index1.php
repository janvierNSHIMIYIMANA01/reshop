<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width. initial-scale=1.0">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

    <!----------link to design------------>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <title>RESHOP</title>

    <!------------link to css------------>
    <link rel="stylesheet" href="index1.css">
</head>
<body bgcolor="#f3f6ff">
    <!-------------top bar---------------->
      <span>
        <i class='bx bx-envelope'> support@gmail.com</i>
        <i class='bx bx-phone'> +250 784 573 353</i>
      </span>

      <div class="nav">
        <a href="index1.html">HOME</a>
        <a href="RES Loginn.php">PRODUCTS</a>
        <a href="RES Loginn.php">PRODUCTS-DETAILS</a>
        <a href="RES Loginn.php">CART</a>
        <a href="RES Loginn.php">CHECKOUT</a>
        <a href="RES Loginn.php">MY ACCOUNT</a>

        <p>
         <select id="languagee-selecti">
            <option value="" disabled selected>Select Language</option>
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
            <option value="kin">Kinyarwanda</option>
            <option value="ar">Arabic</option>
            <option value="ch">China</option>
         </select>

         <select id="country-selecti">
            <option value="" disabled selected>Select Country</option>
            <option value="en">Rwanda</option>
            <option value="fr">DRC</option>
            <option value="es">Kenya</option>
            <option value="kin">Uganda</option>
            <option value="ar">USA</option>
            <option value="ch">China</option>
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
        <img class="slide" src="kik34.jpg" alt="Image 3">
        <img class="slide" src="st rda.webp" alt="Image 4">
        <img class="slide" src="kik32.webp" alt="Image 5">
      </div>

      <div class="show">
        <img class="profile-pic" src="shop.jpg" alt="Profile Picture"><br/>
       <a href="RES Loginn.php"><button class="login">Login</button></a>
       <a href="signin.php"><button class="signup">Signup</button></a>

       <h6>WELCOME TO RWANDA EASY SHOP (RESHOP)</h6>

       <div class="contents">
        <h5><i class='bx bxs-truck'></i> Great Value</h5>
        <h5><i class='bx bx-globe'></i> World Wide Delivery</h5>
        <h5><i class='bx bxs-credit-card-alt'></i> Safe Payment</h5>
        <h5><i class='bx bx-purchase-tag-alt'></i> Shop With Confidence</h5>
        <a href="RES Loginn.php">CONTACT US</a>
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
           <p><h6>Meaning of pic or $???</h6></p>
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
           <p><h6>Meaning of Pic or $??</h6></p>
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
             <p><h6>Meaning of pic or $???</h6></p>
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
             <p><h6>Meaning of pic or $???</h6></p>
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
             <p><h6>Meaning of pic or $???</h6></p>
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