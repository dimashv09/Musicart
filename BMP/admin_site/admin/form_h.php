<!-- Form Contact -->

<?php
if(isset($_POST['save']))
{
    mysqli_query($con,"insert into contact values('','$nama','$telepon','$alamat','$email','$instagram','$facebook','$youtube','$soundcloud')");
    echo "
    <script>
    location.assign('index.php?page=contact&ps=true2');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    mysqli_query($con,"update contact set nama='$nama',telepon='$telepon',alamat='$alamat',email='$email',instagram='$instagram',facebook='$facebook',youtube='$youtube',soundcloud='$soundcloud' where id='".$_GET['id']."'");
    echo "
    <script>
    location.assign('index.php?page=contact&ps=true1');
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
    $data=mysqli_fetch_row(mysqli_query($con,"select * from contact where id='".$_GET['id']."'"));
}

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input contact</h3>
            </div>
            <form class="form-horizontal" method="post">
              <input type="hidden" name="id" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[1])?$data[1]:''; ?>" name="nama" class="form-control" id="dua" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[2])?$data[2]:''; ?>" name="telepon" class="form-control" id="dua" placeholder="Telepon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua1" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[3])?$data[3]:''; ?>" name="alamat" class="form-control" id="dua1" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua1" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[4])?$data[4]:''; ?>" name="email" class="form-control" id="dua1" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Instagram</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[5])?$data[5]:''; ?>" name="instagram" class="form-control" id="tiga" placeholder="Instagram">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Facebook</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[6])?$data[6]:''; ?>" name="facebook" class="form-control" id="tiga" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Youtube</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[7])?$data[7]:''; ?>" name="youtube" class="form-control" id="tiga" placeholder="Youtube">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Soundcloud</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[8])?$data[8]:''; ?>" name="soundcloud" class="form-control" id="tiga" placeholder="Soundcloud">
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
