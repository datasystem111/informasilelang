<?php  

require 'functions.php';

	// cek apakah tombol submit sudah ditekan atau belum
	if ( isset($_POST["submit"]) ) {

	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST) > 0){
		echo "	
			<script>
				alert('Data Berhasil Ditambah');
				document.location.href = 'listtender.php'
			</script>
		";
	} else{
		echo "<script>
				alert('Data Gagal Ditambah');
				document.location.href = 'listtender.php'
			</script>
		";
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Tambah Data Tender</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   </head>
<body>
	
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">Tambah Data Tender</a>
      </div>
      </div>
  </nav>

  <div class="form">
  	<form action="" method="post">
		<ul>
			<li>
				<label for="noSurat">No. Surat : </label>
				<input type="text" name="noSurat" id="noSurat" required autocomplete = 'off'>
			</li>
			<li>
				<label for="namaTender">Nama Tender : </label>
				<input type="text" name="namaTender" id="namaTender" autocomplete = 'off'>
			</li>
			<li>
				<label for="namaPokja">Nama Pokja : </label>
				<input type="text" name="namaPokja" id="namaPokja" autocomplete = 'off'>
			</li>
			<li>
				<label for="jadwalPelaksanaan">Jadwal Pelaksanaan : </label>
				<input type="datetime-local" name="jadwalPelaksanaan" id="jadwalPelaksanaan" autocomplete = 'off'>
			</li>
			<li>
				<label for="deliveryTime" autocomplete = 'off'>Delivery Time : </label>
				<input type="text" name="deliveryTime" id="deliveryTime" autocomplete = 'off'>
			</li>
			<li>
				<label for="hps">HPS : </label>
				<input type="text" name="hps" id="hps" autocomplete = 'off'>
			</li>
			<li>
				<label for="tanggalSubmit">Tanggal Submit : </label>
				<input type="datetime-local" name="tanggalSubmit" id="tanggalSubmit" autocomplete = 'off'>
			</li>
			<li>
				<label for="statusSurduk">Status Surduk : </label>
				<input type="text" name="statusSurduk" id="statusSurduk" autocomplete = 'off'>
			</li>
			<li>
				<label for="tenagaAhli">Tenaga Ahli : </label>
				<input type="text" name="tenagaAhli" id="tenagaAhli" autocomplete = 'off'>
			</li>
			<li>
				<label for="statusKlarifikasi">Status Klarifikasi : </label>
				<input type="text" name="statusKlarifikasi" id="statusKlarifikasi" autocomplete = 'off'>
			</li>
			<li>
				<label for="gdrive">Link Gdrive : </label>
				<input type="text" name="gdrive" id="gdrive" autocomplete = 'off'>
			</li><br>
			<li>
				<button class="tambah" type="submit" name="submit">Tambah Data</button>
			</li>
			<li>
				<a class="back" href="listtender.php">Kembali</a>
			</li><br>
		</ul>
	</form>
  </div>

</body>

</html>
