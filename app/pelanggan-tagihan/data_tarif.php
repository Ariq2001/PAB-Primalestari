  <!-- Main content -->
  <br><br>
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
                <h3 class="card-title">Data Tarif</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"> Tambahkan</i></button>
                
                <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th width='5%'>No</th>
                      <th>Batas Pemakaian 1 </th>
                      <th>Batas Pemakaian 2 </th>
                      <th>Tarif per m3</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        $no = 0;
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_tarif ORDER BY kodetarif");
                        while($plgn = mysqli_fetch_array($query)){
                        $no++
                      ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $plgn['bataspakai1'];?></td>
                    <td><?php echo $plgn['bataspakai2'];?></td>
                    <td><?php echo $plgn['tarif'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $plgn['kodetarif'];?>)" style="color : black"class="fa fa-trash" title="Hapus Data"></a>  
                      <a href="index.php?page=edit-tarif&& kodetarif=<?php echo $plgn['kodetarif'];?>" style="color : blue aqua" class="fa fa-edit" title="Edit Data"> </a>                        
                    </td>
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
  <!--  -->
  <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data Tarif</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          
          <form method="get" action="add/tambah_tarif.php">
            <div class="modal-body">
                <div class="form-row">

                  <div class="col">
                    <input type="text" class="form-control" placeholder="Kode Tarif" name='kodetarif' required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Batas Pakai 1" name='bataspakai1' required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Batas Pakai 2" name='bataspakai2' required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Tarif" name='tarif' required>
                  </div>
                  
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
          </form>
        </div>  
      <!-- /.modal-content -->
      </div>
    </div>
   
    <script>
      function hapus_data(tarif_kode){        
        Swal.fire({
          title: 'Apakah anda yakin menghapus data ini?',
          //showDenyButton: true,
          showCancelButton: true,
          confirmButtonText: 'Hapus Data',
          confirmButtonColor: 'red',
          //denyButtonText: `Don't save`,
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            window.location=("delete/hapus_tarif.php?kodetarif="+tarif_kode);
          } 
        })
      }
    </script>

