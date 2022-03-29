<?php 
    $title = "Home ";
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
        <div class="row d-flex justify-content-center">
            <div class="col-md-11">
                <div class="row d-flex justify-content-end">
                <div class="col-md-8" style="margin-top: 35px;">
                             <div class="row">
                                 <div class="col-md-4">
                             <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Game Category
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?=BASE_URL;?>">Semua Game</a>
                                <?php 
                                    $sqll = "SELECT * FROM kategori order by nama_kategori ASC";
                                    $Qkategori = mysqli_query($conn, $sqll);
                                    $kategori = mysqli_fetch_assoc($Qkategori);
                                    do{
                                ?>
                                <a class="dropdown-item" href="?filter=<?=$kategori['id_kategori'];?>"><?=$kategori['nama_kategori']?></a>
                                <?php 
                                }while ($kategori = mysqli_fetch_assoc($Qkategori));
                                ?>
                            </div>
                            </div>
                             </div>
                             </div>
                         </div>
                    <div class="col-lg-4">
                        <form action="?s=" class="mt-3">
                                <div class="row">
                                    <div class="col-md-10 sm-8 mt-3 justify-content-end">
                                    <div class="form-group">
                                        <input class="form-control" type="search" value="<?php if(isset($_GET['s'])) {echo $_GET['s'];} ?>" name="s" placeholder=" Masukkan Keywoard "   style="border-radius: 9999px;">
                                    </div>            
                                </div>
                                    <div class="form-group"> 
                                        <input type="submit" class="btn btn-primary mt-3" value="cari" style="border-radius:25%;"> 
                                        </div>                
                                    </div>
                            </form>
                         </div>
                    </div>
            </div>
                    <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">     
                        <div class="container">
                        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            </ol>
                            <div class="carousel-inner " role="listbox" style="border-radius: 20px;">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="<?=BASE_URL;?>assets/img/slider1.png" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                          </div> 
                          </div>
                    </div>
                        </div>
                   
                <div class="row">
                    <?php 
                        if (mysqli_num_rows($result) > 0) {
                         do{
                     ?>
                    <div class="col-lg-4 col-md-4 sm-6 mb-3 mt-3">
                        <div class="card ho" style="border-radius: 20px;">
                            <!-- <a href="tampil.php?id=<?=$data['id_akun'];?>" style="padding: 5px; max-width: 150px; border-radius: 5px; "><img class="card-img-top" style="float:left;" src="<?=BASE_URL;?>assets/akun/<?= $data['gambar_akun'];?>"></a> -->

                            <div class="card-body">
                            <h5 class="card-title">
                                  <a style="color: #cf7609;" href="tampil.php?id=<?=$data['id_akun'];?>"><?=$data['nama_akun'];?></a>
                            </h5>
                                <p class=" shopeee">Rp. <?=number_format($data['harga_akun']);?></p>
                                <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                <p class="text-right"><a href="tampil.php?id=<?=$data['id_akun'];?>">Detail..</a></p>
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
                </div>
            </div>
            </div>

        <!-- </div> -->
  <?php require "includes/footer.php"; ?> 
