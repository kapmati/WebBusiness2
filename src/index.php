<!DOCTYPE html>
<html>
<head>
    <title>Magiczny Krak?w</title>
    <link href="css/bajery.css" rel="stylesheet">
</head>


<center><h1 id="mainTitle" onclick="zamienTekst()">Magiczny Krak?w</h1></center>

<center><img id="rynekPanorama" src="img/rynek_panorama.jpg" alt="rynek_panorama" height="300" width="1000" align="middle" ></center>

<center>
    <ol id="menu">
        <li><a href="index.html"><b>Strona g??wna</b></a></li>
        <li><a href="#2"><b>Zabytki</b></a>
            <ul>
                <li><a href="#21">Smok wawelski</a></li>
                <li><a href="#22">Wawel</a>
                    <ol>
                        <li><a href="#221">Historia</a></li>
                        <li><a href="#222">Mapa budynk?w</a></li>
                        <li><a href="#223">Cennik</a></li>
                    </ol>
                </li>
                <li><a href="#23">Rynek g??wny</a></li>
                <li><a href="#24">Kazimierz</a></li>
                <li><a href="#25">Ko?ci? Mariacki</a></li>
            </ul>
        </li>
        <li><a href="turystyka.html"><b>Turystyka</b></a>
            <ul>
                <li><a href="#31">Noclegi</a></li>
                <li><a href="#32">Restauracje</a> </li>
                <li><a href="#33">Punkty informacyjne</a></li>
            </ul>
        </li>
        <li><a href="#4"><b>Galeria</b></a></li>
        <li><a href="kontakt.html"><b>Kontakt</b></a></li>
    </ol>
</center>
<p style="" id="smokText">
    <b>Smok wawelski </b>
    <a href="https://pl.wikipedia.org/wiki/Smok_wawelski">(wiki)</a>
    - legendarny smok,
</p>
<center><img id="smokImg" onclick="changeDragon()" src="img/smok.jpg" alt="smok" height="500" width="400" align="middle" usemap="#smokDetails"></center>
<map name="smokDetails">
    <area shape="rect" coords="150,100,260,360" title="Smok wawelski">
    <area shape="rect" coords="170,40,210,110" title="Ogie?">
    <area shape="rect" coords="15,365,390,490" title="Kamie?">
</map>

<?php
// IP
$ip=$_SERVER['REMOTE_ADDR'];

$browser=$_SERVER['HTTP_USER_AGENT'];

$system=$_SERVER['HTTP_USER_AGENT'];

//PRZEGL?DARKA

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


//print(" Przegladarka odwiedzajacego to: $browser.");
//print(" System: $system");
//print(" Adres IP: $ip");

?>

    <?php

    /* get disk space free (in bytes) */
    $df = disk_free_space("D:");
    /* and get disk space total (in bytes)  */
    $dt = disk_total_space("/var/www");
    /* now we calculate the disk space used (in bytes) */
    $du = $dt - $df;
    /* percentage of disk used - this will be used to also set the width % of the progress bar */
    $dp = sprintf('%.2f',($du / $dt) * 100);

    /* and we formate the size from bytes to MB, GB, etc. */
    $df = formatSize($df);
    $du = formatSize($du);
    $dt = formatSize($dt);

    function formatSize( $bytes )
    {
            $types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
            for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
                    return( round( $bytes, 2 ) . " " . $types[$i] );
    }

	echo "Free disc space: $df "; 


    ?>



</body>

<script>


	<?php

		$useragent=$_SERVER['HTTP_USER_AGENT'];

		if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		echo "changePanorama()";

	?>

	 function changePanorama() {
        	var image = document.getElementById('rynekPanorama');
        	image.src = "img/rynek_panorama2.jpg";
    	 }
		

    function zamienTekst() {
        document.getElementById("mainTitle").style.marginLeft="200px";
    }

    function changeDragon() {
        var image = document.getElementById('smokImg');
        if (image.src.match("smok2")) {
            image.src = "img/smok.jpg";
        } else {
            image.src = "img/smok2.jpg";
        }
    }

</script>

</html>