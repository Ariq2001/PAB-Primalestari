<?php
$kodeuser = $_GET['kodeuser'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE kodeuser='$kodeuser'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
          <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Edit profil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_user.php'>
                  <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kode User</label>
                        <input type="text" class="form-control" placeholder="Kode User" name='kodeuser' value="<?php echo $view['kodeuser'];?>">
                      </div>
                    </div>  
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                      </div>
                    </div>                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>RT</label>
                        <input type="text" class="form-control" placeholder="RT" name='rt' value="<?php echo $view['rt'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name='Username' value="<?php echo $view['username'];?>">
                        <input type="text" class="form-control" placeholder="Kode User" name='kodeuser' value="<?php echo $view['kodeuser'];?>" hidden >                        
                      </div>
                    </div>                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Password" name='password'value="<?php echo $view['password'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Level</label>
                        <input type="text" class="form-control" placeholder="Level" name='level' value="<?php echo $view['level'];?>">
                      </div>
                    </div>                                                                                   
            </div>
            <!-- /.card-body -->
            <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            <button type="cancel" class="btn btn-sm btn-danger">kembali</button>
          </form>  
          </div>
</section>