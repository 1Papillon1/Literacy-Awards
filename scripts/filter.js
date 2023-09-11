/* Filter.js */

function openCloseMenu() {

    if (document.getElementById("menu").style.display === "block") {
        document.getElementById("menu").style.display = "none";
        document.getElementById("table").style.pointerEvents = "auto";
        document.getElementById("table").style.filter = "grayscale(0%)";
    }

    else {
    document.getElementById("menu").style.display = "block";
    document.getElementById("menu").style.zIndex = "2";
    document.getElementById("table").style.pointerEvents = "none";
    document.getElementById("table").style.filter = "grayscale(60%)";
    }

}