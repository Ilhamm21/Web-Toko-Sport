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
    p{
        width: 250px;
        overflow: hidden;
        white-space: nowrap;
        padding: 5px;
    }
    .card-text{
        text-overflow: ellipsis;
    }

    .card{
        width: 100%;
        margin-bottom: 5px;
        margin-top: 25px;
    }
    .div-toko{
        text-align:center;
        margin: 5px;
        padding: 7px;
    }
    .toko{
        font-family: cursive; 
    }
    
    .col .card{
        transition: transform .2s ease;
    }

    .col:hover .card{
        transform: scale(1.1);
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

    <!-- CARD -->
<div class="container">
    <!-- Laki Laki -->
        
        <!-- Sepatu lk Baris 1 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk1.php"><img src="../foto/sepatu lk/sepatu1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="KUROTA SHOP SEPATU SNEAKERS PRIA WARNA TERANG STABILO L1871.">KUROTA SHOP SEPATU SNEAKERS PRIA WARNA TERANG STABILO L1871.</p>
                        <h4>Rp300.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width:96% ">
                <a href="../deskripsi/sepatu lk2.php"><img src="../foto/sepatu lk/sepatu2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="sepatu sneaker fashion pria (SNA10) - SNA COLECTION Non COD - Hitam, 39.">sepatu sneaker fashion pria (SNA10) - SNA COLECTION Non COD - Hitam, 39.</p>
                        <h4>Rp84.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk3.php"><img src="../foto/sepatu lk/sepatu3.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Sepatu Pria Running//Sport//Sneakers Model Terbaru 2021.">Sepatu Pria Running//Sport//Sneakers Model Terbaru 2021.</p>
                        <h4>Rp149.990</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk4.php"><img src="../foto/sepatu lk/sepatu4.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                  
                    <p class="card-text" title="MAYRLU - Sepatu Sneakers Pria Casual Import - SNK7030.">MAYRLU - Sepatu Sneakers Pria Casual Import - SNK7030.</p>
                        <h4>Rp140.000</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Sepatu lk Baris 2 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk5.php"><img src="../foto/sepatu lk/sepatu5.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Hangout Running Cocok Pria Untuk Premium Sepatu Import Fashion Trendy">Hangout Running Cocok Pria Untuk Premium Sepatu Import Fashion Trendy.</p>
                        <h4>Rp346.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk6.php"><img src="../foto/sepatu lk/sepatu6.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Sneakers Pria Sepatu joging Pria Sepatu Cwok">Sneakers Pria Sepatu joging Pria Sepatu Cwok.</p>
                        <h4>Rp82.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk7.php"><img src="../foto/sepatu lk/sepatu7.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Sepatu Dane And Dine Sneakers Man S0038 White">Sepatu Dane And Dine Sneakers Man S0038 White.</p>
                        <h4>Rp249.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk8.php"><img src="../foto/sepatu lk/sepatu8.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Sepatu Sneakers Fashion CHX Terbaru Sepatu Sneakers Pria Sepatu Sport - Hitam Merah, 39">Sepatu Sneakers Fashion CHX Terbaru Sepatu Sneakers Pria Sepatu Sport - Hitam Merah, 39.</p>
                        <h4>Rp68.000</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Sepatu lk Baris 3 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk9.php"><img src="../foto/sepatu lk/sepatu9.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Sepatu Sneakers Pria Sport Casual Terbaru - Navy Merah, 39">Sepatu Sneakers Pria Sport Casual Terbaru - Navy Merah, 39.</p>
                        <h4>Rp99.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk10.php"><img src="../foto/sepatu lk/sepatu10.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Sepatu Sneaker Pria Import - Astro Sneakers Casual Shoes - Sepatu Kasual">Sepatu Sneaker Pria Import - Astro Sneakers Casual Shoes - Sepatu Kasual.</p>
                        <h4>Rp199.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk11.php"><img src="../foto/sepatu lk/sepatu11.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Willdance 38-44 Streeetfighter Merah - Sepatu Sneakers Running Sport - Merah, 38">Willdance 38-44 Streeetfighter Merah - Sepatu Sneakers Running Sport - Merah, 38.</p>
                        <h4>Rp149.990</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu lk12.php"><img src="../foto/sepatu lk/sepatu12.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Sepatu Pria Sneakers Signature Footstep Footwear - Fusion V2 Navy - 39">Sepatu Pria Sneakers Signature Footstep Footwear - Fusion V2 Navy - 39.</p>
                        <h4>Rp269.900</h4>
                </div>
                </div>
            </div>
        </div>    
</div>
    <!-- CARD End -->
</body>
</html>