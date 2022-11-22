<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{route('olympus.index')}}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="mb-0 text-primary text-uppercase"><i class="fa fa-cut me-3"></i>Olympus</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('olympus.index')}}" class="nav-item nav-link">Inicio</a>
                <a href="{{route('olympus.conocenos')}}" class="nav-item nav-link">Conócenos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Listas</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('olympus.listas.productos')}}" class="dropdown-item">Productos</a>
                        <a href="{{route('olympus.listas.servicios')}}" class="dropdown-item">Servicios</a>
                        <a href="{{route('olympus.listas.cortes')}}" class="dropdown-item">Cortes</a>
                        <a href="{{route('olympus.listas.barberos')}}" class="dropdown-item">Barberos</a>
                        <a href="{{route('olympus.listas.precios')}}" class="dropdown-item">Precios</a>
                        <a href="{{route('olympus.listas.horario')}}" class="dropdown-item">Horario</a>
                        <a href="{{route('olympus.listas.testimonios')}}" class="dropdown-item">Testimonios</a>
                    </div>
                </div>
            </div>
            <a href="{{route('olympus.agendar-cita')}}" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">¡Haz una cita!<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Comunícate con Nosotros</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>Blvd. Gral. Marcelino García Barragán 1421, Olímpica, 44430 Guadalajara, Jal.</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+52 33 1143 5434</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>olympus@contacto.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Enlaces Rápidos</h4>
                    <a class="btn btn-link" href="{{route('olympus.index')}}">Inicio</a>
                    <a class="btn btn-link" href="{{route('olympus.listas.servicios')}}">Servicios</a>
                    <a class="btn btn-link" href="{{route('olympus.listas.productos')}}">Productos</a>
                    <a class="btn btn-link" href="{{route('olympus.listas.cortes')}}">Cortes</a>
                    <a class="btn btn-link" href="{{route('olympus.listas.barberos')}}">Barberos</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" target="_blank" href="https://twitter.com/SoftwareOlympus"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" target="_blank" href="https://www.facebook.com/profile.php?id=100087911804036"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" target="_blank" href="https://www.youtube.com/@olympussoftware"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" target="_blank" href="https://www.instagram.com/olympus.webdreamers/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{route('olympus.index')}}">Olympus</a>, todos los derechos reservados.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>