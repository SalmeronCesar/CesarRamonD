<html>
    <head>
           <!--This creates an image on the tab-->
  <link rel="SHORTCUT ICON" href="https://c1.staticflickr.com/3/2653/5827241978_fd048cb82e_z.jpg"/>
        <meta charset="UTF-8">
        <!--These are links to the bootstrap and css-->
        <link type="text/css" rel="stylesheet" href="custom-style.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <title>Sell Em</title>
    </head>
    <body>
        <div class="container">
            <!-- start navmenu -->
        <div id="nav">
            <!--The links to login.php, index.php, and to logout-user.php-->
                <a class="active"  href="index.php">Home</a><a href="login.php">Login</a><a href="register.php">Register</a><a href="controller/logout-user.php">Logout</a>
                <!-- end navmenu -->
        <div class="jumbotron">
            <h1>Sell Em</h1>
            <p>Sell, Buy and Trade.</p>
        </div>
            </div>
             <div id="category1">

        <ul id="posts">
            <li>Motors</li>
            <li>Fashion</li>
            <li>Sporting goods</li>
        </ul><!-- #posts -->

    </div><!-- #category1 -->

    <div id="category2">

        <div id="sub-category1">

            <ul id="posts">
                <li>Home & Garden</li>
                <li>Electronics</li>
                <li>Jewelry</li>
            </ul><!-- #posts -->

        </div><!-- #sub-category1 -->

<!--        <div id="sub-category2">

            <ul id="posts">
                <li>post7</li>
                <li>post8</li>
                <li>post9</li>
            </ul> #posts -->
    </body>
    </html>
<style>
                   body{ background:none; margin: 0px; }
            div#nav{padding: 24px;}
            div#nav > a{
                font-family: Ariel, Helvetica, sans-serif;
                font-size: 25px;
                background: whitesmoke;
                padding: 12px 24px;
                color: black;
                text-decoration: none;
                margin-left: 10px;
                border-radius: 3px;
            }
            div#nav > a:hover{
                background: black;
                color: whitesmoke;
            }
        </style>
<?php
//The time 
date_default_timezone_set("America/Los_Angeles");
echo "The time is " . date("h:i:sa");
?>
<?php
//These link are linked into the index,login-verify, navigation,create-db-read-posts, and the footer.
require_once(__DIR__ . "/controller/login-verify.php");
if(authenticateUser()) {
require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/controller/read-posts.php");
require_once(__DIR__ . "/view/footer.php");
?>
<!--This is the cursor-->
<style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-2/cur116.cur), progress !important;} target="_blank" title="Cool Blue Outer Glow Pointer"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Cool Blue Outer Glow Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>