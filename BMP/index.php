<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>
    .content .article{
      color: white;
      padding: 0px 10px;
    }

    .content a{
      text-decoration: none;
      color: blue;
    }

    .sidebar{
      float: left;
      margin-top: 30px;
    	height: 100%;
    	width: 25%;
    }
    .sidebar h3{
      color: white;
      text-align: center;
    }
    .sidebar ul li{
      list-style: none;
      text-decoration: none;
      padding-top: 10px;
    }
    .sidebar ul li a{
      list-style: none;
      text-decoration: none;
      margin-left: -40px;

      color: white;
    }
  </style>
  <body>
    <div class="navbar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="playlist.php">Playlist</a></li>
        <li><a href="#news">Video</a></li>
        <li><a href="#news">Gigs</a></li>
        <li><a href="#news">Gallery</a></li>
        <li><a href="#news">About Me</a></li>
        <li><a href="#news">Contact</a></li>
        <li style="float: right"><a href="#admin"><img src="img/icon.png" width="15px" height="15px"></a></li>
      </ul>
    </div>
    <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="img/tab1.jpg" width="1350px" height="560px">
      <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="img/tab2.jpg" width="1350px" height="560px">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img/tab3.jpg" width="1350px" height="560px">
      <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div class="content">
      <div class="article">
        <?php
        $tampil=array(0);
        $con=mysql_connect("localhost","root","");
        mysql_select_db("db_bmp",$con);
        $muncul=mysql_query("select * from berita");
        while($data=mysql_fetch_array($muncul)) {
          if(in_array($data['id'],$tampil)) echo "<h3>$data[judul]<h3><br>$data[tanggal] <br><br> $data[konten]";
          else {
            continue;
          }
        }
        ?>
			</div>
			<div class="article">
        <?php
        echo "<h3>Judul Artikel 2</h3>";
        echo substr ("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>", 0, 251);
        echo " . . . <br/>[<a href=playlist.php>Read More</a>]";
        ?>
      </div>
			<div class="article">
        <?php
        echo "<h3>Judul Artikel 3</h3>";
        echo substr ("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>", 0, 251);
        echo " . . . <br/>[<a href=playlist.php>Read More</a>]";
        ?>
			</div>
    </div>

    <div class="sidebar">
      <h3>Video</h3>
      <ul>
        <li><a href="#">Video 1</a></li>
        <li><a href="#">Video 2</a></li>
        <li><a href="#">Video 3</a></li>
        <li><a href="#">Video 4</a></li>
      </ul>
      <h3>Audio</h3>
      <ul>
        <li><a href="#">Audio 1</a></li>
        <li><a href="#">Audio 2</a></li>
        <li><a href="#">Audio 3</a></li>
        <li><a href="#">Audio 4</a></li>
      </ul>
    </div>

		<div class="footer">

		</div>
    <div class="main">

    </div>
    <script src="js/js.js"></script>
  </body>
</html>
