<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<style>li{list-style-type: none;}
</style>
<body>
<div class="container">
<h2>Form Checkout Pembelian</h2>
    <form action="proses.php" method="post">
    <div class="form-group">
        <p>Ukuran</p>
            <li><input type='radio' name='ukuran' value='39' />39 
            <input type='radio' name='ukuran' value='40' />40
            <input type='radio' name='ukuran' value='41' />41
            <input type='radio' name='ukuran' value='42' />42
            <input type='radio' name='ukuran' value='43' />43
            <input type='radio' name='ukuran' value='44' />44</li>
        </div>    
    <div class="form-group">
            <label>Jumlah Pembelian:</label>
            <td><input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
        </div>
    <div class="form-group">
            <label>Nama Depan:</label>
            <input type="text" name="namadepan" class="form-control" placeholder="Masukan Nama depan" />
        </div>
	<div class="form-group">
            <label>Nama Belakang:</label>
            <input type="text" name="namabelakang" class="form-control" placeholder="Masukan Nama Belakang" />
        </div>
	<div class="form-group">
	     <label>Alamat:</label>
	     <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea>
	</div> 
	<div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>
	<div class="form-group">
            <label>No HP:</label>
            <input type="number" name="telepon" class="form-control" placeholder="Masukan No HP" />
        </div>
	<div class="form-group">
            <label>Provinsi:</label>
            <input type="text" name="provinsi" class="form-control" placeholder="Alamat Provinsi" />
        </div>
    <div class="form-group">
            <label>Kabupaten:</label>
            <input type="text" name="kabupaten" class="form-control" placeholder="Alamat Kabupaten" />
        </div>
    <div class="form-group">
            <label>Kecamatan:</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Alamat Kecamatan" />
        </div>
    <div class="form-group">
            <label>Kelurahan:</label>
            <input type="text" name="kelurahan" class="form-control" placeholder="Alamat Kelurahan" />
    </div><div class="form-group">
            <label>Kode Pos:</label>
            <input type="text" name="kodepos" class="form-control" placeholder="Kode Pos" />
        </div>
        <p></p>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>