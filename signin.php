<?php
  include 'header.php';
  ?>

 	<div class="content">
		<h4 style="padding-left: 30px;"> Daftar </h4>
		
    <form method="post" " style="padding: 30px; padding-left: : 100px; padding-right : 500px">
      <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="form-group">
      <label for="alamat">Alamat :</label>
      <input type="text" class="form-control" id="alamat" name="alamat">
      </div>
      <div class="form-group">
      <label for="telp">No. Telp :</label>
      <input type="text" class="form-control" id="Telp" name="telp">
      </div>
      <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
      <label for="Username">Username :</label>
      <input type="text" class="form-control" id="Username" name="username">
      </div>
      <div class="form-group">
      <label for="pwd">Password :</label>
      <input type="password" class="form-control" id="pwd" name="password">
      </div>
      <div class="form-group form-check">
      <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
      </label>
      </div>
      <button type="submit" class="btn btn-primary" name="dftr">Daftar</button>

      <?php
      if (isset($_POST['dftr'])) {
        $nama = $_POST ['nama'];
        $alamat = $_POST ['alamat'];
        $notelp = $_POST ['telp'];
        $email = $_POST ['email'];
        $username = $_POST ['username'];
        $password = $_POST ['password'];
      ?>
    </br>
    </br>
      <div class="alert alert-primary" role="alert">
        <?php
        echo "</br> Data Berhasil Disimpan <br/>";
        echo "</br> Nama : " . $nama;
        echo "</br> Alamat : " . $alamat;
        echo "</br> No. Telp : " . $notelp;
        echo "</br> Email : " . $email;
        echo "</br> Username : " . $username;
        ?>
      </div>
      <?php
      }
      ?>



      </form>

	<div class="footer" style="background-color: #7CB238; ">
		<div class="footer-copyright text-center py-3">© 2018 Copyright <br/>
    	<a href="#"> Kelompok 5 </a>
  	</div>
  </div>
</div>
</div>
	</div>
</body>
</html>