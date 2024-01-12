<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- Link to stylesheets and external resources -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="add_product2.css">

    <title>RESHOP - Edit Products</title>
</head>
<body bgcolor="#f3f6ff">
    <!-- Top bar and navigation -->
    <span>
        <i class='bx bx-envelope'> support@gmail.com</i>
        <i class='bx bx-phone'> +250 784 573 353</i>
    </span>

    <div class="nav">
        <!-- Navigation links -->
    </div>

    <div class="header">
        <!-- Logo and search bar -->
    </div>

    <!-- Breadcrumb -->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="reshome.php">Home</a></li>
            <li class="breadcrumb-item"><a href="product.php">Products</a></li>
            <li class="breadcrumb-item active">Edit Products</li>
        </ul>
    </div>

    <!-- Edit Selected Products Form -->
    <form method="post" action="save_changes.php">
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Number</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Payment</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // Assuming you have a database connection
                $dbname = "reshop";
                $servername = "localhost";
                $username = "root";
                $password = "";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $query = "SELECT * FROM add_product";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td><input type="text" name="edit_product[' . $row['id'] . '][P_Name]" value="' . $row['P_Name'] . '"></td>';
                        echo '<td><input type="text" name="edit_product[' . $row['id'] . '][P_Number]" value="' . $row['P_Number'] . '"></td>';
                        echo '<td><input type="text" name="edit_product[' . $row['id'] . '][price]" value="' . $row['price'] . '"></td>';
                        echo '<td><input type="text" name="edit_product[' . $row['id'] . '][quantity]" value="' . $row['quantity'] . '"></td>';
                        echo '<td><input type="text" name="edit_product[' . $row['id'] . '][Payment]" value="' . $row['Payment'] . '"></td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">No products found</td></tr>';
                }

                $conn->close();
                ?>

            </tbody>
        </table>

        <!-- Save Changes Button -->
        <div class="edit">
            <input type="submit" class="btn" value="Save Changes">
        </div>
    </form>

    <!-- Footer -->
    <footer>
        <!-- Footer content -->
    </footer>

    <div class="footer-bottom">
        <!-- Footer bottom content -->
    </div>

    <!-- Back to top button -->
    <a href="add product.php" class="back-to-top"><i class='bx bx-up-arrow-circle'></i></a>

    <!-- Additional scripts for functionality -->
    <script src="index1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Additional scripts if needed
    </script>
</body>
</html>
