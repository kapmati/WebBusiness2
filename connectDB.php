<?php
/**
 * User: Kapmat
 * Date: 2016-03-31
 * Time: 23:32
 */
$servername = "mysql.agh.edu.pl:3306";
$username = "kapmat";
$password = "kapmatphp";


$connection = new mysqli($servername, $username, $password);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully\n";

$sql = "SELECT * FROM Test";

if ($connection->query($sql) === TRUE) {
    echo "Success";
} else {
    echo " Error" . $connection->error;
}


//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP
//)";
//
//if ($connection->query($sql) === TRUE) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . $connection->error;
//}
?>

