<?php 
$db = new mysqli('localhost', 'root', '', 'wms');

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}
?>