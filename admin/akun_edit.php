<?php
    $title =  "Edit Akun";
    require "includes/header.php";

    $id = $_GET['id'];


if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    if (!empty($_FILES['gambar']['name'])) {
        $gambar = $_FILES['gambar']['name'];
        $file = $_FILES['gambar']['tmp_name'];
     $path = "../assets/akun/";
     move_uploaded_file($file, $path.$gambar);
      $sql =  "UPDATE akun SET nama_akun = '$nama', harga_akun =  '$harga', stok_akun = '$stok', id_kategori = '$kategori', gambar_Akun = '$gambar' WHERE id_akun = '$id'";
      $result = mysqli_query($conn, $sql);
  

}else{
     $sql =  "UPDATE akun SET nama_akun = '$nama', harga_akun =  '$harga', stok_akun = '$stok', id_kategori = '$kategori' WHERE id_akun = '$id'";
      $result = mysqli_query($conn, $sql);

}
   
           
        if ($result) {
            // ke kategori.php
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/akun.php'/>";
    }
    }

    


$sql = "SELECT * FROM akun WHERE id_akun = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

 ?>           

            <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Data Table Example</div>
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                            <div class="form-group">
                                <label>Nama Akun</label>
                                <input type="text" name="nama" value="<?=$row['nama_akun'];?>" class="form-control" placeholder="Nama Akun" required>
                            </div>
                            <div class="form-group">
                                <label>Harga Akun</label>
                                <input type="number" name="harga" value="<?=$row['harga_akun'];?>" class="form-control" placeholder="Harga Akun" required>
                            </div>
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="number" name="stok" value="<?=$row['stok_akun'];?>" class="form-control" placeholder="Stok Akun" required>
                            </div>
                            <div class="form-group">
                                <label>Gambar Akun</label>
                                <input type="file" name="gambar" class="form-control">
                                <img src="<?=BASE_URL;?>assets/akun/<?=$row['gambar_akun'];?>"  style="width:100px;" >
                            </div>
                            <div class="form-group">
                                <label>Kategori Akun</label>
                                <select name="kategori" class="form-control" required>
                                    <option>--Pilih Kategori--</option>
                                    <?php 
                                    $Qkategori = mysqli_query($conn, "SELECT * FROM kategori");
                                    $kategori = mysqli_fetch_assoc($Qkategori);
                                    do{
                                        $select = "";
                                        if ($row['id_kategori'] == $kategori['id_kategori']) {
                                            $select = "selected";
                                        }

                                     ?>
                                     <option value="<?=$kategori['id_kategori'];?>"<?=$select;?>><?=$kategori['nama_kategori']; ?></option>
                                     <?php }while ($kategori = mysqli_fetch_assoc($Qkategori)); 
                                      ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-success">
                            </div>
                            </div>
                            </div>

                        </form>
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
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>

</body>

</html>