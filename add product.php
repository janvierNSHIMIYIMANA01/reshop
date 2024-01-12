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
    $P_Name = isset($_POST['P_Name']) ? $_POST['P_Name'] : '';
    $P_Number = isset($_POST['P_Number']) ? $_POST['P_Number'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
    $Payment = isset($_POST['Payment']) ? $_POST['Payment'] : '';

    // Perform validation
    if (!empty($P_Name)) {
        // Check if the data already exists
        $checkQuery = "SELECT * FROM add_product WHERE P_Name = ? OR P_Number = ?";
        $stmt = $conn->prepare($checkQuery);
        $stmt->bind_param("ss", $P_Name, $P_Number);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $message = "The provided data is already in use.";
        } else {
            // Prepare the SQL statement using a prepared statement
            $insertQuery = "INSERT INTO add_product (P_Name, P_Number, price, quantity, Payment) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("sssss", $P_Name, $P_Number, $price, $quantity, $Payment);

            if ($stmt->execute()) {

                //directly path through
               // header("Location: my res dashbrd.html");
               // exit();
                $message = "Product added successfully!";
            } else {
                $message = "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    } else {
        $message = "Product name is required!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!----------link to design------------>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <title>RESHOP</title>

    <!------------link to css------------>
    <link rel="stylesheet" href="add product2.css">
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
      </div><br/>
     <!----------end top bar------------>

        <!---  <marquee><h1>ADD OR REMOVE PRODUCTS TO CART... </h1></marquee> --->
       <!---------viewed list--------->
       <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="reshome.php">Home</a></li>
            <li class="breadcrumb-item"><a href="product.php">Products</a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ul>
    </div>
    <!-------------end viewed list--------->

            <!------------------ADD PRODUCT-------------------->
             
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
             <p style="font-size:20px"><b>Add Products</b></p>
             <div class="add">
               Product Pic  <input type="file" name="photo">

                P_Name   <input type="text" class="textbox" name="P_Name" id="P_Name" placeholder="Product Name" required>
                P_Number <input type="text" class="textbox" name="P_Number" id="P_Number" placeholder="Product Number" required>
                Price   <input type="text" class="textbox" name="price" id="price" placeholder="Product Price" required>
                P_Quantity   <input type="text" class="textbox" name="quantity" id="quantity" placeholder="Product Quantity" required>
                Payment <input type="text" class="textbox" name="Payment" id="Payment" placeholder="Payment" required>

                <input type="submit"class="btn" value="Add Product">
             </div>
            
           </form>


          <!----------------footer start---------->

          <br/> <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h2>Get in Touch</h2>
        <ul class="contact-info">
          <li><a href="https://www.google.com/maps/place/Nyamirambo,+Kigali/@-1.994264,30.025942,14z/data=!3m1!4b1!4m6!3m5!1s0x19dca5f2f3561e95:0x40ee09bd8cfb9974!8m2!3d-1.991181!4d30.0463012!16s%2Fm%2F011l1nc3?entry=ttu"><i class='bx bx-current-location'></i>KN 236 st, Nyamirambo, RWANDA</a></li>
          <li><a href="#"><i class='bx bx-envelope'></i>reshop@gmail.com</a></li>
          <li><a href="tel:+250784589476345"><i class='bx bx-phone'></i>+250 784 573 367</a></li>
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
    <a href="add product.php" class="back-to-top"><i class='bx bx-up-arrow-circle'></i></a>

    <!------------------end of top bttn------------->

    <script src="index1.js"></script>
    <!-------slide down to shippng address------->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
          $('.shipping #myCheckbox').change(function() {
            if ($(this).is(':checked')) {
              $('.row2').slideDown();
            } else {
              $('.row2').slideUp();
            }
          });
        });
      </script>

      <!---------to patment mthd------->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function() {
          $('input[name="payment"]').change(function() {
            var selectedPayment = $(this).attr('id');
            $('.payment-content').hide();
            $('#' + selectedPayment + '-show').show();
          });
        });
      </script>
</body>
</html>