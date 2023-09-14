<?php
$kodetarif = $_GET['kodetarif'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_tarif WHERE kodetarif='$kodetarif'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
          <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Edit Tarif</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='../update/update_tarif.php'>
                  <div class="row">
                    
                    <div class="col-sm-6">
                     <div class="form-group">
                        <label>Kode Tarif</label>
                        <input type="text" class="form-control" placeholder="Kode Tarif" name='kodetarif' value="<?php echo $view['kodetarif'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <div class="form-group">
                        <label>Batas Pemakaian 1</label>
                        <input type="text" class="form-control" placeholder="Batas Pemakaian 1" name='bataspakai1' value="<?php echo $view['bataspakai1'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Batas Pemakaian 2</label>
                        <input type="text" class="form-control" placeholder="Batas Pemakaian 2" name='bataspakai2' value="<?php echo $view['bataspakai2'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <div class="form-group">
                        <label>Tarif</label>
                        <input type="text" class="form-control" placeholder="Tarif" name='tarif' value="<?php echo $view['tarif'];?>">
                      </div>
                    </div>
                    
                                                                      
              <!-- /.card-body -->
            </div>
            <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            <button type="cancel" class="btn btn-sm btn-danger">kembali</button>
          </form>  
          </div>
</section>