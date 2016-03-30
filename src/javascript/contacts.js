/**
 * Created by Kapmat on 2016-03-06.
 */

function createRowInTable() {
    var table = document.getElementById("contactTable");
    var row = table.insertRow(4);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell1.innerHTML = "new 1";
    cell2.innerHTML = "new 2";
    cell3.innerHTML = "new 3";
    cell4.innerHTML = "new 4";
}