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
        
        <!-- Sepatu pr Baris 1 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr1.php"><img src="../foto/sepatu pr/sepatu1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="SKECHERS GO RUN ELEVATE WOMEN'S RUNNING SHOES - ROSE">SKECHERS GO RUN ELEVATE WOMEN'S RUNNING SHOES - ROSE.</p>
                        <h4>Rp. 959.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr2.php"><img src="../foto/sepatu pr/sepatu2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Asics Gel-Kayano 28 Women's Running Shoes - Pink">Asics Gel-Kayano 28 Women's Running Shoes - Pink.</p>
                        <h4>Rp. 1.919.200</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr3.php"><img src="../foto/sepatu pr/sepatu3.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Nike Air Zoom Terra Kiger 8 Women's Trail Running Shoes - Orange">Nike Air Zoom Terra Kiger 8 Women's Trail Running Shoes - Orange.</p>
                        <h4>Rp. 1.289.400</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr4.php"><img src="../foto/sepatu pr/sepatu4.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Adidas Duramo 10 Women's Running Shoes - Indigo">Adidas Duramo 10 Women's Running Shoes - Indigo.</p>
                        <h4>Rp. 540.000</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Sepatu pr Baris 2 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr5.php"><img src="../foto/sepatu pr/sepatu5.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="SKECHERS GO WALK ARCH FIT WOMEN'S WALKING SHOES - BLACK">SKECHERS GO WALK ARCH FIT WOMEN'S WALKING SHOES - BLACK.</p>
                        <h4>Rp. 1.199.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr6.php"><img src="../foto/sepatu pr/sepatu6.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Nike Revolution 6 Next Nature Premium Women's Road Running Shoes - White">Nike Revolution 6 Next Nature Premium Women's Road Running Shoes - White.</p>
                        <h4>Rp. 823.200</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr7.php"><img src="../foto/sepatu pr/sepatu7.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="NEW BALANCE Fresh Foam Arishi V4 Women's Running Shoes- Black">NEW BALANCE Fresh Foam Arishi V4 Women's Running Shoes- Black.</p>
                        <h4>Rp. 699.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr8.php"><img src="../foto/sepatu pr/sepatu8.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Adidas Women's Start Your Running Shoes - White">Adidas Women's Start Your Running Shoes - White.</p>
                        <h4>Rp. 660.000</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Sepatu pr Baris 3 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr9.php"><img src="../foto/sepatu pr/sepatu9.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="NEW BALANCE 410v7 Women's Running Shoes - Camo Green With Orange">NEW BALANCE 410v7 Women's Running Shoes - Camo Green With Orange.</p>
                        <h4>Rp. 629.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr10.php"><img src="../foto/sepatu pr/sepatu10.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Nike React Miler 2 Women's Road Running Shoes - Purple">Nike React Miler 2 Women's Road Running Shoes - Purple.</p>
                        <h4>Rp. 1.187.400</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr11.php"><img src="../foto/sepatu pr/sepatu11.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Reebok Lite 3 Women Running Shoes - Black">Reebok Lite 3 Women Running Shoes - Black.</p>
                        <h4>Rp. 489.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu pr12.php"><img src="../foto/sepatu pr/sepatu12.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="SKECHERS GO RUN ELEVATE WOMEN'S RUNNING SHOES - MAUVE">SKECHERS GO RUN ELEVATE WOMEN'S RUNNING SHOES - MAUVE.</p>
                        <h4>Rp. 899.000</h4>
                </div>
                </div>
            </div>
        </div>   
</div>
    <!-- CARD End -->
</body>
</html>