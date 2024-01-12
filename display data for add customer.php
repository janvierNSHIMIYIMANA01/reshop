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
      <th>username</th>
      <th>E_mail</th>
      <th>Phone</th>
      <th>Password</th>
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

       $sql = "SELECT id, username, email, phone, password FROM customer";
       $result = $conn->query($sql);
       if($result-> num_rows > 0)
       {
        while($row = $result->fetch_assoc())
         {
          echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["password"]."</tr></td>";
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