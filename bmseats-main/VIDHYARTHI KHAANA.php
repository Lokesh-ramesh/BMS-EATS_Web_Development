<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDHYARTHI KHANA</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="vk1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="sideBar w3-display-topright" id="sideBar">
        <ul>
            <li><button id="closeBtn" onclick="closeSide()">X Close</button></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact1.html">CONTACT</a></li>
            <li><a href="./cart_page.html">CART</a></li>

        </ul>
    </div>
    <div class="topcont">
        <div class="w3-container w3-white" id="Bar" width="100%">

            <img src="./photos/download (1).jpg" class="avo-icon" width="70" style="float: left;">
            <a href="./index.html">
                <h1 class="avo-title" style="float: left; color:black;">BMS EATS -
                    <H1 class="hotel_name">VIDHYARTHI KHAANA</H1>
                </h1>
            </a>
            <ul class="topnav">

                <a href="cart_page.html"><i style="float: right;color:black;padding: 14px;"
                        class="material-icons">shopping_cart</i></a>
                <li style="float: right;"><a href="./about.html">ABOUT</a></li>
                <li style="float: right;"><a href="contact1.html">CONTACT</a></li>

            </ul>
            <button class="menuIcon" id="menuBtn" onclick="openSide()"><i style="padding: 14px;"
                    class="material-icons">menu</i></button>
        </div>
    </div>

    <div class="product-list1">
        <a href="product-page.html" class="food" onclick="push('TEA/COFFEE','₹10','₹07')">
            <div class="products">
                <img src="./photos/TEA COFFEE.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">TEA/COFFEE</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹10</h3>
                        <h3 class="dp">₹07</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('IDLI','₹25','₹20')">
            <div class="products">
                <img src="./photos/IDLI.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">IDLI</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹25</h3>
                        <h3 class="dp">₹20</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('KARABATH','₹22','₹20')">
            <div class="products">
                <img src="./photos/KARABATH.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">KARABATH</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹22</h3>
                        <h3 class="dp">₹20</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('KESARI BATH','₹25','₹20')">
            <div class="products">
                <img src="./photos/KESARI BATH.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">KESARI BATH</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹25</h3>
                        <h3 class="dp">₹20</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('POORI','₹35','₹30')">
            <div class="products">
                <img src="./photos/POORI.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">POORI</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹35</h3>
                        <h3 class="dp">₹30</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('MASALA DOSA','₹40','₹35')">
            <div class="products">
                <img src="./photos/MASALA DOSA.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">MASALA DOSA</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹40</h3>
                        <h3 class="dp">₹35</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('VEG NOODLES','₹50','₹45')">
            <div class="products">
                <img src="./photos/VEG NOODLES.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">VEG NOODLES</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹50</h3>
                        <h3 class="dp">₹45</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('PAROTA','₹25','₹20')">
            <div class="products">
                <img src="./photos/PAROTA.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">PAROTA</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹25</h3>
                        <h3 class="dp">₹20</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('EGG FRIED RICE','₹55','₹50')">
            <div class="products">
                <img src="./photos/EGG FRIED RICE.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">EGG FRIED RICE</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹55</h3>
                        <h3 class="dp">₹50</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('ROTI CURRY','₹55','₹50')">
            <div class="products">
                <img src="./photos/ROTI CURRY.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">ROTI CURRY</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹55</h3>
                        <h3 class="dp">₹50</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('PANEER CHILLY','₹60','₹55')">
            <div class="products">
                <img src="./photos/PANEER CHILLY.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">PANEER CHILLY</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹60</h3>
                        <h3 class="dp">₹55</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('FRUIT BOWL','₹30','₹25')">
            <div class="products">
                <img src="./photos/FRUIT BOWL.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">FRUIT BOWL</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹30</h3>
                        <h3 class="dp">₹25</h3>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <script src="vk1.js"></script>
</body>

</html>