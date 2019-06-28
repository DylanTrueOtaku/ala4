<?php include 'header.php'?>


<body>
  <div id='placement'>
    <?php
$servername = "127.0.0.1";
$username = "root";
$password = "usbw";
$database = "hotelcal";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname FROM rooms";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
  </div>
</body> <?php include 'footer.php'?>
