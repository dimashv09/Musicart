<!-- Form Komentar -->

<?php
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['save']))
{

    $getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from comment"));

    mysqli_query($con,"insert into comment values('','$guest_email','$guest_username','$comment')");

    echo "
    <script>
    location.assign('index.php?page=comment&ps=true1');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    mysqli_query($con,"update comment set judul='$judul',comment='$comment' where id='".$_GET['id']."'");

    echo "
    <script>
    location.assign('index.php?page=comment&ps=true2');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
elseif(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";

if(isset($_GET['id']))
$data=mysqli_fetch_row(mysqli_query($con,"select * from comment where id='".$_GET['id']."'"));

?>
    <style>
        #image-holder {
            margin-top: 8px;
        }

        #image-holder img {
            border: 8px solid #DDD;
            max-width:100%;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Input comment</h3>
                </div>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="<?php echo isset($_GET['id'])?$_GET['id']:''; ?>">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Email Guest</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Email" name="guest_email" id="tiga" value="<?php echo isset($data[3])?$data[3]:''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Username Guest</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Username" name="guest_username" id="tiga" value="<?php echo isset($data[3])?$data[3]:''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Isi Komentar</label>
                            <div class="col-sm-10">
                                <textarea class="form-control comment" placeholder="Isi Komentar" name="comment"><?php echo isset($data[4])?$data[4]:''; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="Save" name="<?php echo isset($_GET['id'])?'update':'save'; ?>">
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
