<?php include 'header.php'?>
<link rel="stylesheet" href="calendar.php">

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
