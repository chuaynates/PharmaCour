<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$producto->nombre}} - PharmaCour</title>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TimelineMax.min.js"> </script>
    <!-- Custom styles for this template -->
    <link href="/css/creative.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/detalle.css">

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a href="#page-top"><img src="/images/logophar.jpg" width="50px" style="border-radius: 60px; margin-right:7px"></a>
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><span class="s1">PHARMA</span><span class="s2">COUR</span></a>
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
    <div class="left"></div>
    <section>
        <div>
            <img src="/images/{{$producto->imagen}}" class="imgdet"  style="width:280px;" id="main-img" alt="RA">
            <div id="zoom">
                <img id="zoom-img" />
            </div>
            <script>
                var zoom = document.querySelector("#zoom");
                var zoomImg = document.querySelector("#zoom-img");
                var mainImg = document.querySelector("#main-img");
                var enterTL = new TimelineMax({ paused: true });
                var timer = TweenLite.delayedCall(1, () => enterTL.reverse()).pause();

                var cx, cy, ratio;

                window.addEventListener("load", init);

                function init() {

                    zoomImg.src = mainImg.src;
                    ratio = mainImg.naturalWidth / mainImg.width;
                    resize();

                    TweenLite.set([zoom, zoomImg], { xPercent: -50, yPercent: -50 });
                    TweenLite.set(zoom, { autoAlpha: 0, scale: 0 });

                    enterTL
                        .to(mainImg, 0.5, { filter: "grayscale(1)", "-webkit-filter": "grayscale(1)" }, 0)
                        .to(zoom, 0.5, { autoAlpha: 1, scale: 1}, 0)

                    window.addEventListener("resize", resize);
                    mainImg.addEventListener("mouseleave", leaveAction);
                    mainImg.addEventListener("mousemove", moveAction);
                }

                function leaveAction() {
                    enterTL.reverse();
                }

                function moveAction(e) {
                    enterTL.play();
                    timer.restart(true);
                    TweenLite.set(zoom, { x: e.x, y: e.y });
                    TweenLite.set(zoomImg, { x: (cx - e.x) * ratio, y: (cy - e.y) * ratio });
                }

                function resize() {
                    var rect = mainImg.getBoundingClientRect();
                    cx = rect.left + rect.width / 2;
                    cy = rect.top + rect.height / 2;
                }

            </script>
        </div>
        <div class="descrip">
            <div style="text-align: center;">
                <h4><strong>{{$producto->nombre}}</strong></h4>
            </div>
            <HR>
            
            <p><strong>TIPO :</strong> {{$producto->tipo->nombre}}</p>
            <p><strong>FARMACIA:</strong>{{$producto->marca->nombre}} </p>
            <p><strong>DESCRIPCIÓN:</strong>{{$producto->descripcion}}</p>
            <p><strong>COMPRAR :</strong></p>
            <a href="/fichas/{{$producto->ficha_tecnica}}">
                <div class="fab"><img
                        src="https://cdn.pixabay.com/photo/2020/04/19/16/55/symbol-5064499_960_720.png"
                        style="height:40px;" class="ftc"></div>
            </a>
        </div>


    </section>
    <!-- <span style="position:fixed;right:130px;bottom:100px;z-index:1000;color:rgb(255, 255, 255); font-size: 16px;">COTIZAR</span> -->
    <a href="https://api.whatsapp.com/send?phone=34123456789&text=Me%20gustaría%20saber%20el%20precio%20del%20producto:%20{{$producto->nombre}}%20de%20la%20marca%20{{$producto->marca->nombre}}"
        style="position:fixed;right: 40px;bottom:22px;width: 56px;z-index:1000;"><img
            src="https://i.pinimg.com/originals/79/dc/31/79dc31280371b8ffbe56ec656418e122.png"
            style="width:80px; height: auto;" title="Cotizar por WhatsApp"></a>

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