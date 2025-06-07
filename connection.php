<?php
$con = new mysqli('localhost', 'root', '', 'wms');

if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}
?>
