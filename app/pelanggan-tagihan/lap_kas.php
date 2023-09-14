  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <!-- /.card -->
           <div class="card">
            <div class="card-header">
              <h3 class="card-title">Laporan Kas</h3>
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
              <button type="button" data-toggle="modal" data-target="#modal-lg"><i class="fas fa fa-edit" > Tambah Data</i></button>
            <!-- <div class="table-responsive">
            <a href="index.php?page=tambah-kas" style="color : black" class="fa fa-edit" title="edit data"><button type="button" data-toggle="modal"> Tambah Data Kas</button></a> -->
              <br></br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Jenis Keterangan</th>
                    <th>Keterangan Transaksi</th>
                    <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi,"SELECT * FROM tb_kasawalbulan order by bulan");
                  while($kas = mysqli_fetch_array($query)){
                  $no++
                 ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $kas['bulan'];?></td>
                    <td><?php echo $kas['tipeketerangan'];?></td>
                    <td><?php echo $kas['kettransaksi'];?></td>
                    <td><?php echo $kas['jumlah'];?></td>
                    <td>
	  	            <button style="background-color: red;"><a onclick="hapus_data(<?php echo $kas['bulan'];?>)" style="color: black" class="fa  fa-trash" title="hapus data">hapus</a></button>&ensp;
                   	<button style="background-color: aqua;"><a href="index.php?page=edit-data&& kodeplgn=<?php echo $kas['bulan'];?>" style="color : black" class="fa fa-edit" title="edit data">edit</a></button>
	       </td>                            
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
  
    

    <script>
      function hapus_data(data_kode){        
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
            window.location=("delete/hapus_data.php?kodeplgn="+data_kode);
          } 
        })
      }
    </script>
