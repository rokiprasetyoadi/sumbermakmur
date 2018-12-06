<?php
	include 'connect.php';
 	include 'header.php';

 ?>

	<div class="content">
			<h4 style="padding-left: 30px;"> Pencarian </h4>

		<form action="index.php" method="get">
			<label>Cari :</label>
			<input type="text" name="cari">
			<input type="submit" value="Cari">
		</form>
	 
		<?php 
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			echo "<b>Hasil pencarian : ".$cari."</b>";
		}
		?>
	 
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
			</tr>
			<?php 
			if(isset($_GET['cari'])){
				$cari = $_GET['cari'];
				$data = mysql_query("select * from produk where nama like '%".$cari."%'");				
			}else{
				$data = mysql_query("select * from produk");		
			}
			$no = 1;
			while($d = mysql_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
			</tr>
			<?php } ?>
		</table>