<?php

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}


class roomClass
{
    // property declaration
    public $servername = "localhost";
    public $username = "root";
    public $password = "usbw";
    public $dbname = "hotelcal";
    private $conn;

    // method declaration
    /*
     * The constuctor opens the dbase.
     */
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
    }

    /*
     *  show list with rooms.
     */
    public function index() {
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Id</th><th>Code</th><th>Category</th><th>Floor</th><th>Roomnr</th><th>Description</th><th>price</th><th>image</th><th>action</th></tr>";

        $stmt = $this->conn->prepare("SELECT id, code, category, floor, roomnr, description, price, image FROM room");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
            if ($k == 'id') {
                $id = strip_tags($v);
            }
            if ($k == 'image'){
                echo '<td><a href="index.php?id='.$id.'&f=edit"><img src="image/edit.png" alt="Edit" width="25"></a> <a href="index.php?id='.$id.'&f=delete"><img src="image/trash.png" alt="Delete" width="25"></a></td>';
            }
        }
    }

    /*
     *  edit room with id number.
     */
    public function edit($id) {

    }

    /*
     *  create new room.
     */
    public function new() {

    }

    /*
     *  show room with id number.
     */
    public function show($id) {

    }

    /*
     *  delete room with id number.
     */
    public function delete($id) {

    }

    /*
     *  close up dbase and ending class
     */
    public function __destruct() {
        $this->conn = null;
        echo "</table>";
        $name = "Dylan";
        Echo "<h1>Goed gedaan $name, het is klaar</h1>";
    }

}



?>
