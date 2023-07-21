const sideBar = document.getElementById("sideBar");
const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");

function push(param,one,two) {
    for (let i = 0; i < document.getElementsByClassName("food-name").length; i++) {
        if (param == document.getElementsByClassName("food-name")[i].innerHTML) {
            let food_name = param;
            let food_pic = document.getElementsByClassName("food-img")[i].getAttribute("src");
            let or_price = one;
            let dis_price = two;
            localStorage.setItem("name", food_name);
            localStorage.setItem("pic", food_pic);
            localStorage.setItem("or-price", or_price);
            localStorage.setItem("dis-price", dis_price);
            break;
        }
    }
}

function openSide() {
    sideBar.style.display = "block";
}

function closeSide() {
    sideBar.style.display = "none";
}