<?php
$con = mysql_connect("localhost", "root", "m@rio") or die(mysql_error()); // Connect to myql
$db = mysql_select_db("onekweb", $con) or die (mysql_error()); // connection to the database onekanda
?>
