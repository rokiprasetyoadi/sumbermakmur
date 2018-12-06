<?php
  include 'header.php';
  include 'connect.php';
  ?>

  <?php
    $queryselect = "SELECT *FROM produk";
    $resultselect = mysqli_query($con, $queryselect);
  ?>

    <div class="content">
    <h4 style="padding-left: 30px;"> PRODUK TERBARU</h4>&nbsp;

  <?php
    while ($row=mysqli_fetch_array($resultselect)){
  ?>
      <div class="col-md-5">
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="foto_produk/<?php echo $row['nama_file'] ?>" height="200px;" width="100px;" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['nama_produk'] ?></h5>
        <p class="card-text"><?php echo $row['deskripsi'] ?></p>
        <h5><?php echo $row['harga'] ?></h5>
            <div class="card-footer" align="center">
              <a href="" class="btn btn-primary btn-md">Beli</a>
              <a href="" class="btn btn-warning btn-md">Detail</a>
            </div>
      </div>
      </div>
    <?php } ?>
  </div>
  
  </div>
  <?php
  include('footer.php');
  ?>

</body>
</html>