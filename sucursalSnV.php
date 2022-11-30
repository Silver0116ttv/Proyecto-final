<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/sucursales.css">
        <title>Sucursal San Vicente</title>
    </head>
    <body>
    <header>
        <nav>
            <?php
                include("header.html");
            ?>
        </nav>
    </header>

    <!-- <section>
            <div id="sucursalCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#sucursalCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#sucursalCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#sucursalCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <img src="imagenes/sucursales-images/img1.jpg" alt="carouselImage1" title="carouselImage1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/sucursales-images/img2.jpg" alt="carouselImage2" title="carouselImage2" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/sucursales-images/img3.jpg" alt="carouselImage3" title="carouselImage3" class="d-block w-100">
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </section> -->
    <div id="banner-area" class="banner-area " 
            style="background-image:url(imagenes/fondo-p.jpg)"
            style="
            height: 450px;
            position: relative;
            min-height: 300px;
            color: #fff;
            background-position: 50% 50%;
            background-size: cover;">
            <div class="banner-text ">
                <div class="container ">
                <div class="row">
                    <div class="col-lg-12 mt-5">
                    <div class="banner-heading mt-5" style="text-align: center;">
                        <h1 class="banner-title">Sucursal San Vicente</h1>
                        <nav aria-label="breadcrumb" 
                            style="padding: 0;
                            background: none;
                            font-weight: 700;
                            text-transform: uppercase;
                            font-size: 12px;">
                            <ol class="breadcrumb justify-content-center mt-5">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sucursales</li>
                            <li class="breadcrumb-item active" aria-current="page">San Vicente</li>
                            </ol>
                        </nav>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div> 
    <section class="section-padding">

        
        <div class="container-fluid main-container p-3">
            <p>Horario de trabajo:</p>
            <p>Ubicado en: </p>
            <p>Calle reforma #32, 63737, San Vicente, Bahía de Banderas, Nay.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1669706730062!6m8!1m7!1smzWlGNS48T2L_Sz29g9xag!2m2!1d20.74905844438806!2d-105.2494948336726!3f112.18786047441509!4f-7.87266722842601!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                <div class="d-grid">
                <button type="button" class="btn btn-outline-info btn-reserve"><a href="reservar.php">Reserva una cita</a></button>
                </div>
        </div>      
    </section>
    <section class="section-padding">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12 p-3  ">
                <div class="card text-bg-dark h-100 border-0">
                    <img class="imagen-selecprod card-img rounded" src="imagenes/sucursales-images/img1.jpg" alt="...">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-3 ">
                <div class="card text-bg-dark h-100 border-0">
                    <img class="imagen-selecprod card-img rounded" src="imagenes/sucursales-images/img2.jpg" alt="...">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 p-3 ">
                <div class="card text-bg-dark h-100 border-0">
                    <img class="imagen-selecprod card-img rounded" src="imagenes/sucursales-images/img3.jpg" alt="...">
                </div>
            </div>
        </div>
    </section>
        <footer class="section-padding">
            <?php
                include("footer.html");
            ?>
        </footer>
    </body>
</html>