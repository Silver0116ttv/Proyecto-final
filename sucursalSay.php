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
        <title>Sucursal Sayulita</title>
    </head>
    <body>
    <header>
        <nav>
            <?php
                include("header.html");
            ?>
        </nav>
    </header>
    <section class="section-padding">
        
        <h1 class="text-center mb-5">Sucursal Sayulita</h1> 
        <div class="container-fluid main-container p-3">
            <p>Horario de trabajo:</p>
            <p>Ubicado en: </p>
            <p>Calle reforma #32, 63737, San Vicente, Bahía de Banderas, Nay.</p>
                    
            <iframe src="https://www.google.com/maps/embed?pb=!4v1669706371566!6m8!1m7!1sSuL-HnxhRa1PkHnYSRvnLA!2m2!1d20.86585590196234!2d-105.4329168507928!3f9.164014751465743!4f-9.065128977464013!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
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