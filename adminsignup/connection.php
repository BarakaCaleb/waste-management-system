<?php 
$con = mysqli_connect('localhost', 'root', '', 'wms'); // ← no password

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
