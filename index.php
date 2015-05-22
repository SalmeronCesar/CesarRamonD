<html>
    <head>
           <!--This creates an image on the tab-->
  <link rel="SHORTCUT ICON" href="https://c1.staticflickr.com/3/2653/5827241978_fd048cb82e_z.jpg"/>
        <meta charset="UTF-8">
        <!--These are links to the bootstrap and css-->
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="custom-style.css">
        <title>www.Sell Em.com</title>
    </head>
    <body>
        <ul class="nav-wrapper">
            <li class="m1"><a href="index.php">
    <span class="t">Home</span>
    </a></li>
    <li class="m2"><a href="login.php">
    <span class="t">Login</span>
    </a></li>
    <li class="m3"><a href="register.php">
    <span class="t">Register</span>
    </a></li>
  <li class="m4"><a href="logout-user.php">
    <span class="t">Logout</span>
    </a></li>
</ul>
         <iframe src="http://free.timeanddate.com/clock/i4omu1na/n137/fn15/fs20/ftb/tt0/tw0/tm1/tb4" frameborder="0" width="116" height="48"></iframe>
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

                </div>
            </div>
        </div>
        <div id="nav">
            <!--The links to login.php, index.php, and to logout-user.php-->
                <a href="motors.php">Motor</a><a href="fashion.php">Fashion</a><a href="sportinggoods.php">Sporting Goods</a><a href="Home&Garden.php">Home&Garden</a><a href="Electronics.php">Electronics</a><a href="Jewelry.php">Jewelry</a>
                <!-- end navmenu -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="http://www.hdwallpapers.in/walls/need_for_speed_prostreet-HD.jpg" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.hdwallpapers.in/walls/need_for_speed_prostreet-HD.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img_chania2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img_flower.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

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