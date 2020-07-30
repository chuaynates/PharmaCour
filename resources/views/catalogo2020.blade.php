<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/logod.ico">
    <title>Catálogos - PharmaCour</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/css/creative.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">

</head>

<body class="catfon">
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
                            <a class="dropdown-item" href="{{url("/normas")}}">Normativas </a>   
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
    <header class=" text-center catalogo normascata">
        <h2 style="text-shadow:2px 2px 2px rgb(158, 158, 158);color:white;" >CATÁLAGOS</h2>
    </header>
    <!-- <div class="container xc">
        <div class="row" >
            <div class="col-lg-3 col-md-6 col-sm-1 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/respiratorio.JPG" style="width: 201px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m1" >
                    <h2>PROTECCION RESPIRATORIA</h2>
                    <p>Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Protección Respiratoria.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/auditiva.JPG" style="width: 200px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m2">
                    <h2>PROTECCION AUDITIVA</h2>
                    <p>Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Protección Auditiva.pdf  " class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/visual.JPG" style="width: 198.9px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m3">
                    <h2>PROTECCION VISUAL</h2>
                    <p> Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Protección Visual.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/anticaidas.JPG" style="width: 200px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m4">
                    <h2>PROTECCION ANTICAIDAS</h2>
                    <p>Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Protección Anticaidas.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center  center ">
                <a href=""><img src="CATÁLOGOS/cabeza.JPG" style="width: 198.9px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m5">
                    <h2>PROTECCION PARA LA CABEZA</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Protección Para la  Cabeza.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/manos.JPG" style="width: 198.9px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m6">
                    <h2>PROTECCION PARA MANOS</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Protección para Manos.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/corporal.JPG" style="width: 200px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m7">
                    <h2>PROTECCION CORPORAL</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Protección Corporal.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/soldadura.JPG" style="width: 200px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m8">
                    <h2>PROTECCION PARA SOLUDADURA</h2>
                    <p>Catálogo Diajo SAC 2020 </p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Protección para Soldadura.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/frio.JPG" style="width: 198.9px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m9">
                    <h2>PROTECCION CONTRA EL FRÍO</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Protección contra el frío.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/limpieza.JPG" style="width: 198.9px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m10">
                    <h2>LIMPIEZA INDUSTRIAL</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Limpieza Industrial.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/lockout.JPG" style="width: 200px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m11">
                    <h2>BLOQUEO - LOCK OUT</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Lock Out.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/calzado.JPG" style="width: 200px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m12">
                    <h2>CALZADO DE SEGURIDAD</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Calzado de seguridad.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/Absorbentes.JPG" style="width: 200px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m13">
                    <h2>ABOSORBENTES</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Absorbentes.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/fajas.JPG" style="width: 200px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m14">
                    <h2>FAJAS</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Fajas.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/vial.JPG" style="width: 198.9px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m15">
                    <h2>SEGURIDAD VIAL</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Seguridad Vial.pdf" class="link">VER</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cat contenedor-img ejemplo-1  text-center center ">
                <a href=""><img src="CATÁLOGOS/otros.JPG" style="width: 200px;box-shadow: 8px 8px 8px black;" /></a>
                <div class="mascara m16">
                    <h2>OTROS PRODUCTOS</h2>
                    <p>Catálogo Diajo SAC 2020</p>
                    <a href="Diajo SAC - Catálogos 2020/DIAJO SAC-Otros Productos.pdf" class="link">VER</a>
                </div>
            </div>
        </div> -->
        </div>
        </section>
        <a href="/Diajo SAC - Catálogos 2020/DIAJO SAC - Catálogo Completo 2020.pdf" class="bolita"><img src="https://images.emojiterra.com/google/android-10/512px/26ab.png"  class="holi" style="width:80px; height: auto;" title="Envianos un mensaje por WhatsApp"></a>
        <a href="/Diajo SAC - Catálogos 2020/DIAJO SAC - Catálogo Completo 2020.pdf" class="bolita1">DESCARGAR</a>
        <a href="/Diajo SAC - Catálogos 2020/DIAJO SAC - Catálogo Completo 2020.pdf" class="bolita2">CATÁLOGO</a>
     
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