<?php
// This creates a connection to the database and to MySQL,
// Set the access details as constants:
DEFINE ('DB_HOST', '192.168.56.101'); 
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'root');
DEFINE ('DB_NAME', 'brms');

//Create connection ot database
$dbcon = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

//set encoding
mysqli_set_charset($dbcon, 'utf8');
?>
