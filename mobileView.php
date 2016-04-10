<!DOCTYPE html>
<html>
<head>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Magiczny Kraków</title>
    <link href="src/css/mobileDesign.css" rel="stylesheet">
</head>

<body>
<center><h1 id="mainTitle" onclick="zamienTekst()">Magiczny Kraków - MOBILE</h1></center>

<div style="text-align: center;"><img id="rynekPanorama" src="src/img/mobile/rynek_panorama2.jpg" alt="rynek_panorama" height="300" width="1000" align="middle" ></div>

<center>
    <ol id="menu">
        <li><a href="index.php"><b>Strona g³ówna</b></a></li>
        <li><a href="#2"><b>Zabytki</b></a>
            <ul>
                <li><a href="#21">Smok wawelski</a></li>
                <li><a href="#22">Wawel</a>
                    <ol>
                        <li><a href="#221">Historia</a></li>
                        <li><a href="#222">Mapa budynków</a></li>
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
<center><img id="smokImg" onclick="changeDragon()" src="src/img/mobile/smok.jpg" alt="smok" height="500" width="400" align="middle" usemap="#smokDetails"></center>
<map name="smokDetails">
    <area shape="rect" coords="150,100,260,360" title="Smok wawelski">
    <area shape="rect" coords="170,40,210,110" title="Ogie?">
    <area shape="rect" coords="15,365,390,490" title="Kamie?">
</map>

<p style="text-align: justify;"><strong>Produkty</strong></p>
<hr>

<img src="src/img/mobile/histKrakowa.jpg" height="200" width="130"/>
<p>1.Historia Krakowa</p>
<a href="#" onClick="showDiv('firstProductExt'); return false;">Czytaj wiêcej/mniej</a>
<div id="firstProductExt" style="display:none">
    <br>
    Opis historii Krakowa
</div>
<hr>

<img src="src/img/mobile/mapaKrakoww.jpg" height="130" width="200"/>
<p>2.Mapa miasta</p>
<a href="#" onClick="showDiv('secondProductExt'); return false;">Czytaj wiêcej/mniej</a>
<div id="secondProductExt" style="display:none">
    <br>
    Opis mapy Krakowa
</div>
<hr>

<img src="src/img/mobile/przwodnikKrakow.jpg" height="200" width="130"/>
<p>3.Przewodnik turystyczny</p>
<a href="#" onClick="showDiv('thirdProductExt'); return false;">Czytaj wiêcej/mniej</a>
<div id="thirdProductExt" style="display:none">
    <br>
    Opis przewodnika turystycznego
</div>

</body>

<script>

    function myCall(num) {
        var request = $.ajax({
            url: "addInfoAboutUser.php",
            data: { itemId: num, pc: 0,width: screen.width, height: screen.height},
            type: "GET",
            dataType: "html"
        });

        request.fail(function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );
        });
    }

    function showDiv(obj) {
        var x = document.getElementById(obj);
        var num = 1;
        if(obj.toString() == "thirdProductExt") {
            num = 3;
        } else if(obj.toString() == "secondProductExt") {
            num = 2;
        } else if(obj.toString() == "firstProductExt") {
            num = 1;
        }
        if(x.style.display == "none") {
            x.style.display = "block";
            myCall(num);
        }
        else {
            x.style.display = "none"
        }
    }

    function zamienTekst() {
        document.getElementById("mainTitle").style.marginLeft="200px";
    }

    function changeDragon() {
        var image = document.getElementById('smokImg');
        if (image.src.match("smok2")) {
            image.src = "src/img/mobile/smok.jpg";
        } else {
            image.src = "src/img/mobile/smok2.jpg";
        }
    }
</script>

</html>