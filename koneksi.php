<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "gitjngablak";

$conn = mysqli_connect($servername,$username,$password,$db);
$conn2 = new mysqli($servername,$username,$password,$db);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
?>