  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <!-- /.card -->
          <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>
              </div>
              <!-- ./card-header -->
              
            <div class="card-body">
              <button type="button" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-user-plus" > Tambah Data</i></button>
             
              <div class="card-body">
                <table class="table table-bordered table-hover">
                <thead class= "thead-dark">
                <tr>
                  <th>No</th>
                  <th>Kode User</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <!-- body -->
              <tbody>
                <?php
                  $no = 0;
                  $query = mysqli_query($koneksi,"SELECT * FROM tb_user");
                  while($user = mysqli_fetch_array($query)){
                  $no++
                ?>
                <tr>
                  <td width='3'><?php echo $no;?></td>
                  <td width='5'><?php echo $user['kodeuser'];?></td>
                  <td><?php echo $user['nama'];?></td>
                  <td><?php echo $user['username'];?></td>
                  <td><?php echo $user['password'];?></td>
                  <td><?php echo $user['level'];?></td>
                  <td>
                    <button style="background-color: red;"><a onclick="hapus_user(<?php echo $user['kode_user'];?>)" style="color: black" class="fa  fa-trash" title="hapus data">hapus</a></button>&ensp;
                   	<button style="background-color: aqua;"><a href="index.php?page=edit-user&& kodeuser=<?php echo $user['kodeuser'];?>" style="color : black" class="fa fa-edit" title="edit data">edit</a></button>
                  </td>
                </tr>
                <?php }?>
              </tbody>
              <!-- <tfoot>
                <tr><td>Total</td></tr>
              </tfoot> -->
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
    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form method="get" action="add/tambah_user.php">
            <div class="modal-body">
                <div class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Kode User" name='kode_user' required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Nama" name='nama' required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Username" name='username' required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Password" name='password' required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="level" name='level' required>
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
      function hapus_user(data_kode){        
        Swal.fire({
          title: 'Want to delete this user?',
          //showDenyButton: true,
          showCancelButton: true,
          confirmButtonText: 'Delete',
          confirmButtonColor: 'red',
          //denyButtonText: `Don't save`,
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            window.location=("delete/hapus_user.php?kode_user="+data_kode);
          } 
        })
      }
    </script>
