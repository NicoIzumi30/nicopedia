<?php 
    $title = "Tampil Akun ";
    require "includes/header.php";
    // if (isset($_GET['id'])) {
    //     $query = "SELECT  kategori.*, akun.* FROM akun 
    //             LEFT JOIN kategori ON kategori.id_kategori = akun.id_kategori 
    //             WHERE akun.id_akun";
    //     $qdata = mysqli_query($conn, $query);
    //     $data = mysqli_fetch_assoc($qdata);

    // }
    $id = $_GET['id'];
     if (isset($_GET['id'])) {
         $sql = "SELECT * FROM akun WHERE id_akun = '".$_GET['id']."'";
         $result = mysqli_query($conn, $sql);
         $data = mysqli_fetch_assoc($result);
     }



?>
<form action="beli.php" method="post">
         <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 mt-3"> 
                        <img class="card-img-top" src="<?=BASE_URL;?>assets/akun/<?=$data['gambar_akun'];?>">
                    </div>
                    
                 <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="text-white">Rp. <?=$data['harga_akun'];?></h5>
                            <div class="form-group">
                                <label>Qty:</label>
                                <input  type="number" value="1" name="qty" class="col-sm-2 form-control text-whitet" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h1 class="my-4 text-white"><?=$data['nama_akun'];?></h1>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small><br>   
                <input type="submit" class="btn btn-sm btn-success" name="beli" value="Beli">
                <input type="hidden" name="id" value="<?=$_GET['id'];?>">

        </div>
      </div>
    </form>
    <?php require "includes/footer.php"; ?>