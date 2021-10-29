<?php  

	// koneksi ke databse
	$conn = mysqli_connect("localhost", "root", "", "datasystem");

	function query($query) {
		global $conn;

		$result = mysqli_query($conn, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data) {
		global $conn;

		$noSurat = htmlspecialchars($data["noSurat"]);
		$namaTender = htmlspecialchars($data["namaTender"]);
		$namaPokja = htmlspecialchars($data["namaPokja"]);
		$jadwalPelaksanaan = htmlspecialchars($data["jadwalPelaksanaan"]);
		$deliveryTime = htmlspecialchars($data["deliveryTime"]);
		$hps = htmlspecialchars($data["hps"]);
		$tanggalSubmit = htmlspecialchars($data["tanggalSubmit"]);
		$statusSurduk = htmlspecialchars($data["statusSurduk"]);
		$tenagaAhli = htmlspecialchars($data["tenagaAhli"]);
		$statusKlarifikasi = htmlspecialchars($data["statusKlarifikasi"]);
		$gdrive = htmlspecialchars($data["gdrive"]);

		$query = "INSERT INTO weblelang 
				  (id, noSurat, namaTender, namaPokja, jadwalPelaksanaan, deliveryTime, hps, tanggalSubmit, statusSurduk, tenagaAhli, statusKlarifikasi, gdrive)
					VALUES
				  ('', '$noSurat', '$namaTender', '$namaPokja', '$jadwalPelaksanaan', '$deliveryTime', '$hps', '$tanggalSubmit', '$statusSurduk', '$tenagaAhli', '$statusKlarifikasi', '$gdrive')
				";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function hapus($id){
		global $conn;

		mysqli_query($conn, "DELETE FROM weblelang WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	function ubah($data){
		global $conn;

		$id = $data['id'];
		$noSurat = htmlspecialchars($data["noSurat"]);
		$namaTender = htmlspecialchars($data["namaTender"]);
		$namaPokja = htmlspecialchars($data["namaPokja"]);
		$jadwalPelaksanaan = htmlspecialchars($data["jadwalPelaksanaan"]);
		$deliveryTime = htmlspecialchars($data["deliveryTime"]);
		$hps = htmlspecialchars($data["hps"]);
		$tanggalSubmit = htmlspecialchars($data["tanggalSubmit"]);
		$statusSurduk = htmlspecialchars($data["statusSurduk"]);
		$tenagaAhli = htmlspecialchars($data["tenagaAhli"]);
		$statusKlarifikasi = htmlspecialchars($data["statusKlarifikasi"]);
		$gdrive = htmlspecialchars($data["gdrive"]);

		$query = "UPDATE weblelang SET
					noSurat = '$noSurat', 
					namaTender = '$namaTender',
					namaPokja = '$namaPokja',
					jadwalPelaksanaan = '$jadwalPelaksanaan',
					deliveryTime = '$deliveryTime',
					hps = '$hps',
					tanggalSubmit = '$tanggalSubmit',
					statusSurduk = '$statusSurduk',
					tenagaAhli = '$tenagaAhli',
					statusKlarifikasi = '$statusKlarifikasi',
					gdrive = '$gdrive'
				  WHERE id = $id
				";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function cari($keyword){
		$query = "SELECT * FROM weblelang
						WHERE
					noSurat LIKE '%$keyword%' OR
					namaTender LIKE '%$keyword%' OR
					namaPokja LIKE '%$keyword%' OR
					deliveryTime LIKE '%$keyword%' OR
					hps LIKE '%$keyword%' OR
					tanggalSubmit LIKE '%$keyword%' OR
					statusSurduk LIKE '%$keyword%' OR
					tenagaAhli LIKE '%$keyword%' OR
					statusKlarifikasi LIKE '%$keyword%' OR
					gdrive LIKE '%$keyword%'
				";
		return query($query);
	}
	
?>