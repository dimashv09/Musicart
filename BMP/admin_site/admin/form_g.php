<!-- Form Video -->
<?php
if(isset($_POST['save']))
{
    mysqli_query($con,"insert into video values('','$judul','$penyanyi','$video')");
    echo "
    <script>
    location.assign('index.php?page=video&ps=true2');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    $tgl=explode("-",$tanggal);
    mysqli_query($con,"update video set judul='$judul',penyanyi='$penyanyi',video='$video' where id='".$_GET['id']."'");
    echo "
    <script>
    location.assign('index.php?page=video&ps=true1');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
elseif(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";

if(isset($_GET['id']))
{
    $data=mysqli_fetch_row(mysqli_query($con,"select * from video where id='".$_GET['id']."'"));
}

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input video</h3>
            </div>
            <form class="form-horizontal" method="post">
               <input type="hidden" name="id" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Judul Lagu</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[1])?$data[1]:''; ?>" name="judul" class="form-control" id="dua" placeholder="Judul Lagu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua1" class="col-sm-2 control-label">Penyanyi</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[2])?$data[2]:''; ?>" name="penyanyi" class="form-control" id="dua1" placeholder="Penyanyi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Video</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[3])?$data[3]:''; ?>" name="video" class="form-control" id="tiga" placeholder="Link Video">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-info pull-left" value="Save" name="<?php echo isset($_GET['id'])?'update':'save'; ?>">
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!--/.col (right) -->
</div>   <!-- /.row -->
