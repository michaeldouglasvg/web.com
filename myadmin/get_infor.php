<?php
require_once('myadmin/myadmin_connect.php');

$query = "SELECT name, email, contact, subject, message, FROM users";

$response = @mysqli_query($dbc, $query);

?>