<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$ukuran=$_POST["ukuran"];
$jumlah=$_POST["jumlah"];
$namadepan=$_POST["namadepan"];
$namabelakang=$_POST["namabelakang"];
$alamat=$_POST["alamat"];
$email=$_POST["email"];
$telepon=$_POST["telepon"];
$provinsi=$_POST["provinsi"];
$kabupaten=$_POST["kabupaten"];
$kecamatan=$_POST["kecamatan"];
$kelurahan=$_POST["kelurahan"];
$kodepos=$_POST["kodepos"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into checkout (ukuran,jumlah,namadepan,namabelakang,alamat,email,telepon,provinsi,kabupaten,kecamatan,kelurahan,kodepos) values
		('$ukuran','$jumlah','$namadepan','$namabelakang','$alamat','$email','$telepon','$provinsi','$kabupaten','$kecamatan','$kelurahan','$kodepos')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Pesanan berhasil, Pembelian Sedang diproses";
    exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>