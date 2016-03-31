<!DOCTYPE html>
<html>
<head>
    <title>Magiczny Kraków</title>
    <link href="src/css/desktopDesign.css" rel="stylesheet">
</head>

<body>
<center><h1 id="mainTitle" onclick="zamienTekst()">Magiczny Kraków</h1></center>

<center><img id="rynekPanorama" src="src/img/desktop/rynek_panorama.jpg" alt="rynek_panorama" height="300" width="1000" align="middle" ></center>

<center>
    <ol id="menu">
        <li><a href="index.html"><b>Strona g³ówna</b></a></li>
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
<center><img id="smokImg" onclick="changeDragon()" src="src/img/smok.jpg" alt="smok" height="500" width="400" align="middle" usemap="#smokDetails"></center>
<map name="smokDetails">
    <area shape="rect" coords="150,100,260,360" title="Smok wawelski">
    <area shape="rect" coords="170,40,210,110" title="Ogie?">
    <area shape="rect" coords="15,365,390,490" title="Kamie?">
</map>

<?php
//    require ('./php/userInf.php');
//?>


<?php
    include 'php/detectMobile.php';
?>

<?php
if (is_mobile() === true) {
    print ("Mobilki");
    require('./src/desktopView.php');
}
?>

</body>

<script>

	 function changePanorama() {
        	var image = document.getElementById('rynekPanorama');
        	image.src = "img/mobile/rynek_panorama2.jpg";
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