/**
 * Created by Kapmat on 2016-03-06.
 */

function zamienTekst() {
    document.getElementById("mainTitle").style.marginLeft="200px";
}

function changeDragon() {
    var image = document.getElementById('smokImg');
    if (image.src.match("smok2")) {
        image.src = "../img/smok.jpg";
    } else {
        image.src = "../img/smok2.jpg";
    }
}
