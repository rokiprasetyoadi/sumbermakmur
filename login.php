<?php
  include 'header.php';
  ?>

 	<div class="content">
		<h4 style="padding-left: 30px;"> Masuk </h4>

    <?php

        include ("connect.php");

        if (isset($_POST['msk'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];

          $select - "SELECT * FROM datamember WHERE username='$username' AND password='$password';";
          $result = mysqli_query($con, $select);

          if (mysqli_num_rows($result) == 0) {
            $_SESSION['username'] = $username;
            header("location:index.php");
          }else{
            echo "<div class='alert-danger' role='alert'> login gagal periksa kembali username dan password anda</div>";
          }
  }
      ?>
		
    <form method="post" style="padding: 30px; padding-left: : 100px; padding-right : 500px">
      <div class="form-group">
      <label for="username">Username :</label>
      <input type="username" class="form-control" id="username" name="username" placeholder="Username">
      </div>
      <div class="form-group">
      <label for="password">Password :</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <div class="form-group form-check">
      <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
      </label>
      </div>
      <button type="submit" class="btn btn-primary" name="msk">Masuk</button>
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