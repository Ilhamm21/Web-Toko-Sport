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
 <!-- Bulu Tangkis -->
        <div class="row" >
        <div class="col">
                <div class="card">
                <a href="../deskripsi/raket1.php"><img src="../foto/bulu tangkis/raket1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Astec Tornado 600 Badminton Racket G5 - Mid Grey">Astec Tornado 600 Badminton Racket G5 - Mid Grey.</p>
                        <h4>Rp. 299.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/raket2.php"><img src="../foto/bulu tangkis/raket2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Astec Tornado 700 Racket Badminton G5 US - Base Blue">Astec Tornado 700 Racket Badminton G5 US - Base Blue.</p>
                        <h4>Rp. 249.500</h4>
                </div>
                </div>
            </div>
        
            <div class="col">
                <div class="card">
                <a href="../deskripsi/raket3.php"><img src="../foto/bulu tangkis/raket3.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Adidas Spieler E.08 - True Blue">Adidas Spieler E.08 - True Blue.</p>
                        <h4>Rp. 275.400</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/raket4.php"><img src="../foto/bulu tangkis/raket4.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Astec Hurricane 700 Racket Badminton G5 US - White">Astec Hurricane 700 Racket Badminton G5 US - White.</p>
                        <h4>Rp. 299.400</h4>
                </div>
            </div>
        </div>  
</div>
    <!-- CARD End -->
</body>
</html>