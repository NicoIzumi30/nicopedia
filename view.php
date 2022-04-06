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
     $idkat = $data['id_kategori'];
     $query = mysqli_query($conn, "SELECT * FROM kategori WHERE id_kategori = $idkat");
     $kategoriG = mysqli_fetch_assoc($query);



?>
<!-- <form action="beli.php" method="post">
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
    </form> -->


    <!-- new -->
    <form action="order" method="post">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-5" style="background-color: #32323e;">
                <li class="breadcrumb-item"><a href="<?=BASE_URL;?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?=BASE_URL;?>?filter=<?=$kategoriG['id_kategori'];?>"><?=$kategoriG['nama_kategori'];?></a></li>
                <li class="breadcrumb-item active text-white" aria-current="page"><?=$data['nama_akun'];?></li>
            </ol>
        <div class="col lg-10 d-flex">
        
        </nav>
        <div class="row justify-content-center">
        <div class="col-md-8 col-10 mt-3">
                <div class="putihBesar">
                    <h3 class=" pt-3 text-center"><?=$data['nama_akun'];?></h3>
                    <div class="detail-akun">
                    <img src="<?=BASE_URL;?>assets/akun/<?=$data['gambar_akun'];?>" alt="Gambar Akun" class="images-akun">
                    <div class="detail-spek">
                    <div class="idpenawaran">
                    <br><p class="text-abu hs ml-3 pt-3">ID Penawaran</p>
                    <p class="hs ml20"><?=$data['id_akun'];?></p>
                    </div>
                    <div class="platform">
                    <p class="text-abu hs ml-3 pt-3">Platform</p>
                    <p class="hs ml22"><?=$data['platform'];?></p>
                    </div>
                    <div class="platform">
                    <p class="text-abu hs ml-3 pt-3">Game Kategori</p>
                    <p class="hs ml17"><?=$kategoriG['nama_kategori'];?></p>
                    </div>
                    <div class="desc hs ml-3">
                        <h5 class="text-abu hs">Desc</h5><br>
                    <p class=" tid ml-3">AKSES PENUH! Anda dapat mengubah semua yang ada di akun!</p><br>
                    <p class="text-abu hs ml-3">-----------------------------------------------------</p><br>
                    <p class="tids ml-3">Jika Anda memiliki pertanyaan, tulis saja di Nicopedia CHAT, kami</p><br>
                    <p class="tidss ml-3">online hampir 24/7. Semua perdagangan hanya masuk melalui Nicopedia</p><br>
                    <p class="text-abu hs ml-3">----------------------------------------------------</p><br>
                    <p class="tidss ml-3">Bekerja dalam peningkatan dan penjualan akun selama lebih dari 1 Bulan.</p><br><br><br>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 col-10 mt-3">
                <div class="greenbox">
                    <p class="text-white ml-2 hs">Harga Satuan</p>
                    <h5 class="text-white text-right hs" style="padding-left: 100px;"> <?=number_format($data['harga_akun']);?></h5>
                    <small class="text-white hs">IDR</small>
                </div>
                <div class="abubox">
                    <div class="asuransi">
                    <img class="pl-1 hs" src="<?=BASE_URL;?>assets/img/sec.png" alt="garansi" height="70px">
                    </div>
                    <div class="text-ransi">
                    <p class="hs">Asuransi Gratis</p>
                    <p class="pl-5 hs">14 Hari</p>
                    </div>
                </div>
                <div class="putihbox">
                    <div class="kecepatan-pengiriman pt-2">
                        <p class="text-abu ml-3 hs">
                            Kecepatan Pengiriman
                        </p>
                        <p class="hs ml6">
                            1 Jam
                        </p>
                    </div>
                    <div class="stok">
                        <p class="text-abu ml-3 hs">
                            Stok
                        </p>
                        <p class="hs ml20">
                        <?=$data['stok_akun'];?>
                        </p>

                    </div>
                </div>
                <div class="putihbox2">
                    <div class="hargaBawah">
                         <p class="text-abu ml-3 hs">
                            Harga
                        </p>
                        <h5 class="hs ml18">
                        <?=number_format($data['harga_akun']);?>
                        </h5>
                        <small class="hs">IDR</small>
                     </div>
                </div>
                <div class="protect text-center">
                <input  type="hidden" value="1" name="qty">
                <input type="hidden" name="id" value="<?=$data['id_akun'];?>">
                <input type="submit" class="col-12 text-white beliS"  name="beli" value="Beli Sekarang"
                 style="">
                    <!-- <img src="<?=BASE_URL?>assets/img/icon.png" alt=""> -->
                </div>
            </div>

        </div>
        </div>
    </form>
    <!-- end new -->
    <?php require "includes/footer.php"; ?>