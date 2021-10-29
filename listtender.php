<?php    
	
	require 'functions.php';

	$datasystem = query("SELECT * FROM weblelang ORDER BY tanggalSubmit ASC");

	// tombol cari ditekan
	if(isset ($_POST["cari"])){
		$datasystem = cari($_POST["keyword"]);
	}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Informasi Tender</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">List Lelang</a>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="listtender.php">List Tender</a></li>
        <li><a href="ceklistender.php">Ceklis Tender</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>
  <div class="tambah">
  	<a href="tambah.php">Tambah Data Lelang</a>
  </div>
  <div class="cari">
  	<form action="" method="post">

		<input type="text" name="keyword" size="40px" autofocus="" placeholder=" Masukkan Keyword Pencarian.." autocomplete="off">
		<button type="submit" name="cari">Cari</button>

		
	</form>
  </div>
  <div class="tabel">
    <table border="1" cellpadding="10" cellspacing="0" width="100%">
		<tr>
			<th>No.</th>
			<th width="12%">No. Surat</th>
			<th width="20%">Nama Tender</th>
			<th width="15%">Nama Pokja</th>
			<th width="11%">Jadwal Pelaksanaan</th>
			<th>Delivery Time</th>
			<th>HPS</th>
			<th width="11%">Tanggal Submit</th>
			<th width="9%">Aksi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach($datasystem as $row) : ?>
		<tr>
			<td class="tengah"><?= $i?></td>
			<td><?= $row ["noSurat"]; ?></td>
			<td><?= $row ["namaTender"]; ?></td>
			<td><?= $row ["namaPokja"]; ?></td>
			<td class="tengah"><?= $row ["jadwalPelaksanaan"]; ?></td>
			<td><?= $row ["deliveryTime"]; ?></td>
			<td><?= $row ["hps"]; ?></td>
			<td class="tengah"><?= $row ["tanggalSubmit"]; ?></td>
			<td class="tengah">
				<a class="ubah" href="ubah.php?id=<?= $row ["id"]; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?= $row ["id"]; ?>" onclick="return confirm('Yakin Ingin Menghapus Data?');">Remove</a>
			</td>
		</tr>
		<?php $i++ ?>
		<?php endforeach; ?>
	</table>
  </div>
</body>

</html>
