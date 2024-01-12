<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----------link to design------------>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <title>RESHOP</title>

    <!------------link to css------------>
    <link rel="stylesheet" href="my account2.css">
</head>

    <body>
        <body>
            <!-------------top bar---------------->
              <span>
                <i class='bx bx-envelope'> support@gmail.com</i>
                <i class='bx bx-phone'> +250 784 573 353</i>
              </span>
        
              <div class="nav1">
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
        
                <marquee><h1>MY ACCOUNT SITE VIEWED, U'RE WELCOME TOO... </h1></marquee>
               <!---------viewed list--------->
               <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="reshome.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="product.php">Products</a></li>
                    <li class="breadcrumb-item active">My account</li>
                </ul>
            </div>
        
        <!-- Breadcrumb End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab">
                                <i class='bx bxs-dashboard'></i>Dashboard</a><hr>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab">
                                <i class='bx bx-shopping-bag'></i>Orders</a><hr>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab">
                                <i class='bx bxs-credit-card'></i>Payment Method</a><hr>
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab">
                                <i class='bx bx-location-plus'></i>address</a><hr>
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab">
                                <i class='bx bx-user'></i>Account Details</a><hr>
                            <a class="nav-link" href="#"><i class='bx bx-log-out-circle bx-fade-left bx-rotate-90'></i>
                                <label onclick="logout()">Logout</label>
                            </a>

                            <script>
                                function logout() {
                                  var result = confirm("Are you sure you want to logout?");
                                  if (result) {
                                    // Perform logout action
                                    alert("You have been logged out!");
                                    window.location.href="index.html";
                                    // Redirect to another page if needed: window.location.href = "logout.html";
                                  } else {
                                    // Stay on the current page
                                    alert("Logout canceled. You're still on the page!");
                                    window.location.href="my account.html";
                                  }
                                }
                              </script>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                <div class="tap">
                                <h4>Dashboard</h4>
                                <p>
                                    Control my account, on RESHOP how i was used my account
                                </p> 
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive"><br/>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product Name</td>
                                                <td>date???</td>
                                                <td>$???</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Product Name</td>
                                                <td>date???</td>
                                                <td>$???</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Product Name</td>
                                                <td>date???</td>
                                                <td>$???</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Payment Method</h4>
                                <p>
                                   there are many ways used in payment 
                                </p> 
                            </div>
                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Address</h4>
                                <div class="row">
                                    <div class="col-md-6" id="#checkout.html">
                                        <h5>Payment Address</h5>
                                        <p>KN 786 st, Cyivugiza, RWANDA</p>
                                        <p>Mobile: +250 798 870 769</p>
                                        <button class="btn"><a href="#">Edit Address</a></button>
                                    </div>
                                    <div class="col-md-6" href="chechout.html">
                                        <h5>Shipping Address</h5>
                                        <p>123 Nairobi street, Nairobi, Kenya</p>
                                        <p>Mobile: +012-345-6789</p>
                                        <button class="btn"><a href="#">Edit Address</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Account Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Mobile">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Address">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn"><a href="checkout.html">Update Account</a></button>
                                        <br><br>
                                    </div>
                                </div>
                                <h4>Password change</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Current Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="New Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    // Get all the rows
    const rows = document.querySelectorAll('.nav-link');

    // Add click event listener to each row
    rows.forEach((row, index) => {
        row.addEventListener('click', (event) => {
            event.preventDefault();

            // Remove the 'show active' class from all rows
            rows.forEach((row) => {
                row.classList.remove('active');
            });

            // Add the 'show active' class to the clicked row
            row.classList.add('active');

            // Get the href attribute of the clicked row
            const targetId = row.getAttribute('href');

            // Get all the tab content panes
            const tabContentPanes = document.querySelectorAll('.tab-pane');

            // Remove the 'show active' class from all tab content panes
            tabContentPanes.forEach((pane) => {
                pane.classList.remove('show', 'active');
            });

            // Add the 'show active' class to the corresponding tab content pane
            const targetPane = document.querySelector(targetId);
            targetPane.classList.add('show', 'active');
        });
    });
</script>
</body>
</html>