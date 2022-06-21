<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets\logo.ico" />
    <!-- Bootstrap icons-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
    <a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>
    <!-- Navigation-->
    <div class="containerr" id="nave" >
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                
                <a class="navbar-brand m-2"  href="./"><img src="assets\img\logo.png" width="70px"  alt="..."></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    
                        <form class="d-flex ">

                            <input id="busqueda" name="busqueda" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" name="enviar" id="enviar" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                        
                        <a  class="nav-link text-info" category="all">ㅤㅤ</a>
                        <a href="./pantalones.php" class="nav-link text-info" category="all">Pantalones</a>
                        <a href="./polos.php" class="nav-link text-info" category="all">Polos</a>
                        <a href="./camisas.php" class="nav-link text-info" category="all">Camisas</a>
                        <a href="./casacas.php" class="nav-link text-info" category="all">Casacas</a>
                        <a href="./calzado.php" class="nav-link text-info" category="all">Calzado</a>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Header-->
    
</body>

</html>