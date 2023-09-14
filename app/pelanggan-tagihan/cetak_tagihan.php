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
          <h3 class="card-title">Data Tagihan Pelanggan</h3>
        </div>
            <!-- /.card-header -->          
            
            <div class="card-body">
            <a href="../report/pdf_rkptagihan.php" target="_blank"><button type="button" class="fas fa-print"> Cetak</button></a> 
            <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead class="thead-dark"> 
                  <tr align="center">
                  <th width="5px">No</th>
                  <th width="5px">Kode</th>
                  <th width="10px">Nama</th>
                  <th width="5px">Stand Awal</th>
                  <th width="5px">Stand Akhir</th>
                  <th width="5px">Pemakaian</th>
                  <th width="5px">Bulan Pemakaian</th>
                  <th width="5px">Bulan Tagihan</th>
                  <th width="5px">Retribusi</th>
                  <th width="5px">Tunggakan</th>
                  <th width="5px">Total Tagihan</th>
                  <th width="5px">Kode Lunas</th>
                  <th width="5px">Tanggal Lunas</th>
                  </tr>
              </thead>

              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi,"SELECT tb_dataplgn.kodeplgn2,
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
                while($plgn = mysqli_fetch_array($query)){
                $no++
                ?>
                <tr>
                  <td align=center><?php echo $no;?></td>
                  <td align=center><?php echo $plgn['kodeplgn2'];?></td>
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
      