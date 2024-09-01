<!DOCTYPE html>
<html>
<head>
    <title>Tambah tabel mahasiswa</title>
</head>
<body>

    <br/>
        <a href="tambah.php">+ TAMBAH MAHASISWA</a>
        
    <br/>
    <br/>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Ukuran</th>
                <th>Jumlah Pesanan</th>
                <th>Email</th>
                <th>Nama</th>
                <th>telepon</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Kode Pos</th>
            </tr>
<?php
include 'koneksi.php';
$no = 1;
$kon = mysqli_query($kon,"select * from checkout");
while($d = mysqli_fetch_array($sql)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['ukuran']; ?></td>
        <td><?php echo $d['jumlah']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td><?php echo $d['namadepan']; ?></td>
        <td><?php echo $d['namabelakang']; ?></td>
        <td><?php echo $d['telepon']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['provinsi']; ?></td>
        <td><?php echo $d['kabupaten']; ?></td>
        <td><?php echo $d['kecamatan']; ?></td>
        <td><?php echo $d['kelurahan']; ?></td>
        <td><?php echo $d['kodepos']; ?></td>
        
    </tr>
<?php
}
?>
</table>
</body>
</html>

