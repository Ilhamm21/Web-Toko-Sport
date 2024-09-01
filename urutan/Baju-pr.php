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

        <!-- Baju pr Baris 1 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr1.php"><img src="../foto/baju pr/baju1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="REEBOK WOMEN BIG VECTOR TEE WOMEN'S T-SHIRT - BLACK">REEBOK WOMEN BIG VECTOR TEE WOMEN'S T-SHIRT - BLACK.</p>
                        <h4>Rp. 99.500</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr2.php"><img src="../foto/baju pr/baju2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="ASTEC GAFNA WOMEN'S LONGSLEVEE TSHIRT- Sky Blue">ASTEC GAFNA WOMEN'S LONGSLEVEE TSHIRT- Sky Blue.</p>
                        <h4>Rp. 199.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr3.php"><img src="../foto/baju pr/baju3.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Skechers Women Running Long Slv T-Shirt Women's T-Shirt - Blue">Skechers Women Running Long Slv T-Shirt Women's T-Shirt - Blue.</p>
                        <h4>Rp. 207.200</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr4.php"><img src="../foto/baju pr/baju4.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="ASTEC GIZA WOMEN' LONGSLEEVE TSHIRT - GREY">ASTEC GIZA WOMEN' LONGSLEEVE TSHIRT - GREY.</p>
                        <h4>Rp. 179.000</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Baju pr Baris 2 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr5.php"><img src="../foto/baju pr/baju5.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="ASTEC ELLORE LIFESTYLE WOMEN'S TSHIRT- PEACH">ASTEC ELLORE LIFESTYLE WOMEN'S TSHIRT- PEACH.</p>
                        <h4>Rp. 90.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr6.php"><img src="../foto/baju pr/baju6.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Reebok Women's Running T-Shirt - Peach">Reebok Women's Running T-Shirt - Peach.</p>
                        <h4>Rp. 181.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr7.php"><img src="../foto/baju pr/baju7.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="ASTEC FELICIA LIFESTYLE WOMEN'S TSHIRT- Taupe">ASTEC FELICIA LIFESTYLE WOMEN'S TSHIRT- Taupe.</p>
                        <h4>Rp. 103.200</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr8.php"><img src="../foto/baju pr/baju8.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="REEBOK WOMEN REE GRAPHIC TEE - GREY HEATHER">REEBOK WOMEN REE GRAPHIC TEE - GREY HEATHER.</p>
                        <h4>Rp. 99.500</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Baju pr Baris 3 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr9.php"><img src="../foto/baju pr/baju9.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Skechers Women Running Tee - Pink">Skechers Women Running Tee - Pink.</p>
                        <h4>Rp. 159.200</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr10.php"><img src="../foto/baju pr/baju10.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="ASTEC GANYA BASIC WOMEN'S TSHIRT- Green">ASTEC GANYA BASIC WOMEN'S TSHIRT- Green.</p>
                        <h4>Rp. 103.200</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr11.php"><img src="../foto/baju pr/baju11.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="New Balance Longsleeve Women's T-Shirt TNR- Black">New Balance Longsleeve Women's T-Shirt TNR- Black.</p>
                        <h4>Rp. 239.200</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju pr12.php"><img src="../foto/baju pr/baju12.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Adidas Women's LOUNGEWEAR Essentials Slim 3-Stripes Tee -">Adidas Women's LOUNGEWEAR Essentials Slim 3-Stripes Tee -.</p>
                        <h4>Rp. 430.000</h4>
                </div>
                </div>
            </div>
        </div>    
</div>
    <!-- CARD End -->
</body>
</html>