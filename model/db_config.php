<?php
// EDITME: change this to fit your database
// the three arguments are: computer, user, password
$db = mysql_connect("localhost", "root", "abc123") or die(mysql_error());
// this is the database name to use
$conn=mysql_select_db("goactivation",$db) or die(mysql_error());
?>
