  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <!-- /.card -->
          <div class="card">
              <div class="card-header">
              <h3 class="card-title">Rekap Tagihan Air</h3>
            </div>
           
            <!-- /.card-header -->
            <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Wilayah</th>
                    <th>Jumlah Tunggakan</th>
                    <th>Tagihan Bulan Ini</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Jumlah Kekurangan</th>                    
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no = 0;
                  $query = mysqli_query($koneksi,"SELECT * FROM tb_rekaptagihan order by kodewilayah");
                  while($plgn = mysqli_fetch_array($query)){
                  $no++
                ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $plgn['kodewilayah'];?></td>
                    <td><?php echo $plgn['jmltunggakan'];?></td>
                    <td><?php echo $plgn['tghbulanini'];?></td>
                    <td><?php echo $plgn['jmlpembayaran'];?></td>
                    <td><?php echo $plgn['jmlkurang'];?></td>
                  </tr>
                  <?php }?>
                </tbody>
                <tfoot>
                <!-- <tr>
                    <th>No</th>
                  </tr> -->
                </tfoot>
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
    