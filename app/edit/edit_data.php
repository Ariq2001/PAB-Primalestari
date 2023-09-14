<?php
$kodeplgnlama = $_GET['kodeplgn'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_dataplgn WHERE kodeplgn='$kodeplgnlama'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
          <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_data.php'>
                  <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kode Pelanggan</label>
                        <input type="text" class="form-control" placeholder="Kode Pelanggan" name='kodeplgn' value="<?php echo $view['kodeplgn'];?>">
                      </div>
                    </div>  
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kode Wilayah</label>
                        <input type="text" class="form-control" placeholder="Kode Wilayah" name='kodewilayah' value="<?php echo $view['kodewilayah'];?>">
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
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="Kode Pelanggan" name='kodeplgn' value="<?php echo $view['kodeplgn'];?>" hidden >                        
                      </div>
                    </div>                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>RW</label>
                        <input type="text" class="form-control" placeholder="RW" name='rw'value="<?php echo $view['rw'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Dawis</label>
                        <input type="text" class="form-control" placeholder="Dawis" name='dawis' value="<?php echo $view['dawis'];?>">
                      </div>
                    </div>                                                                                   
            </div>
            <!-- /.card-body -->
            <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            <button type="cancel" class="btn btn-sm btn-danger">kembali</button>
          </form>  
          </div>
</section>