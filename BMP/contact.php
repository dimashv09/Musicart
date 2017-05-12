<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/contact.css">
    <script src="js/js.js"></script>
  </head>
  <body>
    <div class="navbar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="playlist.php">Playlist</a></li>
        <li><a href="#news">Video</a></li>
        <li><a href="#news">Gigs</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="about.php">About Me</a></li>
        <li><a href="#news">Contact</a></li>
      </ul>
    </div>
    <div class="content">
			<br>
			<font class="nama" face="Garamond" size="10">Contact Person</font>
			<br>

			<div class="desc">
				<?php
				class Profil{
					public $bmp = "<font color='white'> nyoba isi php </font>";
				}
					$obj = new Profil;
					echo "<br />";
					echo $obj->bmp;
					?>
			</div>
    </div>


		<div class="footer">

		</div>
    <div class="main">

    </div>
  </body>
</html>
