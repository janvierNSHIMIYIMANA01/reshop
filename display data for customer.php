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
      <th>First Name</th>
      <th>Last Name</th>
      <th>Phone Number</th>
      <th>E_mail</th>
      <th>Address</th>
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

       $sql = "SELECT id, f_name, l_name, p_number, E_mail, Address FROM add_customer";
       $result = $conn->query($sql);
       if($result-> num_rows > 0)
       {
        while($row = $result->fetch_assoc())
         {
          echo "<tr><td>".$row["id"]."</td><td>".$row["f_name"]."</td><td>".$row["l_name"]."</td><td>".$row["p_number"]."</td><td>".$row["E_mail"]."</td><td>".$row["Address"]."</tr></td>";
         // header("location: my res dashbrd.html");
          // exit();
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