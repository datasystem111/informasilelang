<?php 

	require 'functions.php';

	// ambil data di url
	$id = $_GET["id"];

	// query data mahasiswa berdasarkan id
	$weblelang = query("SELECT * FROM  weblelang WHERE id = $id")[0];

	// cek apakah tombol submit sudah ditekan atau belum
	if ( isset($_POST["submit"]) ) {

	// cek apakah data berhasil diubah atau tidak
	if (ubah($_POST) > 0){
		echo "	
			<script>
				alert('Data Berhasil Diubah');
				document.location.href = 'listtender.php'
			</script>
		";
	} else{
		echo "<script>
				alert('Data Gagal Diubah');
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
    <title>Ubah Data Tender</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   </head>
<body>
	
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">Ubah Data Tender</a>
      </div>
      </div>
  </nav>

  <div class="form">
  	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $weblelang['id']; ?>">
		<ul>
			<li>
				<label for="noSurat">No. Surat : </label>
				<input type="text" name="noSurat" id="noSurat" required value="<?= $weblelang["noSurat"]; ?>">

			</li>
			<li>
				<label for="namaTender">Nama Tender : </label>
				<input type="text" name="namaTender" id="namaTender" value="<?= $weblelang["namaTender"]; ?>">
			</li>
			<li>
				<label for="namaPokja">Nama Pokja : </label>
				<input type="text" name="namaPokja" id="namaPokja" value="<?= $weblelang["namaPokja"]; ?>">
			</li>
			<li>
				<label for="jadwalPelaksanaan">Jadwal Pelaksanaan : </label>
				<input type="datetime-local" name="jadwalPelaksanaan" id="jadwalPelaksanaan" value="<?= $weblelang["jadwalPelaksanaan"]; ?>">
			</li>
			<li>
				<label for="deliveryTime">Delivery Time : </label>
				<input type="text" name="deliveryTime" id="deliveryTime" value="<?= $weblelang["deliveryTime"]; ?>">
			</li>
			<li>
				<label for="hps">HPS : </label>
				<input type="text" name="hps" id="hps" value="<?= $weblelang["hps"]; ?>">
			</li>
			<li>
				<label for="tanggalSubmit">Tanggal Submit : </label>
				<input type="datetime-local" name="tanggalSubmit" id="tanggalSubmit" value="<?= $weblelang["tanggalSubmit"]; ?>">
			</li>
			<li>
				<label for="statusSurduk">Status Surduk : </label>
				<input type="text" name="statusSurduk" id="statusSurduk" value="<?= $weblelang["statusSurduk"]; ?>">
			</li>
			<li>
				<label for="tenagaAhli">Tenaga Ahli : </label>
				<input type="text" name="tenagaAhli" id="tenagaAhli" value="<?= $weblelang["tenagaAhli"]; ?>">
			</li>
			<li>
				<label for="statusKlarifikasi">Status Klarifikasi : </label>
				<input type="text" name="statusKlarifikasi" id="statusKlarifikasi" value="<?= $weblelang["statusKlarifikasi"]; ?>">
			</li>
			<li>
				<label for="gdrive">Link GDrive : </label>
				<input type="text" name="gdrive" id="gdrive" value="<?= $weblelang["gdrive"]; ?>">
			</li><br>
			<li>
				<button class="tambah" type="submit" name="submit">Ubah Data</button>
			<li>
				<a class="back" href="listtender.php">Kembali</a>
			</li>
			</li>
		</ul>
	</form>
  </div>

</body>

</html>
