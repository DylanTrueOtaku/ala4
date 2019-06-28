<?php include 'header.php'?>


<body>
  <div id='placement'>
    <?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$database = "hotelcal";

  $link = mysqli_connect($servername, $username, $password, $database);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM rooms";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>naam</th>";
                echo "<th>prijs</th>";
                echo "<th>omschrijving</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr><form>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['description'] . "<button type='submit'>Bestel</button><form></td>";

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
    ?>
  </div>
</body> <?php include 'footer.php'?>
