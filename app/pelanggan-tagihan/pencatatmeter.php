  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <!-- /.card -->
           <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Meteran Pelanggan</h3>
            </div>
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Kode pelanggan</th>
                    <th>Nama</th>
                    <th>Angka Meter</th>
                    <th>Foto Stand</th>
                    <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                      $no = 0;
                      
                      if(isset($_GET['blnpemakaian'])){
                        $tgl = $_GET['blnpemakaian'];
                        $query = mysqli_query($koneksi,"SELECT tb_dataplgn.kodeplgn,
                        tb_dataplgn.nama,
                        tb_pencatatmeter.standakhir,
                        FROM tb_dataplgn LEFT JOIN tb_pencatatmeter on tb_dataplgn.kodeplgn=tb_pencatatmeter.kodeplgn
                        where bulanpemakaian='$tgl'");
                      }else{
                        $query = mysqli_query($koneksi,"SELECT tb_dataplgn.kodeplgn,
                                                      tb_dataplgn.nama,
                                                      tb_pencatatmeter.standakhir,
                                                      tb_pencatatmeter.fotostand
                      FROM tb_dataplgn LEFT JOIN tb_pencatatmeter on tb_dataplgn.kodeplgn=tb_pencatatmeter.kodeplgn "); 
                      } 
                      while($plgn = mysqli_fetch_array($query)){
                      $no++
                      ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $plgn['kodeplgn'];?></td>
                    <td><?php echo $plgn['nama'];?></td>
                    <td><?php echo $plgn['standakhir'];?></td>
                    <td><?php echo $plgn['fotostand'];?></td>
                    <td>
                   	<button style="background-color: aqua;"><a href="index.php?page=edit-meter&&  kodeplgn=<?php echo $plgn['kodeplgn'];?>" style="color : black" class="fa fa-edit" title="edit meter">edit</a></button>
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
