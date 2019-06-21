<?php include 'header.php'?>

<body>
  <div id='placement'>
    <script>
      if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: welcome.php");
        exit;

    </script>
  </div>
</body>
<?php include 'footer.php'?>
