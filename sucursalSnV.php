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
    <section class="section-padding">
                <div class="container-fluid">

                    <h1 class="text-center">Sucursal San Vicente</h1> <span>Horario de trabajo:</span>
                    <p>Ubicado en: </p>
                    <p>Calle reforma #32, 63737, San Vicente, Bahía de Banderas, Nay.</p>
                    
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!4v1669706730062!6m8!1m7!1smzWlGNS48T2L_Sz29g9xag!2m2!1d20.74905844438806!2d-105.2494948336726!3f112.18786047441509!4f-7.87266722842601!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                <div class="d-grid">
                    <button class="btn btn-outline-secondary" type="button"><a href="reservar.php">Agenda tu cita</a></button>
                </div>
                    
            </section>
        <footer class="section-padding">
            <?php
                include("footer.html");
            ?>
        </footer>
    </body>
</html>