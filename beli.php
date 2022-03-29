<?php 
    $title = "Tampil Akun ";
    require "includes/header.php";




?>
<div class="col-md-12">
<form action="bayar.php" method="post">
         <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-4">
                <h2 class="text-white text-center">Isi Detail Pembayaran</h2><br>
                <div class="form-group">
                <div class="form-label-group">
                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                <input type="text" class="form-control" name="phone" placeholder="No WhatsApp" required>
            </div>
        </div>
            <div class="form-group">
                <div class="form-label-group">
                <textarea class="form-control" name="catatan" placeholder="Catatan"></textarea>
            </div>
        </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-success" name="bayar" value="Bayar Sekarang">

                <input type="hidden" name="qty" value="<?=$_POST['qty'];?>">
                <input type="hidden" name="id" value="<?=$_POST['id'];?>">
           </div>
         </div>
      </div>
 </form>
 </div>
    <?php require "includes/footer.php"; ?>