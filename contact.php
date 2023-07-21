<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="sip.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        
        html {
            box-sizing: border-box;
        }
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        
        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }
        
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: lightslategray;
            color: black;
        }
        
        .container {
            padding: 0 16px;
        }
        
        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        .title {
            color: black;
        }
        
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
        
        .topnav {
            list-style-type: none;
            margin: 0;
            padding: 14px;
        }
        
        .topcont {
            box-shadow: 0 8px 16px 0 rgb(224, 220, 220);
        }
        
        .topnav li {
            padding: 16;
            float: right;
            font-size: x-large;
        }
        
        .topnav li a {
            display: block;
            color: grey;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        a {
            text-decoration: none;
        }
        
        .text-content {
            width: max-content;
            margin: auto;
            margin-top: 10%;
        }
        
        .bar {
            color: transparent;
            width: 100vw;
        }
        
        .bar h1 {
            color: white;
        }
        
        .avo-title {
            float: left;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        
        .avo-icon {
            width: 75px;
        }
        
        .mySlides {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }
        
        .menuIcon {
            border: none;
            background-color: transparent;
            display: none;
            color: black;
            margin: 14px;
            float: right;
        }
        
        .sideBar {
            display: none;
            z-index: 10;
            background-color: black;
            opacity: 0.9567;
            width: 50%;
            height: 100%;
        }
        
        .sideBar ul {
            margin: auto;
            width: max-content;
            list-style-type: none;
            padding: 14px;
        }
        
        .sideBar li {
            margin: auto;
            text-align: center;
            color: white;
            width: max-content;
            padding: 10px;
        }
        
        @media screen and (max-width: 833px) {
            .main-title {
                margin-right: 0px;
            }
            .menuIcon {
                display: block;
            }
            .menuIcon:hover {
                cursor: pointer;
            }
            .mySlides {
                width: 100%
            }
            .topnav {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
        }
        
        @media screen and (max-width: 445px) {
            .avo-title {
                font-size: 18px;
            }
            .avo-icon {
                width: 50px
            }
        }
    </style>
</head>

<body>
    <div class="sideBar w3-display-topright" id="sideBar">
        <ul>
            <li><button id="closeBtn" onclick="closeSide()">X Close</button></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact1.html">CONTACT</a></li>
            <li><a href="./cart_page.php">CART</a></li>

        </ul>
    </div>
    <div class="topcont">
        <div class="w3-container w3-white" id="Bar" width="100%">

            <img src="./photos/download (1).jpg" class="avo-icon" width="70" style="float: left;">
            <a href="./index.php">
                <h1 class="avo-title" style="float: left; color:black;">BMS EATS -
                    <H1 class="hotel_name">CONTACT</H1>
                </h1>
            </a>
            <ul class="topnav">

                <a href="cart_page.php"><i style="float: right;color:black;padding: 14px;"
                        class="material-icons">shopping_cart</i></a>
                <li style="float: right;"><a href="about.html">ABOUT</a></li>
                <li style="float: right;"><a href="contact1.html">CONTACT</a></li>

            </ul>
            <button class="menuIcon" id="menuBtn" onclick="openSide()"><i style="padding: 14px;"
                    class="material-icons">menu</i></button>
        </div>
    </div>


    <div class="about-section">
        <h1>CONTACT INFO</h1>
        <h3>DETAILS!</h3>
    </div>

    <h2 style="text-align:center">OUR TEAM</h2>
    <div class="row">
        <div class="column">
            <div class="card">

                <div class="container">
                    <h2>MD SURAJ KUMAR</h2>
                    <p>Contact no-6361970456</p>
                    <p>Email id-suraj.cs20@bmsce.ac.in</p>

                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">

                <div class="container">
                    <h2>LOKESH R</h2>
                    <p>Contact no-6362781364</p>
                    <p>Email id-lokesh.cs20@bmsce.ac.in</p>

                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">

                <div class="container">
                    <h2>M UDAYA RAJ</h2>
                    <p>Contact no-7892994422</p>
                    <p>Email id-udayaraj.cs20@bmsce.ac.in</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openSide() {
            sideBar.style.display = "block";
        }

        function closeSide() {
            sideBar.style.display = "none";
        }
    </script>
</body>

</html>