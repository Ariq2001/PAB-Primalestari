<?php
$kodewilayah = $_GET['kodewilayah'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_rekappembayaran WHERE kodewilayah='$kodewilayah'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
          <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Edit Rekap Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_rkppembayaran.php'>
                  <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kode Wilayah</label>
                        <input type="text" class="form-control" placeholder="Kode Wilayah" name='kodewilayah' value="<?php echo $view['kodewilayah'];?>">
                      </div>
                    </div>                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tunggakan</label>
                        <input type="decimal" class="form-control" placeholder="Tunggakan" name='jmltunggakan' value="<?php echo $view['jmltunggakan'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tagihan Bulan Ini</label>
                        <input type="decimal" class="form-control" placeholder="Tagihan Bulan Ini" name='tghbulanini' value="<?php echo $view['tghbulanini'];?>">                    
                      </div>
                    </div>                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jumlah Pembayaran</label>
                        <input type="decimal" class="form-control" placeholder="Jumalah Pembayaran" name='jmlpembayaran'value="<?php echo $view['jmlpembayaran'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jumlah Kurang</label>
                        <input type="decimal" class="form-control" placeholder="Jumalah Kurang" name='jmlkurang' value="<?php echo $view['jmlkurang'];?>">
                      </div>
                    </div>  
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Total Tunggakan</label>
                        <input type="decimal" class="form-control" placeholder="Total Tunggakan" name='totaltunggakan' value="<?php echo $view['totaltunggakan'];?>">
                      </div>
                    </div>                                                                                   
            </div>
            <!-- /.card-body -->
            <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            <button type="cancel" class="btn btn-sm btn-danger">kembali</button>
          </form>  
          </div>
</section>