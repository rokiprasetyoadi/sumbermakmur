<?php
  include 'header.php';
  include 'connect.php';
  ?>

 	<div class="content">		

  	<?php  
		 $id = $_GET["id_artikel"];
			$query = mysqli_query($con,"SELECT * FROM artikel WHERE id_artikel='$id'");
			while ($row=mysqli_fetch_array($query)) {
				echo $row["judul_artikel"];		
				echo $row["deskripsi"];		
			}
		?>

<?php
	include 'footer.php';
?>