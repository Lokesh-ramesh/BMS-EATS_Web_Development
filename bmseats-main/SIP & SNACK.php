<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP AND SNACK</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="sip.css">
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
                    <H1 class="hotel_name">SIP AND SNACK</H1>
                </h1>
            </a>
            <ul class="topnav">

                <a href="cart_page.html"><i style="float: right;color:black;padding: 14px;"
                        class="material-icons">shopping_cart</i></a>
                <li style="float: right;"><a href="about.html">ABOUT</a></li>
                <li style="float: right;"><a href="contact1.html">CONTACT</a></li>

            </ul>
            <button class="menuIcon" id="menuBtn" onclick="openSide()"><i style="padding: 14px;"
                    class="material-icons">menu</i></button>
        </div>
    </div>

    <div class="product-list1">
        <a href="product-page.html" class="food" onclick="push('TEA/COFFEE','₹15','₹10')">
            <div class="products">
                <img src="./photos/TEA COFFEE SIP AND SNACK.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">TEA/COFFEE</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹15</h3>
                        <h3 class="dp">₹10</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('BADAM MILK','₹12','₹10')">
            <div class="products">
                <img src="./photos/BADAM MILK.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">BADAM MILK</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹12</h3>
                        <h3 class="dp">₹10</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('SAMOSA','₹13','₹10')">
            <div class="products">
                <img src="./photos/SAMOSA.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">SAMOSA</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹13</h3>
                        <h3 class="dp">₹10</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('CLUB SANDWICH','₹50','₹45')">
            <div class="products">
                <img src="./photos/CLUB SANDWICH.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">CLUB SANDWICH</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹50</h3>
                        <h3 class="dp">₹45</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('PANEER ROLL','₹50','₹45')">
            <div class="products">
                <img src="./photos/PANEER ROLL.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">PANEER ROLL</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹50</h3>
                        <h3 class="dp">₹45</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('OREO MILKSHAKE','₹55','₹50')">
            <div class="products">
                <img src="./photos/OREO MILKSHAKEjpg.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">OREO MILKSHAKE</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹55</h3>
                        <h3 class="dp">₹50</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('BERRY MILKSHAKE','₹50','₹45')">
            <div class="products">
                <img src="./photos/STRAWBERRY MILKSHAKE.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">BERRY MILKSHAKE</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹50</h3>
                        <h3 class="dp">₹45</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('LEMON SODA','₹30','₹25')">
            <div class="products">
                <img src="./photos/LEMON SODA.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">LEMON SODA</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹30</h3>
                        <h3 class="dp">₹25</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('MAAGI','₹25','₹20')">
            <div class="products">
                <img src="./photos/MAAGIjpg.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">MAAGI</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹25</h3>
                        <h3 class="dp">₹20</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('FRUIT PUNCH','₹55','₹50')">
            <div class="products">
                <img src="./photos/FRUIT PUNCH.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">FRUIT PUNCH</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹55</h3>
                        <h3 class="dp">₹50</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('BREAD TOAST','₹30','₹25')">
            <div class="products">
                <img src="./photos/BREAD TOAST.jpg" class="food-img" />
                <div class="content">
                    <h2 class="food-name">BREAD TOAST</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹30</h3>
                        <h3 class="dp">₹25</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="product-page.html" class="food" onclick="push('FRUIT JUICE(ANY)','₹35','₹30')">
            <div class="products">
                <img src="./photos/FRUIT JUICE.jpg.crdownload" class="food-img" />
                <div class="content">
                    <h2 class="food-name">FRUIT JUICE(ANY)</h2>
                    <hr class="divider_hr" style="margin: auto; border-top: 1px solid black; width: 80%" />
                    <div class="prices">
                        <h3 class="op">₹35</h3>
                        <h3 class="dp">₹30</h3>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <script src="vk1.js"></script>
</body>

</html>