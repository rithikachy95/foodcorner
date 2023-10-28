<?php

$SETTINGS["mysql_database"] = 'restaurant';



$connection = mysql_connect("localhost","root","") or die ('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');
$db = mysql_select_db($SETTINGS["mysql_database"], $connection) or die ('request "Unable to select database."');
?>