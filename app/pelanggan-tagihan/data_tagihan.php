  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <!-- /.card -->
           <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Tagihan Pelanggan</h3>
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
	<form method="get">
                <label>PILIH TANGGAL</label>
                <input type="text" name="blnpemakaian">
                <input type="submit" value="FILTER">
              </form>              
              <a href="../report/pdf_rkptagihan.php" target="_blank"><button type="button" class="fas fa-print"> Cetak</button></a> 
                </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Stand Awal</th>
                    <th>Stand Akhir</th>
                    <th>Pemakaian</th>
                    <th>Bulan Pemakaian</th>
                    <th>Bulan Tagihan</th>
                    <th>Retribusi</th>
                    <th>Tunggakan</th>
                    <th>Tagihan</th>
                    <th>Kode Lunas</th>
                    <th>Tgl Lunas</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
                      $no = 0;
                      
                      if(isset($_GET['blnpemakaian'])){
                        $tgl = $_GET['blnpemakaian'];
                        $query = mysqli_query($koneksi,"SELECT tb_dataplgn.kodeplgn,
                        tb_dataplgn.nama,
                        tb_datatagihan.standawal,
                        tb_datatagihan.standakhir,
                        tb_datatagihan.jmlpemakaian,
                        tb_datatagihan.bulanpemakaian,
                        tb_datatagihan.bulantagihan,
                        tb_datatagihan.retribusi,
                        tb_datatagihan.tunggakan,
                        tb_datatagihan.totaltagihan,
                        tb_datatagihan.kodelunas,
                        tb_datatagihan.tgllunas 
                        FROM tb_dataplgn LEFT JOIN tb_datatagihan on tb_dataplgn.kodeplgn=tb_datatagihan.kodeplgn
                        where bulanpemakaian='$tgl'");
                      }else{
                        $query = mysqli_query($koneksi,"SELECT tb_dataplgn.kodeplgn,
                                                      tb_dataplgn.nama,
                                                      tb_datatagihan.standawal,
                                                      tb_datatagihan.standakhir,
                                                      tb_datatagihan.jmlpemakaian,
                                                      tb_datatagihan.bulanpemakaian,
                                                      tb_datatagihan.bulantagihan,
                                                      tb_datatagihan.retribusi,
                                                      tb_datatagihan.tunggakan,
                                                      tb_datatagihan.totaltagihan,
                                                      tb_datatagihan.kodelunas,
                                                      tb_datatagihan.tgllunas 
                      FROM tb_dataplgn LEFT JOIN tb_datatagihan on tb_dataplgn.kodeplgn=tb_datatagihan.kodeplgn "); 
                      } 
                      while($plgn = mysqli_fetch_array($query)){
                      $no++
                      ?>
                      <tr>
                        <td align=center><?php echo $no;?></td>
                        <td align=center><?php echo $plgn['kodeplgn'];?></td>
                        <td align=center><?php echo $plgn['nama'];?></td>
                        <td align=center><?php echo $plgn['standawal'];?></td>
                        <td align=center><?php echo $plgn['standakhir'];?></a></td>
                        <td align=center><?php echo $plgn['jmlpemakaian'];?></td>
                        <td align=center><?php echo $plgn['bulanpemakaian'];?></td>
                        <td align=center><?php echo $plgn['bulantagihan'];?></td>
                        <td align=center><?php echo $plgn['retribusi'];?></td>
                        <td align=center><?php echo $plgn['tunggakan'];?></td>                            
                        <td align=center><?php echo $plgn['totaltagihan']?></td>
                        <td align=center><?php echo $plgn['kodelunas'];?></td>
                        <td align=center><?php echo $plgn['tgllunas'];?></td>                            
                              
                      </tr>
                      <?php }?>
                </tbody>                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
    <!-- <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Input kan pembayaran</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form method="get" action="add/tambah_data.php">
          <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Kode Pelanggan" name='kode_pelanggan' required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nama" name='nama' required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="RT" name='rt' required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="RW" name='rw' required>
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Dawis" name='dawis' required>
                </div>
                </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>        
        </form>
      <!-- /.modal-content -->
      </div>
    </div> -->
    
