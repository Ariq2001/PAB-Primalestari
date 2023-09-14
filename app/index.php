<!DOCTYPE html>
<html lang="en">
<?php 
 session_start();
 if(!$_SESSION['nama']){
  header('location: ../index.php?session=expire/');
 }
 
include('head.php');?>
<?php include('../conf/koneksi.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- wrapper -->
  <div class="wrapper">
    <!-- Preloader -->
    <?php include('preloader.php');?>
    <!-- Navbar -->
    <?php include('navbar.php');?>  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include('brandlogo.php')?>
      <!-- Sidebar -->
      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->  
        <!-- Sidebar Menu -->
        <?php include('sidebar.php');?>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <?php include('contentheader.php')?>
            <!-- /.content-header -->
            <!-- Main content -->
            <?php 
              if (isset($_GET['page'])){
                if($_GET['page']=='dashboard'){
                  include('dashboard.php');
                }
                else if($_GET['page']=='data-pelanggan'){
                  include('pelanggan-tagihan/data_pelanggan.php');
                }
                else if($_GET['page']=='contact'){
                  include('contact.php');
                }  
                else if($_GET['page']=='add-user'){
                  include('add/add_user.php');
                }
                else if($_GET['page']=='profile'){
                  include('pelanggan-tagihan/profile.php');
                }
                else if($_GET['page']=='data-user'){
                  include('admin/data_user.php');
                }
                else if($_GET['page']=='edit-user'){
                  include('edit/edit_user.php');
                }
                else if($_GET['page']=='edit-dashboard'){
                  include('edit/edit_dashboard.php');
                }                       
                else if($_GET['page']=='edit-data'){
                  include('edit/edit_data.php');
                }                       
                else if($_GET['page']=='edit-meter'){
                  include('edit/edit_meter.php');
                }
                else if($_GET['page']=='data-tarif'){
                  include('pelanggan-tagihan/data_tarif.php');
                }
                else if($_GET['page']=='edit-tarif'){
                  include('edit/edit_tarif.php');
                }
                else if($_GET['page']=='pencatat-meter'){
                  include('pelanggan-tagihan/pencatatmeter.php');
                }
                else if($_GET['page']=='rekap-tagihan'){
                  include('pelanggan-tagihan/rekap_tagihan.php');
                }
                else if($_GET['page']=='data-tagihan'){
                  include('pelanggan-tagihan/data_tagihan.php');
                }
                else if($_GET['page']=='laporan-kas'){
                  include('pelanggan-tagihan/lap_kas.php');
                }
                else if($_GET['page']=='tambah-kas'){
                  include('add/add_datakas.php');
                }
                else if($_GET['page']=='laporan-tagihan'){
                  include('../report/pdf_rkptagihan.php');
                }
                else if($_GET['page']=='laporan-piutang'){
                  include('../report/pdf_piutang.php');
                }
                else if($_GET['page']=='laporan-hutang'){
                  include('report/pdf_hutang.php');
                }
                else if($_GET['page']=='pdf-kas'){
                  include('report/pdf_kas.php');
                }
                else if($_GET['page']=='cetak-tagihan'){
                  include('pelanggan-tagihan/cetak_tagihan.php');
                }
                else if($_GET['page']=='data-pembayaran'){
                  include('pelanggan-tagihan/data_pembayaran.php');
                }
                else if($_GET['page']=='rekap-pembayaran'){
                  include('pelanggan-tagihan/rekap_pembayaran.php');
                }
                else if($_GET['page']=='entry-pengeluaran'){
                  include('pelanggan-tagihan/entrypengeluaran.php');
                }
                else {  
                  include('dashboard.php');
                }
              }               
            ?>
            <!-- /.content -->
        </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>
  <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
