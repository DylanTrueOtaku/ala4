<?php include 'header.php'?>

<body>
  <div id='placement'>
    <?php
include 'calendar.php';

$calendar = new Calendar();

echo $calendar->show();
?>
  </div>

</body>
<?php include 'footer.php'?>
