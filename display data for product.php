<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="display data for customer.css">
</head>
<body>
<table>
    <tr>
      <th>id</th>
      <th>date</th>
      <th>p_name</th>
      <th>p_number</th>
      <th>price</th>
      <th>Quantity</th>
      <th>Payment</th>
    </tr><br/>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reshop";

     $conn = mysqli_connect($servername,$username,$password,$dbname);
      if($conn->connect_error)
       {
        die("connection failed:".$conn->connect_error);
       }

       $sql = "SELECT id, date, p_name, p_number, price, quantity, payment FROM add_product";
       $result = $conn->query($sql);
       if($result-> num_rows > 0)
       {
        while($row = $result->fetch_assoc())
         {
          echo "<tr><td>".$row["id"]."</td><td>".$row["date"]."</td><td>".$row["p_name"]."</td><td>".$row["p_number"]."</td><td>".$row["price"]."</td><td>".$row["quantity"]."</td><td>".$row["payment"]."</tr></td>";
         }

       echo "</table>";
       }
       else{
        echo "0 result";
       }

       $conn->close();

    ?>
  </table>
</body>
</html>