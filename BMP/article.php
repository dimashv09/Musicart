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
      height: 100%;
      padding: 0px 10px;
    }
    .content a{
      text-decoration: none;
      color: blue;
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
    <div class="content">
      <div class="article">
        <?php
        echo "<h3>Judul Artikel 1</h3>";
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
        ?>
			</div>
    </div>

    <?php include komentarajax.php ?>

		<div class="footer">

		</div>
    <div class="main">

    </div>
    <script src="js/js.js"></script>
  </body>
</html>
