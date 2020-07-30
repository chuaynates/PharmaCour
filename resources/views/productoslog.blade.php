<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=" ">
    <link rel="shortcut icon" href="/img/logod.ico">  
    <title>Nuestros Productos - DIAJO SAC</title>

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
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <img src="/img/logod.jpg" width="50px">
        <a class="navbar-brand js-scroll-trigger" href="{{url("/")}}">DIAJO SAC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url("/#about")}}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url("/#services")}}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url("/#contact")}}">Contáctenos</a>
                </li>
                <!--<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">Catálogo</a>
                </li>-->
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="#" >
                        Catálogo
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url("/marcas")}}">Marcas</a>
                        <a class="dropdown-item" href="{{url("/productos")}}">Productos</a>
                        <a class="dropdown-item" href="{{url("/normas")}}">Normativas sobre EEP</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<footer class="text-center">DIAJO S.A.C. {{date('Y')}}</footer>
<!-- Bootstrap core JavaScript -->
<script src="/vendors/jquery/jquery.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $('#form').submit(function () {
        var buscar=$('#busca').val();
        $(this).attr('action',"/productos/buscar/"+buscar);
    });
</script>
<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/js/creative.js"></script>

<script src="/js/responsive-paginate.js"></script>
<script>
    $(document).ready(function () {
        $(".pagination").rPage();
    });
</script>
</body>
</html>