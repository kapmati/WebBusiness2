<?php
/**
 * User: Kapmat
 * Date: 2016-03-31
 * Time: 23:32
 */
$servername = "mysql.agh.edu.pl:3306";
$username = "kapmat";
$password = "kapmatphp";
$database = "kapmat";

//connection to the database
$connect = mysqli_connect($servername, $username, $password, $database)
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

$query = "SELECT * FROM Test";
//execute the SQL query and return records
$result = mysqli_query($connect, $query)
    or die("Error query");

//fetch tha data from the database
while ($row = mysqli_fetch_array($result)) {
    echo "<br>";
    echo "ID:".$row{'ID'}." SYSTEM:".$row{'SYSTEM'}." BROWSER:".$row{'BROWSER'}.
        " RESOLUTION:".$row{'RESOLUTION'}." DESKTOP:".$row{'DESKTOP'}."<br>";
}
//close the connection
mysqli_close($connect);

?>

