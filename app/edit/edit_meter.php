<?php
$kodeplgn = $_GET['kodeplgn'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_pencatatmeter WHERE kodeplgn='$kodeplgn'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
          <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Edit Data meteran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_meter.php'>
                  <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kode Pelanggan</label>
                        <input type="text" class="form-control" placeholder="Kode Pelanggan" name='kodeplgn' value="<?php echo $view['kodeplgn'];?>">
                      </div>
                    </div>                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Bulan Pemakaian</label>
                        <input type="date" class="form-control" placeholder="Bulan Pemakaian" name='bulanpemakaian' value="<?php echo $view['bulanpemakaian '];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Stand Akhir</label>
                        <input type="decimal" class="form-control" placeholder="Stand Akhir" name='standakhir' value="<?php echo $view['standakhir'];?>">                       
                      </div>
                    </div>                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Input</label>
                        <input type="date" class="form-control" placeholder="Tanggal Input" name='tglentry'value="<?php echo $view['tglentry'];?>">
                      </div>
                    </div>                                                                    
            </div>
            <!-- /.card-body -->
            <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            <button type="cancel" class="btn btn-sm btn-danger">kembali</button>
          </form>  
          </div>
</section>