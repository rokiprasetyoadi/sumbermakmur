<?php
  include 'header.php';
  include 'connect.php';
  ?>

  		<?php
          if (isset($_POST['buttoninsert'])) {
            $foto_transferbank= $_FILES['foto_transferbank']['name'];

            $queryinsert = "INSERT INTO verifikasi (foto_transferbank)
                  VALUES ('$foto_transferbank')";

            $resultinsert = mysqli_query($con, $queryinsert);
            move_uploaded_file($_FILES['foto_transferbank']['tmp_name'],'foto_trfbank/'.$_FILES['foto_transferbank']['name']);

        }
        ?>

 	<div class="content">		
 	<h4 style="margin-left: 100px;"> Verifikasi </h4>
    &nbsp;
    <table align="center" class="table table-bordered" style="width: 80%;">
	    <tr>
	      <th style="width: 30%;">Nama</th>
	      <td>...</td>
	    <tr>
	      <th>Alamat</th>
	      <td>...</td>
	    </tr>
	    <tr>
	      <th>No. Telp</th>
	      <td>...</td>
	    </tr>
	    <tr>
	      <th>Email</th>
	      <td>...</td>
	    </tr>
	    <tr>
	      <th>Username</th>
	      <td>...</td>
	    </tr>
	</table>

	<div class="upload-data" style="margin-left: 100px;">
		<form method="POST" action="" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="exampleFormControlFile1">Bukti Transfer Bank</label>
		    <input type="file" class="form-control-file" name="foto_transferbank" id="exampleFormControlFile1">
		  </div>
		  &nbsp;
		 <button type="submit" class="btn btn-primary" name="buttoninsert">Kirim</button>
		</form>
		
	</div>


<?php
	include 'footer.php';
?>