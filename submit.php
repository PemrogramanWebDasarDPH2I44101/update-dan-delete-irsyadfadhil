<?php
require_once("db.php");
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tgl_lahir = $_POST['tgl_lahir'];

$query = "INSERT INTO siswa(nama, nim, tgl_lahir)
		VALUES ('$nama','$nim','$tgl_lahir')";

if (mysqli_query($conn, $query)) {
	echo "Data baru berhasil di tambah";
}else {
	echo "Error :".$query."<br>". mysqli_error($conn);
}

mysqli_close($conn);
echo "<br>";
echo "<a href='list.php'>Silahkan lihat data anda</a>";
?>
