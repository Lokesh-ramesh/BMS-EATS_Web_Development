const sideBar = document.getElementById("sideBar");
const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");

function openSide() {
    sideBar.style.display = "block";
}

function closeSide() {
    sideBar.style.display = "none";
}
// $(document).ready(function() {

//     var quantitiy = 0;
//     $('.quantity-right-plus').click(function(e) {

//         // Stop acting like a button
//         e.preventDefault();
//         // Get the field name
//         var quantity = parseInt($('#quantity').val());

//         // If is not undefined

//         $('#quantity').val(quantity + 1);


//         // Increment

//     });

//     $('.quantity-left-minus').click(function(e) {
//         // Stop acting like a button
//         e.preventDefault();
//         // Get the field name
//         var quantity = parseInt($('#quantity').val());

//         // If is not undefined

//         // Increment
//         if (quantity > 0) {
//             $('#quantity').val(quantity - 1);
//         }
//     });

// });
// function inc() {
//     console.log("hi");
//     var el = document.getElementById('quantity');
//     console.log(el);
//     var $tr = el.closest('.quant');
//     //update the quantity;
//     var n = $tr.value;
//     var i = parseInt(n) - 1;
//     $tr.value = i;

// }

// function inc(click) {
//     console.log(click);
//     console.log("hi");
//     var el = document.getElementById('quantity');
//     var $tr = el.closest('#quantity');
//     //update the quantity;
//     var n = $tr.value;
//     var i = parseInt(n) - 1;
//     $tr.value = i;
// }
var ib = document.getElementsByClassName("inc");
var db = document.getElementsByClassName("dec");
// console.log(ib);
// console.log(db);
for (var i = 0; i < ib.length; i++) {
    var button = ib[i];
    button.addEventListener('click', function(event) {
        var buttonClicked = event.target;
        // console.log(buttonClicked);
        var input = buttonClicked.parentElement.children[1];
        // console.log(input);
        var inputValue = input.value;
        // console.log(inputValue);
        var newVal = parseInt(inputValue) + 1;
        // console.log(newVal);
        input.value = newVal;
    })
}

for (var i = 0; i < db.length; i++) {
    var button = db[i];
    button.addEventListener('click', function(event) {
        var buttonClicked = event.target;
        // console.log(buttonClicked);
        var input = buttonClicked.parentElement.children[1];
        // console.log(input);
        var inputValue = input.value;
        // console.log(inputValue);
        var newVal = parseInt(inputValue) - 1;
        // console.log(newVal);
        input.value = newVal;
    })
}