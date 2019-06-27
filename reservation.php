<?php include 'header.php'?>
<link rel="stylesheet" href="calendar.css">

<body>
  <div id='placement'>
    <div id="calendari">
      <?php
include 'calendar.php';

$calendar = new Calendar();

echo $calendar->show();
      ?></div>
  </div>
</body> <?php include 'footer.php'?>
