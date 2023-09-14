      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">                                                            
              <div class="card">
                <!-- /.card -->
                <!-- /.card-header -->
                <div class="row">
                <div class="col-12">
                <div class="card">
                <div class="card-header">
                <h3 class="card-title">Laporan Piutang</h3>
              </div>
                  <!-- /.card-header -->

                  <div class="card-body">
                  <a href="../report/pdf_piutang.php" target="_blank"><button type="button" class="fas fa-print"> Cetak</button></a>
                  
                  <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead class="thead-dark"> 
                        <tr align="center">
                        <th width="5px">No</th>
                        <th width="5px">Nama Pelanggan</th>
                        <th width="5px">Alamat</th>
                        <th width="5px">Jml. Tagihan</th>
                        <th width="5px">Jml. Pembayaran</th>
                        <th width="5px">Jml. Piutang</th>

                        </tr>
                    </thead>

                    <tbody>
                      <?php
                      $no = 0;
                      $query = mysqli_query($koneksi,"SELECT * FROM tb_piutang");  
                      while($plgn = mysqli_fetch_array($query)){
                      $no++
                      ?>
                      <tr>
                        <td align=center><?php echo $no;?></td>
                        <td align=center><?php echo $plgn['namaplgn'];?></td>
                        <td align=center><?php echo $plgn['alamat'];?></td>
                        <td align=center><?php echo $plgn['jmltagihan'];?></td>
                        <td align=center><?php echo $plgn['jmlpembayaran'];?></a></td>
                        <td align=center><?php echo $plgn['jmlpiutang'];?></td>
                      </tr>
                      <?php }?>
                    </tbody> 
                  </table>
                  
                  </div>
                  <!-- /.card-body -->
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
     