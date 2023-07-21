const sideBar = document.getElementById("sideBar");
const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");

function openSide() {
    sideBar.style.display = "block";
}

function closeSide() {
    sideBar.style.display = "none";
}


function incrementValue() {
    var number = parseInt(document.getElementById('number').value);
    number = number + 1;
    if (number <= 100000000) {
        document.getElementById('number').value = number;
    }
}

function decrementValue() {
    var number = parseInt(document.getElementById('number').value);
    number = number - 1;
    if (number >= 1) {
        document.getElementById('number').value = number;
    }
}