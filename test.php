<?php 
$title = "Test";
require "includes/header.php";
if (isset($_GET['filter'])) {
    $sql = "SELECT * FROM akun WHERE id_kategori = '".$_GET['filter']."'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
}else
if (isset($_GET['s'])) {
   $key = "%".$_GET['s']."%";
    $sql = "SELECT * FROM akun WHERE nama_akun like '$key'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
}else {
   $sql = "SELECT * FROM akun ORDER BY id_akun DESC";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
}
?>
<link href="<?=BASE_URL;?>assets/css/custom.css" rel="stylesheet">
<?php 
if (mysqli_num_rows($result) > 0) {
    do{
?>
<div class="list-detail mt-5" style="overflow: hidden; background-image:url('https://takapedia.com/assets/images/1630524640487.png'); color: #fff; height: 100px; width: 300px; border-radius:15px;">
<img src="<?=BASE_URL;?>assets/akun/<?= $data['gambar_akun'];?>" class="rounded float-left m-2 " style="border-radius: 10px;" width="80px" height="80px">
<p class="card-text text-white align-self-center mt-1"><b><?=$data['nama_akun'];?><br/><font size="2" color="#FFFF00"><b>stok : <?=$data['stok_akun'];?></b></font></b></p>
<p class="text-white"><a href="tampil.php?id=<?=$data['id_akun'];?>">Detail...</a></p>
</div>
<?php 
                    }while ($data = mysqli_fetch_assoc($result));
                       }else{
                                echo "<div class='notresult text-center'>";
                                echo  "<h5 class='text-white'>Tidak ada akun ditampilkan</h5>";
                                echo "</div>";
                            }
                     ?>




<!-- <div class="row">
                    <?php 
                        if (mysqli_num_rows($result) > 0) {
                         do{
                     ?>
                    <div class="col-lg-4 col-md-6 sm-6 mb-4 mt-4">
                        <div class="card h-100" style="border-radius: 20px;">
                            <a href="tampil.php?id=<?=$data['id_akun'];?>" style="padding: 10px"><img class="card-img-top" src="<?=BASE_URL;?>assets/akun/<?= $data['gambar_akun'];?>"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                  <a style="color: #cf7609;" href="tampil.php?id=<?=$data['id_akun'];?>"><?=$data['nama_akun'];?></a>
                                </h4>
                                <h5>Rp. <?=number_format($data['harga_akun']);?></h5>
                            </div>
                            <div class="card-footer text-center btn-beli">
                                <a href="tampil.php?id=<?=$data['id_akun'];?>">Beli
                             </a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }while ($data = mysqli_fetch_assoc($result));
                       }else{
                                echo "<div class='notresult text-center'>";
                                echo  "<h5 class='text-white'>Tidak ada akun ditampilkan</h5>";
                                echo "</div>";
                            }
                     ?>
                </div> -->