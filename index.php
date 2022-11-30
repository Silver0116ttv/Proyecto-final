<!DOCTYPE html>
    <html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Nombre de la clinica</title>
    </head>
    <body>
        <header>
            <nav>
                <?php
                    include("header.html");
                ?>
            </nav>
        </header>
        <!--Carrousel Section-->
        <section>
            
            <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner" >
                    
                    <div class="carousel-item active">
                        
                        <img src="imagenes/carrousel-images/img1.jpg" alt="carouselImage1" title="carouselImage1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/carrousel-images/img-carrousel.jpg" alt="carouselImage2" title="carouselImage2" class="d-block w-100">
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="imagenes/dppfondo.png" alt="carouselImage3" title="carouselImage3" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/diagnostico.png" alt="carouselImage4" title="carouselImage4" class="d-block w-100">
                    </div> -->
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
            
        </section>
        <h1 class="text-center">
            Clinica Alma Temblador
        </h1>
        
        <!--Features section-->
        <section id="features" class="section-padding">
            <h2 class="text-center pb-5">¿Por qué elegir consultorio dental Alma Temblador?</h2>
            <div class="row">
                <div class="feature-box col-lg-3 text-center">
                    <span class="bi bi-check2 fa-4x feature-icons"></span>
                    <h3>Consultorios Agradables</h3>
                    <p>Contamos con espacios acondicionados de tal manera que tu visita sea una experiencia agradable</p>
                </div>
                
                <div class="feature-box col-lg-3 text-center">
                    <span class="bi bi-person-check-fill fa-4x feature-icons"></span>
                    <h3>Equipo Amigable</h3>
                    <p>El personal adecuado para cualquier tratamiento</p>
                </div>
                
                <div class="feature-box col-lg-3 text-center">
                    <span class="bi bi-shield-fill-check fa-4x feature-icons"></span>
                    <h3>Instrumentos de calidad</h3>
                    <p>
                        Para asegurarnos de tu salud, contamos con la mejor gama de 
                        instrumentos y calidad en farmacos
                    </p>  
                </div>
                <div class="feature-box col-lg-3 text-center fawesome">
                    <span class="fa-solid fa-tooth fa-4x feature-icons "></span>
                    <h3>Odontologia Avanzada</h3>
                    <p>
                        Creamos soluciones gracia al uso de tecnicas avanzados minimamente
                        invasivos
                    </p>  
                </div>
                <button type="button" class="btn btn-outline-info btn-reserve"><a href="reservar.php">Reserva una cita</a></button>
            </div>
        </section>

        <!--Tratamientos-->
        <section class="section-padding">
            <h2 class="text-center">Nuestros Servicios</h2>
            <div class="container-fluid text-center p-3">
            
                <div class="row tratamientos-row">
                    <div class="col-lg-4 col-md-6 col-sm-12 card-tratamiento p-3 ">
                        <a href="diagnostico.php">
                            <div class="card text-bg-dark h-100 border-0">
                                <img class="imagen-selecprod card-img rounded" src="imagenes/tratamientos-images/Diagnostico.jpg" alt="...">
                                <div class="card-img-overlay">
                                    <h3 class="tratamiento-name ">Diagnostico y Prevención</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 card-tratamiento p-3 ">
                        <a href="implantes.php">
                            <div class="card text-bg-dark h-100 border-0">
                                <img class="imagen-selecprod card-img rounded" src="imagenes/tratamientos-images/i3.jpg" alt="...">
                                <div class="card-img-overlay">
                                    <h3 class="tratamiento-name ">Implantes</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 card-tratamiento p-3 ">
                        <a href="caries.php">
                            <div class="card text-bg-dark h-100 border-0">
                                <img class="imagen-selecprod card-img rounded" src="imagenes/tratamientos-images/caries.jpg" alt="...">
                                <div class="card-img-overlay">
                                    <h3 class="tratamiento-name ">Caries</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row tratamientos-row">
                    <div class="col-lg-4 col-md-6 col-sm-12 card-tratamiento p-3">
                        <a href="caries.php">
                            <div class="card text-bg-dark h-100 border-0">
                                <img class="imagen-selecprod card-img rounded" src="imagenes/tratamientos-images/profilaxis.jpg" alt="...">
                                <div class="card-img-overlay">
                                    <h3 class="tratamiento-name ">Profilaxis</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 card-tratamiento p-3">
                        <a href="caries.php">
                            <div class="card text-bg-dark h-100 border-0">
                                <img class="imagen-selecprod card-img rounded" src="imagenes/tratamientos-images/protesis-dentales.jpg" alt="...">
                                <div class="card-img-overlay">
                                    <h3 class="tratamiento-name ">Prótesis</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 card-tratamiento p-3">
                        <a href="caries.php">
                            <div class="card text-bg-dark h-100 border-0">
                                <img class="imagen-selecprod card-img rounded" src="imagenes/tratamientos-images/bruxismo.jpg" alt="...">
                                <div class="card-img-overlay">
                                    <h3 class="tratamiento-name ">Bruxismo</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--Iframe section-->
        <section id="location" class="section-padding text-center ">
            <h2>Donde nos ubicamos</h2>
            <select class="form-select my-3" aria-label="Default select example ">
                <option selected>Seleccione el consultorio</option>
                <option value="San-Vicente">San Vicente</option>
                <option  value="Sayulita">Sayulita</option>
            </select>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14928.917265196134!2d-105.27799865!3d20.70091065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1669714637154!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <footer class="section-padding">
            <?php
                include("footer.html");
            ?>
        </footer>
        <script src="js/iframe.js"></script>
        <script src="https://kit.fontawesome.com/9a5b41a4b1.js" crossorigin="anonymous"></script>
    </body>
</html>