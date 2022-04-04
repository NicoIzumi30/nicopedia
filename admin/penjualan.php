 <?php 
$title = "Daftar Penjualan";
require "includes/header.php"


?>           


            <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="bre<?=BASE_URL;?>breadcrumb-item">
                        <a href="http://localhost/izumi_game_shop/index.php">Dashboard/</a>
                    </li>
                    <li class="breadcrumb-item active">Penjualan</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Data Table Penjualan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Pembeli</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Jumlah</th>

                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                                    $query = mysqli_query($conn, "SELECT akun.*, Penjualan.*, customer.* FROM Penjualan 
                                                            LEFT JOIN akun on akun.id_akun = penjualan.id_akun
                                                            LEFT JOIN customer on customer.id_customer = penjualan.id_customer");

                                    $data = mysqli_fetch_assoc($query);
                                    if (mysqli_num_rows($query) > 0) {
                                    $no =1;
                                    $total = 0;

                                    do{
                                         $total += $data['qty_penjualan'] * $data["harga_akun"];
                                    ?>
                                        <tr>
                                            <td><?=$no++; ?></td>
                                            <td><?=$data['nama_customer']; ?></td>
                                            <td><?=$data['nama_akun']; ?></td>
                                            <td  style='text-align:right'>Rp. <?=$data['harga_akun']; ?></td>
                                            <td  style='text-align:center'><?=$data['qty_penjualan']; ?></td>
                                            <td  style='text-align:right'>Rp. <?=number_format($data['harga_akun'] * $data["qty_penjualan"]); ?></td>
                                        </tr>
                                    <?php }while ($data = mysqli_fetch_assoc($query));
                                    echo "
                                          <tr>
                                              <td style='text-align:right' colspan='5'>Total</td>
                                              <td style='text-align:right'>Rp. ".number_format($total)."</td>
                                          </tr>
                                    ";

                                }else{
                                    
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

     <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik tombol logout untuk menghapus seluruh sesi dan keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>
    <script src="<?=BASE_URL;?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>