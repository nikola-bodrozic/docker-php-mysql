<?php

$dbhost = getenv('MYSQL_HOST');
$dbuser = getenv('MYSQL_USER');
$dbpass = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Create connection
$mysqli_connection = new MySQLi($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli_connection->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
    $result = $mysqli_connection->query("SHOW TABLES");
    var_dump($result->fetch_all());
}
?>
