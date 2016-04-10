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

    $browser=$_SERVER['HTTP_USER_AGENT'];
    $system=$_SERVER['HTTP_USER_AGENT'];

    if(ereg("Opera", $browser)) $browser = " Opera";
    if(ereg("Netscape/6", $browser)) $browser = " Netscape 6";
    if(ereg("(Netscape) ([6])", $browser)) $browser = " Netscape 6";
    if(ereg("Netscape/7", $browser)) $browser = " Netscape 7";
    if(ereg("(Netscape) ([7])", $browser)) $browser = " Netscape 7";
    if(ereg("MSIE 4.0", $browser)) $browser = " Microsoft Internet Explorer 4.0";
    if(ereg("MSIE 5.0", $browser)) $browser = " Microsoft Internet Explorer 5.0";
    if(ereg("MSIE 6.0", $browser)) $browser = " Microsoft Internet Explorer 6.0";
    if(ereg("konqueror", $browser)) $browser = " konqueror";
    if(ereg("lynx", $browser)) $browser = " lynx";
    if(ereg("Firefox", $browser)) $browser = " Firefox";
    if(ereg("compatible", $browser)) $browser = " Nieznana";
    if(ereg("Chrome", $browser)) $browser = " Chrome";

    if(ereg("Lynx", $system)) $system = "Lynx";
    if(ereg("Windows 95", $system)) $system = " Windows 95";
    if(ereg("Windows 98", $system)) $system = " Windows 98";
    if(ereg("Windows ME", $system)) $system = " Windows ME";
    if(ereg("(Windows) ([NT]) ([4])", $system)) $system = " Windows NT";
    if(ereg("Windows NT 5.0", $system)) $system = " Windows 2000";
    if(ereg("Windows NT 5.1", $system)) $system = " Windows XP";
    if(ereg("Windows XP", $system)) $system = " Windows XP";
    if(ereg("Windows NT 10.0", $system)) $system = " Windows NT 10.0";
    if(ereg("X11", $system)) $system = " X11";
    if(ereg("Mac", $system)) $system = " Macintosh";
    if(ereg("os/2", $system)) $system = " OS/2";
    if(ereg("sunos", $system)) $system = " SunOs";
    if(ereg("Android 5.1", $system)) $system = "Android 5.1";
    if(ereg("compatible", $system)) $system = " Nieznany";

    $ip_address = $_SERVER['REMOTE_ADDR'];
    $pc = $_GET['pc'];
    $item_id = $_GET['itemId'];
    $resolution = $_GET['width'].'x'.$_GET['height'];

    date_default_timezone_set('Europe/Warsaw');
    $date = date('m/d/Y h:i:s a', time());

    //connection to the database
    $connect = mysqli_connect($servername, $username, $password, $database)
        or die("Unable to connect to MySQL");

    $query = "INSERT INTO $database.`USER_DATA`(`ID`, `IP_ADDRESS`, `SYSTEM`, `BROWSER`, `RESOLUTION`, `PC`, `ITEM_ID`, `DATE`)
          VALUES (NULL, '$ip_address', '$system', '$browser', '$resolution', '$pc', '$item_id', '$date')";


    echo "The current server time is: " . $date;

    //execute the SQL query and return records
    $result = mysqli_query($connect, $query)
     or die (mysqli_error($connect));

////fetch tha data from the database
//while ($row = mysqli_fetch_array($result)) {
//    echo "<br>";
//    echo "ID:".$row{'ID'}."  IP_ADDRESS:".$row{'IP_ADDRESS'}."  SYSTEM:".$row{'SYSTEM'}."  BROWSER:".$row{'BROWSER'}.
//        "  RESOLUTION:".$row{'RESOLUTION'}."  DESKTOP:".$row{'DESKTOP'}."  ITEM_ID:".$row{'ITEM_ID'}."<br>";
//}

    //close the connection
    mysqli_close($connect);
?>

