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
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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

        <!-- Baju lk Baris 1 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk1.php"><img src="../foto/baju lk/baju1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Puma Active Big Logo Men's T-Shirt - Dark Blue">Puma Active Big Logo Men's T-Shirt - Dark Blue.</p>
                        <h4>Rp. 299.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk2.php"><img src="../foto/baju lk/baju2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Adidas Aeroready Designed To Move Sport Men Tshirt - Ink">Adidas Aeroready Designed To Move Sport Men Tshirt - Ink.</p>
                        <h4>Rp. 320.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk3.php"><img src="../foto/baju lk/baju3.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Dunlop Men's Polo - Navy">Dunlop Men's Polo - Navy.</p>
                        <h4>Rp. 181.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk4.php"><img src="../foto/baju lk/baju4.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Reebok Wor Comm Ss Tech Tee Men's T-Shirt - Navy">Reebok Wor Comm Ss Tech Tee Men's T-Shirt - Navy.</p>
                        <h4>Rp. 181.300</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Baju lk Baris 2 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk5.php"><img src="../foto/baju lk/baju5.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Reebok Delta Muscle Men's Tank - Black">Reebok Delta Muscle Men's Tank - Black.</p>
                        <h4>Rp. 139.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk6.php"><img src="../foto/baju lk/baju6.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Nike Dri-FIT Miler Men's Running Tank - Black">Nike Dri-FIT Miler Men's Running Tank - Black.</p>
                        <h4>Rp. 258.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk7.php"><img src="../foto/baju lk/baju7.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Puma Essentials Jersey Polo Men's Polo Shirts - Blue">Puma Essentials Jersey Polo Men's Polo Shirts - Blue.</p>
                        <h4>Rp. 299.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk8.php"><img src="../foto/baju lk/baju8.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="NEW BALANCE COTTON POLO MEN'S T-SHIRT - DARK GREY HEATHER">NEW BALANCE COTTON POLO MEN'S T-SHIRT - DARK GREY HEATHER.</p>
                        <h4>Rp. 207.200</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Baju lk Baris 3 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk9.php"><img src="../foto/baju lk/baju9.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Reebok Men Vector Graphic Tee - Navy">Reebok Men Vector Graphic Tee - Navy.</p>
                        <h4>Rp. 99.500</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk10.php"><img src="../foto/baju lk/baju10.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="REEBOK MEN TRAINING POLO MEN's POLO - Navy">REEBOK MEN TRAINING POLO MEN's POLO - Navy.</p>
                        <h4>Rp. 181.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk11.php"><img src="../foto/baju lk/baju11.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="REEBOK MEN TRAINING POLO MEN'S POLO - MEDIUM GREY">REEBOK MEN TRAINING POLO MEN'S POLO - MEDIUM GREY.</p>
                        <h4>Rp. 181.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/baju lk12.php"><img src="../foto/baju lk/baju12.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="NEW BALANCE LOGO MEN'S TSHIRT#6- BLACK">NEW BALANCE LOGO MEN'S TSHIRT#6- BLACK.</p>
                        <h4>Rp. 155.400</h4>
                </div>
                </div>
            </div>
        </div> 

    <!-- Perempuan -->
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

    <!-- Anak -->
        <!-- Sepatu anak Baris 1-->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu anak1.php"><img src="../foto/sepatu anak/sepatu1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="New Balance 237 Bungee Lace Boys Sneakers - Nimbus Cloud With">New Balance 237 Bungee Lace Boys Sneakers - Nimbus Cloud With.</p>
                        <h4>Rp. 419.400</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu anak2.php"><img src="../foto/sepatu anak/sepatu2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="ADIDAS TEN'SSAUR RUN 2.0 KIDS RUNNING SHOES - Black">ADIDAS TEN'SSAUR RUN 2.0 KIDS RUNNING SHOES - Black.</p>
                        <h4>Rp. 400.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu anak3.php"><img src="../foto/sepatu anak/sepatu3.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="NEW BALANCE 996 Hook And Loop Boys Sneakers- Brown With Gray">NEW BALANCE 996 Hook And Loop Boys Sneakers- Brown With Gray.</p>
                        <h4>Rp. 599.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu anak4.php"><img src="../foto/sepatu anak/sepatu4.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Nike Flex Runner 2 Pre School Shoes - Black">Nike Flex Runner 2 Pre School Shoes - Black.</p>
                        <h4>Rp. 579.000</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Sepatu anak Baris 2-->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu anak5.php"><img src="../foto/sepatu anak/sepatu5.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Diadora Ernesto Jr Boy's Sneakers - Navy">Diadora Ernesto Jr Boy's Sneakers - Navy.</p>
                        <h4>Rp. 149.500</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu anak6.php"><img src="../foto/sepatu anak/sepatu6.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="New Balance SPORT SANDAL GS Boys Running Shoes - Black">New Balance SPORT SANDAL GS Boys Running Shoes - Black.</p>
                        <h4>Rp. 321.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu anak7.php"><img src="../foto/sepatu anak/sepatu7.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Airwalk Sarren JR Boys Sneakers- Black">Airwalk Sarren JR Boys Sneakers- Black.</p>
                        <h4>Rp. 179.400</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="../deskripsi/sepatu anak8.php"><img src="../foto/sepatu anak/sepatu8.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Disney Minnie Mickey Hi Cut Girl's Sneakers - White">Disney Minnie Mickey Hi Cut Girl's Sneakers - White.</p>
                        <h4>Rp. 367.200</h4>
                </div>
                </div>
            </div>
        </div>

    <!-- OlahRaga -->
        <!-- Sepak Bola -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/sepak bola/bola1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Nike Premier League Strike Third - Soccer Ball">Nike Premier League Strike Third - Soccer Ball.</p>
                        <h4>Rp. 272.300</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/sepak bola/bola2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Nike Futsal Maestro Soccer Ball - White">Nike Futsal Maestro Soccer Ball - White.</p>
                        <h4>Rp. 329.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/sepak bola/bola3.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="SKECHERS MINI SOCCER BALL Unisex's Football - BLACK WHITE">SKECHERS MINI SOCCER BALL Unisex's Football - BLACK WHITE.</p>
                        <h4>Rp. 199.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/sepak bola/bola4.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="SKECHERS MINI SOCCER BALLS - ORANGE">SKECHERS MINI SOCCER BALLS - ORANGE.</p>
                        <h4>Rp. 199.000</h4>
                </div>
                </div>
            </div>
        </div>

        <!-- Bulu Tangkis Baris 1 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/bulu tangkis/cock1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="ASTEC F300 FEATHER SHUTTLECOCK- WHITE">ASTEC F300 FEATHER SHUTTLECOCK- WHITE.</p>
                        <h4>Rp. 159.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/bulu tangkis/cock2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="ASTEC X700 NYLON SHUTTLECOCK- YELLOW">ASTEC X700 NYLON SHUTTLECOCK- YELLOW.</p>
                        <h4>Rp. 129.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/bulu tangkis/raket1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Astec Tornado 600 Badminton Racket G5 - Mid Grey">Astec Tornado 600 Badminton Racket G5 - Mid Grey.</p>
                        <h4>Rp. 299.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/bulu tangkis/raket2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Astec Tornado 700 Racket Badminton G5 US - Base Blue">Astec Tornado 700 Racket Badminton G5 US - Base Blue.</p>
                        <h4>Rp. 249.500</h4>
                </div>
                </div>
            </div>
        </div>
        <!-- Bulu Tangkis Baris 1 -->
        <div class="row" >
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/bulu tangkis/raket3.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Adidas Spieler E.08 - True Blue">Adidas Spieler E.08 - True Blue.</p>
                        <h4>Rp. 275.400</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/bulu tangkis/raket4.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <p class="card-text" title="Astec Hurricane 700 Racket Badminton G5 US - White">Astec Hurricane 700 Racket Badminton G5 US - White.</p>
                        <h4>Rp. 299.400</h4>
                </div>
                </div>
            </div>

        <!-- Basket -->
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/basket/bola1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                   
                    <p class="card-text" title="Spalding TF Silver Basketball - Brown">Spalding TF Silver Basketball - Brown.</p>
                        <h4>Rp. 599.000</h4>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href=""><img src="../foto/basket/bola2.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">                    
                    <p class="card-text" title="Wilson NBA Drive Basketball Red">Wilson NBA Drive Basketball Red.</p>
                        <h4>Rp. 299.000</h4>
                </div>
                </div>
            </div>
        </div> 
           
</div>
    <!-- CARD End -->
</body>
</html>