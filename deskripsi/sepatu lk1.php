<?php
//inisialisasi session
session_start();
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Toko Sport</title>
</head>
<style>

    .card{
        width: 70%;
        margin-bottom: 60px;
        margin-left: 100px;
        margin-top: 60px;
    }
    .div-toko{
        text-align:center;
        margin: 5px;
        padding: 7px;
    }
    .toko{
        font-family: cursive; 
    }
    
    .row-dropdown{
        display: block;
        justify-content: center;
    }

    .btn{
        width: 15%;
        margin-left: 10px;
        padding: 10px;
    }
    .dropdown-menu{
        width: 15%;
    }
    .deskripsi{
        margin-top:60px;
    }
    .nama{
        font-size:25px;
    }
    li{
        list-style-type: none;
    }
    .button{
        background-color: coral;
        width:100px;
        
    }
</style>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Sport Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../masuk/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Nama Toko -->
    <div class="div-toko">
        <h1 class="toko"><b>SPORT ONLINE SIMPANG</b></h1>
    </div>
    <!-- Nama Toko End -->
    
    <!-- Dropdown -->
    <div class="dropdown">
        <div class="row-dropdown">
            <div class="col-dropdown">

            <!-- Laki Laki -->
                <a class="btn btn-outline-success dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Laki Laki
                </a>
            
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../urutan/Baju-lk.php">Baju</a></li>
                <li><a class="dropdown-item" href="../urutan/Sepatu-lk.php">Sepatu</a></li>
                </ul>
                
            <!-- Perempuan -->
                <a class="btn btn-outline-success dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Perempuan
                </a>
                
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../urutan/Baju-pr.php">Baju</a></li>
                <li><a class="dropdown-item" href="../urutan/Sepatu-pr.php">Sepatu</a></li>
                </ul>

            <!-- Anak Anak -->
                <a class="btn btn-outline-success dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Anak Anak
                </a>
                    
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../urutan/Sepatu-anak.php">Sepatu</a></li>
                </ul>

            <!-- Sepak Bola -->
                <a class="btn btn-outline-success dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Alat Sepak Bola
                </a>
                        
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../urutan/Bola.php">Bola</a></li>
                </ul>
                
            <!-- Bulu Tangkis -->
                <a class="btn btn-outline-success dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Alat Bulu Tangkis
                </a>
                
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../urutan/kok.php">kok</a></li>
                <li><a class="dropdown-item" href="../urutan/raket.php">Raket</a></li>
                </ul>

            <!-- Basket -->
                <a class="btn btn-outline-success dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Alat Basket
                </a>
                
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../urutan/Bola-basket.php">Bola Basket</a></li>
                </ul>
            </div>
        </div>
    </div>   
    <!-- Dropdown end -->

         <!-- Sepatu lk Baris 1 -->
         <div class="row" >
            <div class="col">
                <div class="card">
                <img src="../foto/sepatu lk/sepatu1.jpg" class="card-img-top" alt="...">         
                </div> 
            </div> 

            <div class="col">
                <div class="deskripsi">
                    <p class="nama">KUROTA SHOP SEPATU SNEAKERS PRIA WARNA TERANG STABILO L1871.</p>  
                    <li>Sepatu Sneakers Kualitas bagus harga terjangkau</li>
                    <li>Sepatu Sneakers Ringan, Kaki bergerak leluasa</li>
                    <li>Sepatu Sneakers Lembut di dalam, Nyaman saat dipakai</li>
                    <li>Sepatu Sneakers Anti slip, Tidak pengap, Tidak mudah lepas</li>
                    <li>Sepatu Sneakers Model simple dan elegan, Trend Fashion</li>
                    <p></p>
                    <li>Size 39-44 Perincian Size</li>
                    <li>39=24.5 cm</li>
                    <li>40=25 cm</li>
                    <p></p>
                    <li>Bahan: Jala + Karet</li>

                    <form action="checkout.php" method="post">
                        <p>Jenis Kelamin</p>
                        <li><input type='radio' name='ukuran' value='39' />39 
                        <input type='radio' name='ukuran' value='40' />40
                        <input type='radio' name='ukuran' value='41' />41
                        <input type='radio' name='ukuran' value='42' />42
                        <input type='radio' name='ukuran' value='43' />43
                        <input type='radio' name='ukuran' value='44' />44</li>
                        
                        <td><input type="number" name="jumlah" placeholder="Jumlah">
                            <input class="button" type='submit' name='beli' value='Beli'/>
                        </td>
                    </form> 
                </div>
            </div> 
        </div>  
        
</body>
</html>