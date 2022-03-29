<?php 
	$title = "Login Admin";
	require "includes/head.php";
	$err = "";

	if (isset($_POST['login'])) {
		$user = $_POST['user'];
		$pass = md5($_POST['pass']);

		$query = mysqli_query($conn, "SELECT * FROM admin WHERE user_admin = '$user' and pass_admin= '$pass'");
		$row = mysqli_num_rows($query);

		if ($row > 0) {
			// berhasil
			$_SESSION['admin'] = true;
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/index.php'/>";
		}else{
			// gagal
			$err = "username atau password salah";
		}
	}
 ?>
<body style="background-image: url(../assets/img/bg.jpg);">
   <div class="overlay"></div>
   <form action="" method="post" class="box">
       <div class="header">
           <h4> Login To Your Account</h4>
           <p>WELCOME TO IZUMI GAME SHOP<br>
              SPECIALIST AKUN GAME NO.1 <br>
              MURAH,AMAN DAN TERPERCAYA <br>
              </p>
       </div>
       <div class="login-area">
       	    <label for="user"></label>
       	    <p><?=$err ?></p>
           <input type="text" name="user" id="user" class="username" placeholder="Username">
           <label for="pass"></label>
           <input type="password" name="pass" id="pass" class="password" placeholder="Password">
           <button type="submit" name="login" class="submit">login</button>
         </div>
          </form> 
    

</body>
</html>