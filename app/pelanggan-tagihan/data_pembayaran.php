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
                <br></br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Kode Pelanggan</th>
                    <th>Nama</th>
                    <th>Angka Meter</th>
                    <th>Penggunaan Air</th>
                    <th>Retribusi</th>
                    <th>Pembayaran</th>
                    <th>Keterangan</th>
                    <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi,"SELECT * FROM tb_datatagihan");
                  while($plgn = mysqli_fetch_array($query)){
                  $no++
                 ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $plgn['kodeplgn'];?></td>
                    <td><?php echo $plgn['nama'];?></td>
                    <td><?php echo $plgn['standakhir'];?></td>
                    <td><?php echo $plgn['pemakaian'];?></td>
                    <td><?php echo $plgn['retribusi'];?></td>
                    <td><?php echo $plgn['pembayaran'];?></td>
                    <td><?php echo $plgn['keterangan'];?></td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Input Pembayaran</button></td>                            
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
    <script>
      function hapus_data(data_id){
        //alert ('ok');
        //window.location=("delete/hapus_data.php?no=");
        Swal.fire({
          title: 'Apakah anda yakin menghapus data ini?',
          //showDenyButton: true,
          showCancelButton: true,
          confirmButtonText: 'Hapus',
          confirmButtonColor: 'red',
          //denyButtonText: `Don't save`,
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            window.location=("delete/hapus_data.php?no="+data_id)
          } 
        })
      }
    </script>
