<!-- This is the homepage -->
<?php include 'header.php'?>

<body>


</body>
<?php include 'footer.php'?>
<?php

    require_once('room.class.php');
    $room = new roomClass();


    if ($_GET) {
        print_r($_GET);
        $id = $_GET['id'];

        if ($id) {
            $room->show($id);
        }
    } else {
         $room->index();
    }




?>
