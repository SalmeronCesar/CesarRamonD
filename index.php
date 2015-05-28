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
               <title>Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="http://autocarsblitz.com/wp-content/uploads/2015/02/Front-Angle-2015-BMW-M5-Sedan-Wallpaper.jpg" data-slide-to="0" class="active"></li>
      <li data-target="http://images.menswearhouse.com/is/image/TMW/MW40_359F_67_MICHAEL_KORS_BLUE_PLAID_SET?wid=1200&hei=627" data-slide-to="1"></li>
      <li data-target="https://silverrockfunding.com/images/sporting_goods_store.jpg" data-slide-to="2"></li>
      <li data-target="http://upload.wikimedia.org/wikipedia/commons/a/a9/20090809_Lotus_flower_2736.jpg" data-slide-to="4"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <!-- Is the 1st and active item -->
        <img src="http://autocarsblitz.com/wp-content/uploads/2015/02/Front-Angle-2015-BMW-M5-Sedan-Wallpaper.jpg" alt="Chania" width="460" height="345">
      </div>
<!-- Is the 2nd item on the slide-->
      <div class="item">
        <img src="http://images.menswearhouse.com/is/image/TMW/MW40_359F_67_MICHAEL_KORS_BLUE_PLAID_SET?wid=1200&hei=627" alt="Chania" width="460" height="345">
      </div>
    <!-- Is the 3rd item on the slide -->
      <div class="item">
        <img src="https://silverrockfunding.com/images/sporting_goods_store.jpg" alt="Flower" width="460" height="345">
      </div>
<!-- Is the 4th item on the slide -->
      <div class="item">
        <img src="http://creativegemsinc.com/wp-content/uploads/2013/09/filepicker-psS2qFyWTwaWYZNgYz5G_Rolex.jpg" alt="Flower" width="460" height="345">
      </div>
        <!-- Is the last item on the slide -->
         <div class="item">
        <img src="http://upload.wikimedia.org/wikipedia/commons/a/a9/20090809_Lotus_flower_2736.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <!-- Makes you go left which is previous -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a><!-- Makes you go right which is the next slide -->
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
                <details>
  <summary>Item Description and Price</summary>
  <p>2015 BMW</p>
  <p>$30k and firm on price</p>
  <p>Michael Kors Suit</p>
  <p>Selling a Michael Kors suit for $600 OBO</p>
  <p>Sporting Goods</p>
  <p>Take all for $50</p>
  <p>Rolex Watch</p>
  <p>Ill take $400</p>
  <p>Flower</p>
  <p>$5</p>
</details>
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