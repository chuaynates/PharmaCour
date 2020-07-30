<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/logod.ico">  
    <title>Farmacias- PharmaCour</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/creative.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a href="#page-top"><img src="/images/logophar.jpg" width="50px" style="border-radius: 60px; margin-right:7px"></a>
            <a class="navbar-brand js-scroll-trigger" href="/"><span class="s1">PHARMA</span><span class="s2">COUR</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contáctenos</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a style="border: 2px solid #34495E  ;" class="nav-link dropdown-toggle rounded"
                            data-toggle="dropdown" id="navbardrop" href="#">
                            Catálogo
                        </a>
                        <div class="dropdown-menu lix">
                            <a class="dropdown-item" href="{{url("/marcas")}}">Farmacias</a>
                            <a class="dropdown-item" href="{{url("/productos")}}">Productos</a>
                            <a class="dropdown-item" href="{{url("/catalogos")}}">Catálogos</a>
                            <a class="dropdown-item" href="{{url("/normas")}}">Normativas sobre EEP</a>   
                        </div>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="droplog" href="#">Opciones</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/admin/logout">Cerrar Sesión Actual</a>
                            <a class="dropdown-item" href="/admin/lista">Continuar sesión</a>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{url("/admin/login")}}">Iniciar sesión</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
<header class="container-fluid text-white text-center marcas">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong class="marcastittle">Nuestras farmacias afiliadas</strong>
                    <label style="color: transparent">{{date_default_timezone_set("America/Lima")}}</label>
                </h1>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid text-center ">
    <div class="row">
        @foreach($marcas as $marca)
            <div class="col-md-6 col-lg-3 mb-3">

                    <div class="card bg-light mb-3 card-d h-80">
                        <a class="marca-title marquex" href="/productos/marcas/{{$marca->codigo}}">
                        <img class="card-img-top resize-card" style="width:250px;height:150px" src="img/marcas/{{$marca->imagen}}">
                        <div class="card-title titlecard"><strong>{{$marca->nombre}}</strong></div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
<footer class="text-center">PharmaCour {{date('Y')}}</footer>
<!-- Bootstrap core JavaScript -->
<script src="/vendors/jquery/jquery.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/js/creative.js"></script>
</body>
</html>