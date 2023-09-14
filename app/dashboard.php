<div class="col-sm-6">
<h1 class="m-0">Dashboard</h1>
</div>
<br>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                <div class="inner">
                <?php
                $data_pelanggan = mysqli_query($koneksi,"SELECT * FROM tb_dataplgn");
                $jumlah_data = mysqli_num_rows($data_pelanggan);
                ?>
                    <h3><?php echo $jumlah_data; ?></h3>
                    <p>Pelanggan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="index.php?page=data-pelanggan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>?</h3>
                <p>?</p>
                </div>
                <div class="icon">
                <i class="fas bi-clipboard2-data-fill"></i>
                </div>
                <a href="index.php?page=rekap-penagihan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                 </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                <div class="inner">
                <h3>?</h3>
                <p>?</p>
                </div>
                <div class="icon">
                <i class="fas bi-wallet2"></i>
                </div>
                <a href="index.php?page=laporan-kas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                <div class="inner">
                <h3>?</h3>
                <p>?</p>
                </div>
                <div class="icon">
                <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>


    

    

</div>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>