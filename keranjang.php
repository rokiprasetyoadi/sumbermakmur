<?php
  include 'header.php';

  if (!isset($_SESSION['nama'])) {
    header("location: index.php");
  }
  
  ?>

 	<div class="content">
		<h4 style="padding-left: 30px;"> Keranjang </h4>
		
    <table class="table table-bordered" style="margin-top: 30px;">
  <thead>
    <tr>
      <th scope="col">Preview</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Qty</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="text-align: center;"><img src="Gambar/benihjagung.jpg" style="height: 70px; width: 70px;"></td>
      <td>Benih Jagung</td>
      <td>Rp. 15000</td>
      <td>2</td>
      <td>Rp.30000</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td colspan="4">Subtotal : </td>
      <td>Rp.30000</td>
    </tr>
  </tbody>
</table>

<div class="bayar" style="padding: 30px; margin-bottom: 30px;"><a class="btn btn-success" href="#" role="button" style="float: right;">Bayar</a>
</div>

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