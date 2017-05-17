<?php
$con=mysqli_connect('localhost','root','','db_bmp');

if(isset($_GET['del']))
$id=$_GET['del'];

if(isset($_GET['data']))
{
  switch($_GET['data'])
  {
      case 'list_agenda':
      mysqli_query($con,"delete from agenda where id='$id'");
      header("location:index.php?page=list_agenda");
      break;

      case 'list_berita':
      $data=mysqli_fetch_row(mysqli_query($con,"select gambar from berita where id='$id'"));
      unlink("../img/newspic/$data[0]");
      mysqli_query($con,"delete from berita where id='$id'");
      header("location:index.php?page=list_berita");
      break;

      case 'list_gallery':
      $data=mysqli_fetch_row(mysqli_query($con,"select gambar from gallery where id='$id'"));
      unlink("../img/gallery/$data[0]");
      mysqli_query($con,"delete from gallery where id='$id'");
      header("location:index.php?page=list_gallery");
      break;

      case 'list_aboutme':
      $data=mysqli_fetch_row(mysqli_query($con,"select gambar from profil where id='$id'"));
      unlink("../img/profil/$data[0]");
      mysqli_query($con,"delete from profil where id='$id'");
      header("location:index.php?page=list_aboutme");
      break;

      case 'list_contact':
      mysqli_query($con,"delete from contact where id='$id'");
      header("location:index.php?page=list_contact");
      break;

      case 'list_video':
      mysqli_query($con,"delete from video where id='$id'");
      header("location:index.php?page=list_video");
      break;

      case 'list_audio':
      mysqli_query($con,"delete from playlist where id='$id'");
      header("location:index.php?page=list_audio");
      break;
  }
}
?>
