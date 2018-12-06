<?php
  include 'header.php';
  include 'connect.php';
  ?>

 	<div class="content">
		<h4 style="padding-left: 30px;"> Artikel </h4>
    &nbsp;
		
	<?php
    $queryselect = " SELECT *FROM artikel";
    $resultselect = mysqli_query($con, $queryselect);
  ?>

<table class="table" style="background-color: #FFFFFF">
    <?php
      while ($row = mysqli_fetch_array($resultselect)){
    ?>
        <tr>
          <td rowspan="2"><img src="foto_artikel/<?php echo $row['foto'] ?>" height="150px" width="150px"></td>
          <td><strong><?php echo $row['judul_artikel']; ?></strong></td>
        </tr>
        <tr>
          <td>
            <?php echo "<p>".substr($row['deskripsi'],0,250); ?>
            <?php echo "... <a href='artikelshow.php?id_artikel=".$row['id_artikel']."'>Read More</a></p>";?>
          </td>
        </tr>
        <?php
      }
    ?>
  </table>

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