<?php
/**
 * User: Kapmat
 * Date: 2016-03-30
 * Time: 21:30
 */

//###################### BROWSER, IP AND SYSTEM ######################
// IP
$ip=$_SERVER['REMOTE_ADDR'];

$browser=$_SERVER['HTTP_USER_AGENT'];

$system=$_SERVER['HTTP_USER_AGENT'];

//PRZEGLĄDARKA

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

//SYSTEM

if(ereg("Lynx", $system)) $system = "Lynx";
if(ereg("Windows 95", $system)) $system = " Windows 95";
if(ereg("Windows 98", $system)) $system = " Windows 98";
if(ereg("Windows ME", $system)) $system = " Windows ME";
if(ereg("(Windows) ([NT]) ([4])", $system)) $system = " Windows NT";
if(ereg("Windows NT 5.0", $system)) $system = " Windows 2000";
if(ereg("Windows NT 5.1", $system)) $system = " Windows XP";
if(ereg("Windows XP", $system)) $system = " Windows XP";
if(ereg("X11", $system)) $system = " X11";
if(ereg("Mac", $system)) $system = " Macintosh";
if(ereg("os/2", $system)) $system = " OS/2";
if(ereg("sunos", $system)) $system = " SunOs";
if(ereg("compatible", $system)) $system = " Nieznany";


print(" Przegladarka odwiedzajacego to: $browser.");
print(" System: $system");
print(" Adres IP: $ip");

?>