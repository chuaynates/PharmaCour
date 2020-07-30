<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/logod.ico">  
    <title>PHARMACOUR</title>

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

<body id="page-top">

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

    <header class="masthead text-center d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        
                        <hr style="border-color:transparent;">
                    </h1>
                </div>
                <div class="col-lg-8 mx-auto">
                    <!-- <p class="text-info mb-5"><strong style=" color:rgb(173, 172, 172); font-size: 25px;text-shadow:2px 2px 2px black">Siempre cerca de ti</strong></p> -->
                    <!--<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>-->
                    <nav class="nav123">
    <div class="cont">
        <div class="lole">
            <br><br><br><br>
            
            <h3 style=" font-size: 30px;font-family:Verdana;"><strong>Siempre cerca para cuidarte </strong></h3>
        </div>
        <input type="search" title="Presione Esc para supender la búsqueda" placeholder="¿Qué buscas?"><br>
        <button class="btn btn-danger primary-button-filled">  Buscar</button>
    </div>
    
    <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLtnhzXBIpVtDb7ay-BpT8bvSFB8qL1IO_EX3zd4I6BxxGxgiGn919RDdtMV5Uv-LDF4e5k55P5nCHwDUa-RmvpA&usqp=CAU&ec=45682161" style="position: relative;
    top: -16px;
    right: -706px;width: 15% ;border-radius:40%;" >
     <img src="https://image.flaticon.com/icons/png/512/234/234735.png" style="position: relative;
     top: -400px;
     right: -650px;width: 15% ;border-radius:40%;" >
    <img src="https://image.flaticon.com/icons/png/512/172/172011.png" style="position: relative;
    top: -16px;
    left: -550px;width: 15% ;border-radius:40%" >
    <img src="https://image.winudf.com/v2/image/Y29tLmp1c3Rjb2RlLnJpY29yZGFmYXJtYWNvX2ljb25fMTUwNzM3NjgwNF8wMTA/icon.png?w=170&fakeurl=1" style="position: relative;
    top: -400px;
    left: -706px;width: 15% ;border-radius:40%" > -->
    
</nav>
                <!-- </div>
                <div class="col-lg-10 mx-auto">
                    <a class="btn btn-warning js-scroll-trigger consu rainbow-button" href="#consulta">Consultar</a>
                    <a class="btn btn-success verp js-scroll-trigger consu2 rainbow-button" href="#productos">Ver Productos</a>
                </div> -->
            </div>
            <!-- <div class="secnos">
                <img src="/img/servicios/distribucion.png"style="width: 40px; font-size: 10px;" /><strong class="sti">Distribucion de equipos</strong>
                <img src="/img/servicios/capacitacion.png"style="width: 40px; font-size: 10px;" /><strong class="sti">Realización de capacitaciones</strong>
                <img src="/img/servicios/noise.png"style="width: 40px; font-size: 10px;" /><strong class="sti">Medición de ruido</strong>
                <img src="/img/servicios/laws.png"style="width: 40px; font-size: 10px;" /><strong class="sti">Normas legales</strong>
            </div>  -->
            
             <!-- <div class="sliderq">
        <div class="slide-track">
        <div class="slide">
    		<img src="https://mir-s3-cdn-cf.behance.net/projects/404/7190a862599133.Y3JvcCwxMzg0LDEwODMsMjcwLDA.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://1.bp.blogspot.com/-P_p5VMI05cs/VcJKDdYn00I/AAAAAAAAoiw/PChTHq7svlU/s1600/mifarma.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="data:image/png;base64,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" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://mir-s3-cdn-cf.behance.net/projects/404/92f1a935747087.59526a77eb618.jpg" height="100" width="250" alt="" />
		</div>
            <div class="slide">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVMAAACVCAMAAADSU+lbAAAA9lBMVEX///8AXar///0AW6kAVaaDqdD///yCps8AWqoAXKsAXakAVKcYYKEAVqMAUKQAUqXj7fYATqQATqAAUaEAUacATKIAWasAVqoAVaMATJ50mcAYYZ4ATaXs9PcAWKE1cKlDebSWr9Ht8/hPgLT0+fmKq8sAUpyFpMfV4u2pwdzA0uFYhbRhjbaxxtkARpmiudIAQprL3Ocwc7W90eWuxNwbY6o1cafZ5uota6lCebWRsM1vlcDI2epqlsdcjcFOhL4la7F0mrufvNKqxdMAPJUGXZZXiLUARpGSrsROe6fL1Nvj6ehqkrcAWJtNgbCsv88AOZikt9cV/ZwMAAAgAElEQVR4nO19C2OiRvc3AiVcFARE0QgawUBQYogSjOZi0r7pPk+T7X+//5d5z1wwYDTJttnudh9Pu0ZmYObMb85tLowMs6c97WlPe9rTnva0pz3taU972tOe9rSnH5l8ZzCoh2FydTWdTuPZycnky9Hwl18ODjrX19c3Nze3t7eXQOdAK0zna0Lpt7dwz/VyeXDwy9HR5GQWT6dXSRjWB4OB/72b9s+Qj/C7msYnX345uL657V+er1JZ5LWGpmmqpikNIE3heUWBD0qi2BQ5jhNF9MmRb/AdUtF/QLVmEx7gFXheUTUoAApRFK5SWc3PL28B8IOjLyfx9AoB/XPg7AOKUTw5Wt70z9OUV3VdVVUNYSbmMFW+BUGpBH7oFkVTCfFyuup7152jL7NpUv8XIQwoXk1nkyOQxP4qbeldC4HI802QNwnom0D4LpJQLzYRyICybumKPL+8WQZHJ1iIfzyE/XoyPVl0bi7nsmpRFKEF3xHBdxCSZCzGADCPAO4AvuH3RtcfhNOTX24uUxGUuqHYfFOUue8pi3+dZLGJ8DW6mpxe3hxMZlf1AftPYunUr2ZHS28l89g4it/IKn4fwuILDq8hpucA7reWXCecTg5ueqmodrF2V0TxeyPwzQjUTWy2lIaODK938OXDsQUdnyxvVzxUgOzkzySW7yCQXF5RdU0+vwlOrup/F1oA8wiDqWqt5v8aliUCuQVoeU3X0v5yMa0P/gKaTjgb3py3VPVns5d/m7DUqvLq9uAkeS+yTnhy0Jcb3S5YTPl7N+AHJUmUOI5v6LZ8G5yEzquqfjW5WSm6BqL5vbn+lxAIrabaqXcUv7QGfn0aeKmiN/Zwfi1Jksi1FL0rz5eTtTGoz4LbFMbD4r8yWv9hCIssd76c1AHTgzNlD+fHkCyJfPcAMP2F/96s/FTE7zH9cNpj+vH0LkzBsSmaaZqaxvNNqbI3va/TOzAVTTt9GM6mURTNFst5zdzHWq/TG5jKEmfMF6HwHMey9Zln8tJ+fLWb3sBUbHsJywjRcATyaZipdxf7DJN12q1/ksl/Gb2CqVyRlXnEMMnYVLWWBEa1wjVb2mkfYHVG+r9UUuUKdgjSNzRgr2EqqoHARH3dlirNVpNvYqpUXDWdsExsb45h6WIx9/J6I2Mnvfe+v/EUx7c0QzWQq/3Kp99fy05MZfBNM8a51ltofWk+Gj3g/y856GLR6GVMlvKVgqzKXCoDwQdlQZQJpRWcCh9vMkQf+DoNyKt5u7moSTUvmMTxbDhONR7JK0cefrNOiVYjvwPV3ZhyZsQkhxq+EMe5i5qRhJo5Yeqr0mN25iDyhyTVjJ0Bvo5NM3Lgu78w3+BFmeAnBtWvCtbUCFczs9+8k7Ori4yu27F+NDJgQK7NMNeJ8cazfMfHN3rNt3t8J6aSETORKRIHD5j+dwL0JzsjwMjN7pDJngqeSnR9gQViCKb6kEFXApu5nJkJzxmvkBnjZ/ynr9J+i5Qev9VjUqXd8VEFCFFGgD+xKcrtBFXJhu03nlYWDG5Ov/k2RzsxVYdMYuQreIDp8LTR0OfMLGeday+YpP3cetFlSMS1RIXZHouvBCcVK24dC8fdW5gaEZkSd78K0zaZEL7X3rqxC11Wmt5kE0s2Qvw1ektOzXsi3fN3LGruwpS7YB27KYoS3jvCA6aKJDUvQPdlZK5BUJtWzAyfhUNcUY5HIni3FAktJPg9XgYJxhnjtzC1EixD9bckrkSS6eN6h8qrt8mS+SvudCqn6FNgFqpN+jtW36gGtBZj+h67tANTyQyZsZumLlBatW3AFOQAYWrykIp9jlt1hOdua/Yppn0IuUxitgR2ZCMJvr+/P7mfnb/RxZJF2he+1b4SgX7gpzqvY1pRAqJHrB/fBQnRIsaRXQc//eUtKTexDrHO3/BRypKJ7pFV9h3f9yN3jOVABExPFz4ilJUETLzWGfEz1ai5BJ2KpAH+3SF45CavqqppIhcLYSFiCnvR/EEcLqLENmlfolZIQFESCRJQkiQZbzJD/2RZPCSYLnkc6zxvgilHPtzKR4ojMGFq2qYxocyOKKZDjZSOY1eZVoIKkCifZkIGkTVSPaTKO53VDkyhiN7xAvxFEoZhncnuMKbcBfNnzKC05A+Wiartup/mbeBpaMCmnBqQb8yCIC62gJSW2OJ5+AJGntN01VR53GROUc1jQxWxFmPpiVRJhC4w7WdMJduAa1PnOdyQJioPr0qIIn9J5M9rtHA1FEhRwZdrVCEuRCwJf5hIW8Q2XaM/qPrPtp6zVbP25EJd6B5ZJAWigKvJmxl+PkT3SS0FUWvXWHI7pmIP/E/TGvvC3W+WBf5YoHKKHPmhZZ1d+MyntqgFTCd/lL8jXPou76FWglREbewkuV4H0bI2wn87opYGURhGgWtDwLZaJPV6OFnxkuQSTGeqMYrCLBq6JDySJMVdRmG9nkWLngGBCDfG5Xh2zax6nkfkdHRHSk+xheHOSZ3U3MgcwY4VPhN+rSnWNn84J0+PwXFo1SDKBr5fvwpcpSLVPFJgTTRk79ol60yRCVJqj4dAQRDsMGZbMZUQWIChMneYI6vCWQsGR0KAKZvYYkUb+WzHgusqVEKlSRkSTB079YmUhjRLIWLrtDMC+mmA/QRYtrFuT6hlY+8MMSXpR+4VSfKXWM45Y+GvHfYUAi2bFJT8NgrRyJmgckElL0B2VVZJCLHQCAtSrUOkOaShoGQegya0j22PPPW5JbpxXgdAvzClxp/koj2fwqP/j7AwBRuhjOiU0i6nux1TIwbvA2pWq/7BDA2I7O4Jpj0mq4lyCwKlB9xcI3NciqlKTVT2e0igyVIayvFHOOxMzDr+O/iTEYi3YJlRxAjEEbPCstEj6HyqCwIKHyGno0gy9xRCI7GBRp9OVaxlJKbsoOfiJan3eIpLZ6fIhItz/N13ke0DEyvrU4aCvG4j5pt/oD3SqmXAFpTvQ73AX2yq9zgiZf7jIzN8SDCdaVxzjgNxgVlqO2bntmIqA1Y2fqC28hkP7EY7Q7rf7KH4rPnkMEsVFwfYr6gCQKhCpId2L0RROdoktLs6dqgQMHlEI4Cyk/Abvmc21WJwJj6RKsGvcqKLYgiWye7vHQHFQIlJ5JQllmJCtMA3H0jBDjIYJungRRuMsGnbYCTqW0VL5pekprkWkDJH1RGxEjcWLkOAaqDWwSERlHtTPMa1C0xnZ6iwFVPOdDKqJFqHCQ0wYR7q4ab3CZLNBRNbBC9tweQDC41oG/Nfh3Dpe/mOXhLaMRENU1khHj+GNNYSwscH8iDL9EcMiR2j/1QvMuSlWWZignNBSP7X1AzqT0Z2nYg5lqvhAj/jmNSDM57IcdgyC/7xoo4oyxJaNwr0ys0PcE/4qUpi/44qWl8Iu2eEbQGPDrMLhkbBekSi24Va2eX4t2NaczK1graKN5umj6Ijyb0EbsTzKnxaIfNZQRvJOTRiy7k0EsJ1fEdqF7JjWhodHv1apUbx01lLydsYGgpvZVSGOjTNrDVrVWpAzB4pbQ4VqgucPzum6OFx5t0MY1o3dOLZWTCFCkFqkfciu3giRbMbwyBZI0U6NXF6dRVFV5CvEDbCMyokmLL/0Cj4dEEEYGbtDlR3yqkhpasUaMyycw4tW6NwUETxC2AwqeIXa7CcEi5l2tHMyalD9JbGfGh4hDMmBB3GPxZlqU17YMzLFY1a4hH1cg829BYdU/lV0obwN0M1LOJQQpf6cDa6G3lphNsYGqJH8AstGHIgWfLdCe1F357TL/ONYRB4AXTPwJTUbtc6O9Ntu72gmCZUTrPF2Os/0uhiTPo6MnaHpzvsqRU6x428nyITAnWxieZB8RZensoT43DdZ3vKU4u1sB5otn9IupLKYUAGBexVG9ql08KR3DTuyfc+0WIGhwsEaJa5wNgyzhUisoYzmJN2CQenCs+THmMjtUJMAsPW+BH+8uUpDxcW6i5MDTIHUDckSa0uJxDCORl5KjojVltITKXVNKn2Pfq47sh+bYi6w+9Phbk+ZePZLI4DZPSl2g3YTbHfQ2MXZQTJs9hxOAv8PhVtl+5tG/IggyRWiizSQSSn80DkKNIhkcqpj2yJSYOYORlSO23ccVhowevWi/MeWD4HHknKsFFv13GpsSqB0uCMhy7uMN89yTv3qVWlX9eY4tesxCa1S1ftZjWmk1asQDF1yJxAFWmoOcRY+n+Q0G9ifTWmlcaQ6YA9eVI1U0Xvb1XaQ+SjJC/CZqSG1qVPE7/mYiHG3ZBSC9mxxQvCFcve4HKPSc4DFe+ZCvyQ6SAWD8NMKrNVMqQOkRwjS40x/I+zDhNycogYkpkoyRjg++41qTYn9U5kHz1xb86mhDq8VKPcedRS1S77mGxisabWpUNYTqKYWOuYjJSFOgoaZfWehCSPtG83fd07MIVANDqbMmlLRKNxiTNG2DpCzD9BE7lobUoyQ8fsMAGdCpaodqFohYwDgUEHqTHnUn9MzeUEQUGGeoJTk/KhNEgTDvXZxEL8qkTI/DlpYfRlsqYFjfJxdM/hHoNhsMZBR5E5GCSv4AXE53fN5DYNmocNtCAlNXNuqwTTmPQMm80NldrRCXVwCVIrWYuJnD5FpO7MeGXleMd4H9irTlkXvXQHPM0nAp2Xgo78XDMhVYO6nd8zIZ/7gl6gktCswECQdicEHHBFLnrE9uNBrlQjYpG1gTOTyOzgd/LXQZOykkVsZ3ZMxoTjbqOhad2zbrd7dkYFnozRXSLPAY8CI/zd9wlMxfZoExIRZzZeH2tTc1M/rpMe6ZAn51BKjZjlIQ1TIjSG4Mx8aveSquBQ2639u+alOsx9zCaYrkCm/HxeSkDbqEm6D0oY5/PjIg3YsdfRhjRmZ3tNCMAIvk801kEzBBwdv+LpdRPjK9TbJOxknlDURmOp+JQIUtASJVG5WwB9uqACj+N3qUoeQqXKT6QG9CFclCbkm31qPmJT51UzoJHwPR6HQI8QN5mdirJILUhAZwLwYpFE+p2p23pMrLr/yvrXDkxFIxNCn5KTLR6p7jPxY+Lk6X8M2IvcrvBjyibyOs2aQ4fEiVkhMQ6EUNEzFNyKYIqm1yXi3YTsd+rlJqc8f4p1DMYBbdLa5LQlaj2yOONN1hqR6weMclGUZ1DNRJ6wXZaj3Ggz9fvgnoZ9rFCtEsuxJGMmx7SbpzNSxJIKCTZVnEGEN7TFqkDl19i5vXTXPL/4mfnjuOYSMq0xM7RlmbuAWFfNU0//hGHOuhwyLSVgTy6twy2QH5vYdb99lY9z0LQRyZ3qErUUELMQXwaO9ZM3Toi4RQaYGzxuiXvzjoMG/EJGBzgM7s982hY7jdaYrt+wL5yIOPcLjo6IMoywsV0VmBHRfSbyvJiMlZkRnQlYYG0wBlRERHNCheeR/1pMK8YnJgLLRha1m2MmOLN0o4pVgax0twMme17l4PNpKTJ6onNQYB2rdFzinIbrdYBcdpkZYCrNCZZT4svI/AkdHlTB8dDAnRVIW/y+lce2qE00FmWQXZfEWv6yAgnjCiQpI2FjNYoJVDpOYDw5T0OzI2Q+dlnwhKJJPAREOVyNRr1Ousv378S0CdoSF9ZNHTxyzteiK5zeYZzCSE+ZkGkhupjU9BisqAITn+EVVCb7vU5SehKeDkIix6IAjbskT8Yr3CL2Uwitwsg6PR4GyHbMkJYKSEydEQ9xArpgq8iigUagmxmyLpjPPDP92kZzZNnu43kxkErElsBkI7BLI1L3pXrAouKhIOeOJRYmINNSeMlSquH6wfHBsC9gCDfxrnXB3ftQODthIpfkiA8OpQlJkI0hNLkwmlBJsMGGtCI9YqmueQTthMR7LDbugAQGEE8gjsh0yOIC6zu7tE/IDMhJlUd9xqnjxKfe1jmpKhKKKdGknIu6m1+QFTvKp4ejWQFsxov2yLXaHRSE52ZYJxrbPFdpEWEU5qJ9jScQ/VmaEj0Z0VHdA7bac+L77pG3d+v4Am7ZsS79yj6Uph2xzmcDrxdVapSQtZQ59TBiMgg8nn0fN+9hykWXS8n1xcV8hbNWHAqzLy8vERLSCkfcl2nhzpT+lTkzfQg6n1MIAXGfybxR/dwZLoZ33hMoDgj2JY7YsQZxuKTLS1Kt9ORg++htfXdGgoK8ZRAsH3quSqzhisT+MlRizh/GXmqK8nnvArFDWOxjDefSPr5xhYaR3Jwwf7lr0fK1fX2iOkTTSRbRo/WKmau6C5+ZbmwekkS0m+rZF3KSSFM4Dj6hkehapC/9ovMJcGIFzyLQAzpwPpqqaWmtZlEIpGZL0xoNihQZV4qVdUnrC+opk52r2ZzYUhS+1cxZ55qtJuUDVd+k/OADHNbsPNdJx4xNcvXVPgotMFS0OehZ9Fk3lCbiWgKWNGs+8RlnaUlf/x5VcbGxPK9DZt3zRU9J2jrrI0mFp+Ut3yVzgNdGP7+yk7P4JOFpV84mk8XNYS9vLdAb+0+bxhg8uDPr9NMaz7vufIxe/hkM3R9y/yk109lXbbr4Bmy8tU+at70ZnhvyBwMHRRRg3jnzh3xtXzbISPPhO7/y8Y79/E2zdtmZRGilP5oFnmzYP+iGfrrFIHtrP9k35+NtTGXwHjZvmEAGDN7Eyg8ppGgAGQrImj5+7zeTfp73oySeBJuDV1aK/hn6iTBVjuLZbBaPvntjfh5MK5LWbaha4/u35SfC9IehPaYfT3tMP572mH487TH9eNpj+vG0x/TjaY/pxxPFVJbF9WnNHCeJ+dnN3E5C9xTzN+/Fk7Zb89anHu8sektpEvlXSluX/HzW9LbiZPpk6XmJMEGfl/DX5/xSQei7LIo544X7ZDIhLhXul5o5poqcHlar1cPq4SH5W6TD8mU5r/i1dF9e0MunX6QcbhaVl7a+83BLbYXPw9JTrzD6XN5hmYuNgl5yhFtDHyqycbhREGTKFNPaqyfO7ekryLFzTOvsmzfv6V1UtxWCqb3H9KOoXttj+tG0x/TjaY/px9Ma072P+jDaY/rx9DqmAnmHbWOPId5HJwgv0xGx+Su5W54hL94VcwSasplOSmDpe5TlZLL/aztXL5hh8TuqG3skyfZB8l0QNutl6BuCL8tiy9zsEsJXMWXzvXwbvAo02d9aqp/E8bS+8Qgr+M6aCnwWUjdLY+tRHCcvj8JnhQxnbNYAbG5i6mfTOA5fFIx4oYkCfH9ZhbClbegpf400Gw3/fPEYpVd9lFBFO6JrrtxbFPcYM0mb7JSufp745Q5lmazjti2rbXjJRj+Oj2vkKfuikDpr4zTIOV4Wy2HZWc+0LFOvDktNBjZm/WOoQXcDv4Ah2mtuZuU7hclcN6y2VT0qyyLLeHbtkL45zPbamyfPCKzj2q7/IvXCHK93trPx/y2ZF6pF6FVMfZfjDcPSLU298AvYRbqkGrpuqS29V5INlomO9W7V81a6cjopFwjtUA1VV9VTr5C60ERV1w2jbZwFhXIEYWSpWs87N5XuuFSO8NDWzZ53YfLd4r5nlrnX83d4c+57bZ3ve73jhtov94vQE7kued+J9VfW1SZ6wh1wNd20GP68EdA7nVhwfrtn4mib9Svq/stMp9Y4GtTr9at+Tb8vVHyvpyFKj1ecvihWy0TtRj9BZ0wk85aRMEW858p4gF9SLpy4zjIHjWq9vpkMGR1DHSIbUe/VukmRp0BVA5ThXHJ64R1blvmkpQV9BU3tdWsTvL0r0FrjYhFoR/v63AnHNUrijdLqx/JKWW6em+SnjU80Lf6/eezee2eft9rUVzGtm90I22bHbT0U0hdaFdsCNqs1i0In+DLvCciQC6zv8v2iSWef8JZttuSLWOZBu6Tmf5Mtei5EdHY2KWQMarUOcTLJ2VmhP1mmo8wLJpZlAuM4QfoNTAQqfSGI5jluc2E2JrQm+8XsUaAvF2q6YbChsfqf+ftAj/25KPeXk9fldJvuJwaREUGYt7xCl3SUHva+AqhDEWtm2MAnQGCXeKTZWYEr/7hRFOm85Z4y2sIVmBDjimxl92ezZzli2SvLIArH+vEsK/bOWOkXOyYzzCN6nBRguNZafG/drg16/Bybs0R1N3wU6xwbYWia0UZyaBqFpMf0Kdzh+l/FNLLoW2B+tfVYeH6skPdnhLqrfyrc76f2TX6bkBlaXMC0fqzHzAtie8ryZSoIwjE9KAJFWwU02GlbW4stW/RR0DsPRakJzGf5E/olkQAcn3ywUvjNvkitMiUCa6rfMmyqdcrpTGTkb9NDzcvTpGdvoJ7Tq7HUiWqTPpxo1jM+LNNvPOK/wlI5HhQakhjq2ocKTk0rCib0MrWLRd33q/nJNGXKVM7GpxVumoWBWXEXGU0vZLBMtWwBe62L57xla14sJDLmPnMBtgIsQ6z3mBKxdSyiS7O6Ib+xqq415s/f+kx8drE9Qn0V04WWxhAKxuNuo/8MHbDf6i+Gw2EntWpJsWETs72uFRROCQp5kWEHX44QzQqYOjX+ZkioKMWsMDzlNHMeTF/Yuk9nnAIZ8UYGy9Sgd55Ldp6U4Dlv2aoW+Yz1C/TGOzqmhb3XPaZMjw0P89vYiAfuTTt3owLzayIIi+3x+euY3ikVA2JN+O+h0GcCW2vyltW1Gs1x2Y4Hmvusb3VTWxTboUkNC8g4Kyp73ZT4LpDV/a0QSiEY4nnb5DXDGIWllqEMS2kpqjFKSsMa31QnhbvCwiXaN50WY74jHR284vFVYB/8UbnRoY3EVHBcLSgjEqjVglw9f76gVzAFs8+nl/1e/2ERloyac9zylkA93i7bnEclXWMvhG3110I7Jqr7MEY0ui+kJmYTFwVUNk6glcnQq5otux2XMBUYATJSlW+1ZyWj0FYLx0MxV6b+6/NVX/GKchpYyHZFZgNi1GW31JkCO1axr2O91qocjCz5OfMueg1T9tkpl5pVNxuE/bv16TCEipiycddMiu1oyOtx3XNqpJub0SFTuMtPxpqY+pvJKGOpiE9FLQnbJUd9ZRhrTMF3tu6KMr1EZ98J7Gc7ZZgRPaUnLz40lUWIqMObYQmSkdLfweoGvYKpIPRanW2zJGFbvyLv1tf0knQFWn6aA7JhSloce23v5Vi1d2GKSxGYEW9uiZwBkRveTAo4bfROaDzHB0yikzMZc/qMRiroDDF9wlxY5XBkXOMUXW8bhi2bpeCP9bStYd9Leg1Tv9oYbrEZ7NQ0yHkFDqf+WsyZmWb+EjfE/Fqn+PADDAFeVj8x3S3rtWw4Gv2X3j3RCqizmTciZ1Gw7H2jpAcztTRq8d1WfsoGC/pUjkF7Ojk+CVnUlVUajYXtJsfJsuu6ssgVJybQQHAzutpBr+m+76qTbc9AiEWmnRy5fEPdyF8xh3Y0ylrd18rjQ0LBi4gFkRBZVm5Fl0pR95N2N6+x0yiN7z/p5d554PPVdSGzjZLNZFKiXmxiNBbVdkHDBfaBP88luqO0S72Ubhm0bKVXYn6wm+ps28zLQqVvWztVrRhdglPTzBifXiYs2taw9OyK39bLj1oeHRajVjBqfF/AE0dTUyviUW83e/h8OSaytWVxPiHQDku9k3T5Bx/zElb5eSnLd+lZpsKIlyW7ABxUbK1PVcA+rBCd1dQT5l302jgqNKxoW7gQKCmp199QB9ap8o3RSRQteqq+LMUKO3rZ49POctnplP0+eMdGqw/lnNyYyrwojeyIb/XvIWNk85BRyHlslGJ3QQgMZXU0jeKlraVZ+dgfG58AiPqu3ayUpH1ET11jyHikX0SDRyEKOrvzesf4KafXdD86O8u2YXrTpe5G6Hc3HM8ffUNvqxCG2otSM4Q/jLNtdmSlaiho7VrWb6XsbG5qhqpabfPBKVplYdAzFL1rgRMZ/cEWczzL2+A10HQDhddwZ9krZGf5YYzg9XV3HbnjeZnp+kp4tM4KMpycalAaCqZ/u9/SkgK9FvOHw6GzRfeFyZC2n50NyyNLiMKjTn/ee5g4pXk+wHQ4DF8WxX5C4zHyLyxl+LOby/l8hCLjUvmMPxufz+cPw4QpT4ZPhrNy+SybDb35vB8kLya9hvkICG5ZfGKfUYyHi8IQPCzxnBFGj+BfidWX9NFrfOyLLx9V4N+o4L23fhDP+3XTj6c9ph9Pe0w/nvZ7ez6e9nslP5YQiGtMawPmxYaNPX01IQgHVPd58fo+2W8//+tEpZF1kvtrDmN60G3xpur2xosow4fn7UX2K4iMwv0sWox7Njrd9AxhGg5vVoreUHjFrM29g1/Dvci+h3LBc5I4+Fy1Db2h663V9dFVvnBVnw77qak2eJvXtCcksqFPDmp7sbduT3jHIBpDh/HwYf5kgnTqXX51s1jDuSa/Pj3yUqWhNlpKw2gf98bDONuy8W1PvhPGi1HPbatao9vVm6ubo+gFnAVywtnBrazoYAwU02ib1c+dSRQ6uaH937S0LP1hFsEJoy+dz+mx1QVV7zY40PVp+E6xG4Sz4c05p4LMNjRVtY6r3t0iTurPy3jfiPsflPwsiRePXnrc1rWG2rV4+Xx5NK3/BSUGa7DoeOcyQMsrvNYwj9PeTYB+G4CILfNyd/LPQblGsk49iSfBqFd1kdVUG0jRbw9OrrYtPX4VOWBory9TFdsDXtE0s5b2vM5RTG3CJkP/Nil+yS0YzCg+6nzupTXTQB6oq/Pp5U0AYH5oUOTXk9nRsp/Kmm42uhpAqxqmW517y8UJgOvQ04nZ7bvkf1havxuA9sLXw2i26IBYHhuWDlIJHkipIMGc1l/zQX+boOLpZHhzmVZ4UAZNUZSGabbb7mFvtBxOYvSjIS/3En1/kNn1R5l8JwOZnARL7+LQNQ1Dxyqualx6fnMwmYaDfzTwcepX8eTg5nLFqToEFWAXFLDfVtusgfA+dIL7P6MkLL9wwArCtrdMviWtD95+rtN3nDCZ3k+CzoM3r7qG1bVMEyxbt9tVm/L57fXwBLD851jcRv4gnJ4cdUaXqdRAm/Y1JLw8SN7izq4AAAHbSURBVLHRNsyam877D4/BcDL7NUqyuuPsFtr3Q71leWv3w369HiZRPJsMg+WoP09dG709ASDquooW7hpien57c3AEJuyvePJvTGCREoD3YHl7noL0dlUVDK/CN1o8uDbA2AAL7KbVec/zxnfBcDGZxdMoSUIENUj032kQ/tVV9KtmWTKdAn6LYdC59vq9+SFgCDptqF3AEMaPKvqtKB1g7N8sf/kym4b1f1a9/w75AzC88ezo4Ma7XKWipuM2aQ10oHOrxSutRqOhIp0DoM3j41pNTlN0oPfFhed5oxHa7tfpLANCRzmRywPIQzeMbry+d3HRm6dpKsu1mntsqoaFAATgkC7rWKMbaktKV+eXtzfXB0cAY/IvgnE3+Q4gfAXicxQsAYfz+QpA4EB60Y/DqIBuQ2loPK+1yC+1YoKQGCy0BslwH48/FfIXX6J8nvx6awuUoKFim94SK9A1FD9Q59l0egWSOPhbOvBvId8fDAZg6MKr6XQ2O5kc/dK5vr658W77l+fn56vVKpWR7KGj7PEh6jyfwwqBhqI0JakC2K3Ozy/7fe8atPgEwEPoDX4GGfxWhH+pZlCk+vp1KoTc/4To7WlPe9rTnva0pz3taU972tOe9rSnH4T+Pxkf2QAAlPYkAAAAAElFTkSuQmCC" height="100" width="250" alt="" />
            </div>

        </div>
    </div> -->
    </header>



    <section class="aea" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white proposito">Nuestro propósito</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4 text-section" style="text-shadow: 1px black">Ser  empresa que provea un servicio de delivery de calidad. Buscamos hacer la diferencia ofreciendo confiabilidad, rapidez y sanidad en todas las entregas.</p>
                    <br>
                    <a class="btn btn-danger" href="/nosotros">Más acerca de nosotros</a>
                    <!--<a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>-->
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="bg-colort">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading prod">Nuestros Servicios</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <img src="https://image.flaticon.com/icons/png/512/2311/2311503.png" style="width: 40% ">
                        <h4 class="mb-3 nivelacion">CONFIANZA</h4>
                        <!--<p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                       <img src="https://cdn1.iconfinder.com/data/icons/ecommerce-14/512/fast-delivery-truck-packages-transport-transportation-time-schedule-clock-512.png"  style="width: 40%">
                        <h4 class="mb-3 nivelacion">RAPIDEZ</h4>
                        <!--<p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <img src="https://image.flaticon.com/icons/png/512/1061/1061944.png" style="width: 40%">
                        <h4 class="mb-3 nivelacion">SEGURIDAD</h4>
                        <!--<p class="text-muted mb-0">We update dependencies to keep things fresh.</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                    <img src="https://image.flaticon.com/icons/png/512/26/26218.png" style="width: 40%">
                        <h4 class="mb-3 nivelacion">HIGIENE</h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section id="productos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading prod">Nuestros Productos</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                       <a href="/productos/tipos/Analgesicos"><img src="https://static.vecteezy.com/system/resources/previews/000/505/931/non_2x/vector-medicines-icon-design.jpg" class="imgtp" style="width: 40%"></a>
                        <h4 class="mb-3 nivelacion">Análgesicos</h4>
                        <!--<p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/Antiacidos"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLtnhzXBIpVtDb7ay-BpT8bvSFB8qL1IO_EX3zd4I6BxxGxgiGn919RDdtMV5Uv-LDF4e5k55P5nCHwDUa-RmvpA&usqp=CAU&ec=45682161" style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Antiácidos</h4>
                        <!--<p class="text-muted mb-0">We update dependencies to keep things fresh.</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/Antidepresivos"><img src="https://images.clipartlogo.com/files/istock/previews/9069/90698177-pills-vitamin-icon-of-medication-and-medicaments-flat-vector.jpg" style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Antidepresivos</h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/seguridad vial"><img src="https://gmartos.es/wp-content/uploads/2019/07/logo.png" style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Antidiarréicos</h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/protección auditiva"><img src="https://www.consorcio7.com.mx/wp-content/uploads/2015/08/medicamentos-especialidad-300x300.png" class="imgtp"style="width: 40% "></a>
                        <h4 class="mb-3 nivelacion">Antiespasmolítico</h4>
                        <!--<p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/protección visual"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAqFBMVEX///89iZ06hZv7/P0vd5M1fpc2gJglaYsDPXMUVH8sc5EyhJkobo4aW4Pq8vQhZYkSUX4OTHsFQHTz+PkeYYff5+0JRXfi7fDL2OFKkaS609vT4ea+zdqfwMyMtcHD2eCPssOKpb2nx9BtoLKdsMMANm6zx9V7rbunu8t4lrB7oLZil6sAYoVsjahRjqQ3ZYxXh6QAMGxFcphAdZZggJ0AIWVZdJdMaI74hMGeAAAYnElEQVR4nNVdC3eyuhKtBkV8oAgIiii+H1Sk2tvv//+zm5mAglUhENueOeuus9a5FdlOMq/M7Ly9vVoIyNvUnrreRdzpdKqy/+O/LERXVXXk7v2g+Y7SZUL//W68G53OuxTuPde0VP0/CFS3HNv1AJrcToicEorWMIyOLO23tmOqv/3O+YVY9tjzJYTUbLefIkShKDtyuF/bjv7b755DdGfN0DWp3CCU5UcIQTqKHM629t9WpT5194GE4JpJhLIM21CWYmlGoFIIEaVxPszWfxak4/mBRHFJV4Dt9vt7M/D3rjs2U+KYtrvd+2G70zHSQhfs537821juiO4iPFCQFMF7b0sL11ZVXdfveQXqKnRqbW13LxlKJ4Wx0w29P6ZIZ1GTrmsQ4Em+a+b2AcR0fblzVWcHJPwziiRkFLST8CRpMbf4n6O6u3PXYDABoaIZ278QERBrHiTUJwW+Nypu8+3Z4cw0iNIzPPOXHQhxXIqvdoG3d0u7NMfbnTtKBFHpGTP7NzE6HuivhgibtYU7FfIyxF4euhFGBTCOf2utmqi/GkMYeKMCe++RWOPlWVEQoaJox5kt7tH5RXX9GgpdpG1qOAWvJWKuw54SSe88M8U+PscLjBagvBrqzx+pL1hHRLUPPaUTgTxvf3apqot6LdKg5L8uXiZ2qMV6VMKfXKqTWoyv5k9f+1VOGGuxpx1+SI3E8eP1+XJ8IPYhxqgp9k9gVN14gdb8+c/8qNvPWI2DWf5QsKAQGoFGCANPoHt4Lvry3OuxlXoavzYA0OdBjSGse85Lv+lG7NkRbE6vpxmzV/6wllet1euA0C8RfBYSffxJ1dijEHufrzOqUx/wUYTS5BeyN2vZ6aFop+2LvmJejQBWnV8JFIl90hhEZfeS50/qbIVKi98L9nd9xKhpofhFpC5QgdTEjIQ/m0PGBtPi4Cja0DnRFqwvftSEfhfzU9EYRLE51dSPduDkx3zgI1FnHQ3WqdYRGYuPhkyBgfsHitL69qgBQk1ZCnubCGAtmP6BwhCV8UlD6c0EQXSrDODwl7fgVcywzzCK8RoxwM2vb8GrqDsGcSACIgVYRYB/qgit7xqitAgAAeHfAkgDkO1AjBbnAJD+z/0bNiYhZIsGdTDYlXo1akWrIH8PIIW4VJgWZyVebjr8qxoEIUumRWVZ+PWcYQsUWP+bAK8Qe+uCD7AWuERrkz8K8GJu+sdiB3F6BHDzByK1R0JmK1Bi/1ioJD5BgMLdhD72dodPKrvZunypHv3iYDA4Fvisi0a0vhAayRA3PBlY/oQsTzmeSp9HqF99ilBrfHJ/clRBgL5IgNbeUDrRgRKWBunP3zgVNRPxQ09UhRTkjPNzjo9+Yiiwpm153Y6RAMiiLm2wOpWrZDtHRKjx/VLqBjVYEVexIPZZwbagzik87GZUDp/HyGUPdqXW6vgICPsnntSHuC3BoYy6ZU0W3cNyHMNR7e3upA3AFn6VUSN1i3ShDvoHDps4HSJAcWbU3DN8u5t+J91ensBS9I/rEhDVHZjTgZY/trEWqMKhMCtj7lCD4fjOT+bM+gOEWOL51ok9I28xnEwQYE2YlVH32Lu2v78k9LFC36+hlGkQslGJja+ci85h0eikxDemhGyxO+/xpraPDfp6vTLmZrlCiPnWKcFNWB8KszJj6D9Unq1C87Mx6DdOZb7kiOu0n+tX2rCUUNwmbIIGn28z+9jv91e8Tjsp+gAgNk459DLFNdoSdrxLPEPuGvuMvxpTiA2tzDodA8LBxzLzD/UFAhTnKBy5KxthZn6y1ChE/uDyKvqhges088XnGI+KK40Sn6pQzjbjNILuN3Kb+3ti4lZsHDL+zPKrFGJFXPV+ZFAVejket6ZK7JfZiTQdphD7WobXcSuVSrUlLmUiUlfuSnlUQ06N/uqrzE5UqUWmy/Tz6TqdDlsU4XBe4nvS4r3LctfLZbWWK2prSqVS1FxRhNqzM3B90gIdLoS5QkuiAMOciuk3GjlM4RMhO0DYeKZEGnGDCsUlhR6MVbg5//i06q+eL7EsQbfa7z/+mZgKW5syX5KSKajQz2u16DJdlbKmb28zqkMaHD30BE4FVSjMU+h7qsF27oja/qAbsVyDvoVKXD1SIlUhRdgSFnG/rakK5axoJiH/6zcGJUcQZn1U4oOd71AF0n+ERTMWqpBjRXw0Go2SCFUFlXj/iJ9sWhRfK69dyBTiwryTx/EJjRrTsu1OdDNTJd5PFFVwhdWhuMpFILflJk9wJAKhruE6vbsUwJBWW8IOKXRPbrffuVYEXaVl92GkxNXXPRjo7FvC4jWr2W7LAVd8K8DS0KUIDqP/ccfWzNEXTkSF3GRBVZgjp0jI+KO0P3zDwxpQ4p0UA8KZSkWYL3QA4J7r96KvtuIq694XE+Oaj2/L1KlgOCPKzpCAApT4XheSi135NaTvVndLIhtUobAq/vq93W7nSQuvotLI+2E0wiNjtKa3520qLNKWsMZDFWad8+YUkcyoCgse5qbF/GqAEm929BwXqbBzCg+GufliB/XYKJtaREKY10832kA8U6kMRS1SB1To873tcvA07+GRsUKVuDqm9ojjV0XamT0FKPGl6+Y/qsJ/Yrwx2ppGOtefQ95UERWSjlCFfJ/BpKBMISopS7Q1SZeos0UqKLfX9+1mm9NTYEX4KMoM2P9gmf5LWDpngZZUVD+qRBFypIVUdGpI+42SJ/pXIZ+4TBPPG2FAIyj1tXygjeDb0lAsLXcykxYwW42E09ddgYuUuMA4wOkp4Ozp1oGVEfsIy/Tqeyy2DcUsUiegAAOuHUXWg8FgJXIOhnyhv7jED85QXIlN90CFfI5VPfUH/YHQWeZdv0H/ufiLESZOYty9IzWlNqfNWjaoCou3UN6T9YAi/Ig7T6MyqRh3vwAV8nkKFZsxxI6j6z2K8HIMYi0gKB0KefK0TVWY75ziIgdoVBBNZHJa0VQlrr6ybSjGV9QkqRnwqdD8gG4f0aMOs1WDJmORR5yK24ZumyLkzFCg864nnIvGBoQfbHMTV9g2tECFPt+OWg+0QV/UeM9VCOqQecQoKBXxWA+YTjh7BE8DLX8zE4ccASGzX6owbzgFFS4400LoMhWVUyTlAEps4E+n4iIVcOyrL0CFfLGfQ1U4+PcK4pItnIJ84P5mhkZAUDoCnpMF10fITHuRCqmJvpiauSBDY4EKJT51jI+aVqgLPVvIx8XUTASF3S5QKfF5VXU30LT+iwgEjnQjrk4qlN+xOaE0QseXqtUaZ1pIzcwgLPvND+QLEEIjGWERTdm4l7hSvVKtbnjoeMwv2IWv4kfaoUcEhMyUlkXoVGvQTVWvTnITLuBMj7Dq0zdBY/o/itASErORjVSrss7bwM0ZY5onracdXza5aaMxXUNHMCAsW86fAufQAvrD6/W6P8+1VGcwdP46giv1fw3WgsTS37KbIZBqUuCobosxSyxyrAmnRxF+vo6lDE56Gh878saqUCWTlznQ0tGcgpibGrKD5GCXCCnAUu3rGaJq6BAFIQRQLKcg06HEWNwyGEjHWq832L1wflrV0CESdnBYst1yA6DiAiIBpiUKsS0961LVwcycXknBpn+iQyRvi/Jnvw6y1lwfYU0CZDJ99x/zVi5hPq/MjHKmCERINlRn1ZRtcTa1ZrPdbL/vH3hH89RTegIO7Z/IBeGmNMJRlSK8naUdLeD0ov0u3+UEIzNF6SliTgsfCcFSzQd5G5ZtMlEXoMJvOFTXR55rI9x+9wj2iSLMO8NTUMgSgxryxo63SyCcg3u4l1OYHvQmdo3u4bY2pe9hhFTYUdN9uUFYfMtbSMJ3Vx3E9N67FCLFmDaaY4MCfFVOcfl2UQjnNISRHtVAiCl1kDf/mBx/tA5UhY3L2lWn3t4PUfy9K8yBiELoVIBi8MkfrGVkr1aUq2sY9xQlpl1xvODCuR8R0IeukA0qCKE+gTX61Orr3tlQAJMRzYma1MwoJx2Yst1a+8JPzzDirLASjstfeZFGWDg9dCDSzppesM8RydonRADE0xSDLlq6S2vNmMKd3YIhx5zswKpbVpFibKkOPHXVrPzAPiFPnqYNtJlNTANJgS23ikzgzbYU+HvPc13X82a78Gx0cFVrYUkezwvCYRmPP4JMImuJq7tehFAbNI7LXS+0aYC+wAC9KfneyLEuT9Cd8XZ3VpDIWylHuHBBWCamIQHku1nvMe4g8SjyVwz6jf7BpOFAldEQb0bfSWVVe3tmnASlLg/Qd1FMUyYudYFqMKtargIvd4wQGpTVN2uDLK/Sxrn/vcTcnoBzVjNKnAzrX+Ujb7UKZiYj8SLrnpJAuKJG1PExSw6ekNQTa0aXKU2RZ4UNzjXyLp4fbqgGq1kq1E9KAiFkpNYQWV6zeG9sA/kRCyfJF4TFc/wpspxlGbxZL4Gw37PerAoy3GUfBekhGKdG0bPFS45fGCFZ1Kv1IOtEx+x1Egg1800fAsNdvpPwHXwq55D9N7nUaQrX2kaVeg5agoOSQKhtCdnkBwgLAGigilnUS62taL3UQhVmOvte54oQ2EfmQOGXm8qdAMRBscL/pV5asOZN5shzlvFXeti5IhwcbWRNqXOwhKo7CBO+eN8O5FLzLnhuYfqtaj3zTG7L0opIhzOib6Dyz3PebH4i3wXn24FgSPNR+OxJB6KsWpbmzbBzRTg42Wzaf8P1XeNjwY6p69lTofNDB1Zb5kS0ZyR1OGPENwGng5uBlynQuHg5Pyx0BoyrrZ5lnuwwiZDqYd6qVHM4wpvv+upzkOtc5XIGXOgcH+hB6lkrW2fUSTHCAw1Hq5Uqf+POFpTIfcxIwJSuDvpboV4MpAcZZuYU7QRCOIQB11uE8Pxfn5pT3p2Y6MVg/TRcbctztIiZaaGRRHgkMEldLULss2xkMCXck0Q/DfZEVXl6olRqETO5M8haTiHc0YibfqzITAdMvq54zzigJ2rFeqJYX1uF48MTGInOWm1WaHQTCAdj3A7FZlQPjT73MlVWl7427t5E6imyM0riGd0kwgZ+T8GZjgJcBMnexCgyzW8B0CJm/bna7iYRasc3dVEtWtQj0HnPtxHHif7SN7PC1Zw4QhVmvem+m0Z4oLu3eEcEjJfy5Ym7ZI8wX5+3DnFJJneGY8hphHsM8a95qOVeZDKZeCmZMdldbwbYrXjZeaDP+zI3zUZm8toAmMWsZqaFgZxC2BvY4A2r8UGxOmm18EYevFcwqnjD+Qb+eQ/LAXRhXgYm1jAEzYOQpr8U4aXTY8TRYUpDy0o28cK6e4NQQYSxfYL5B+wuikCyun5c1L8WHy/DWQ6YGp7ADectroNPPDMzozxWSQ3kNEJFUaFcEp/EToeVXAgvo0sqL8KbmRmOuScV6EEyt6zXvkFoKMA3eTk9mLdyIoz5zXgR3s49MY+Ya1Qd1J2pQieU0wg7hkwQIWsHwyGdnAjHhRCOb2bXgBY53/whwUQkS9le+0aHRsdlOozcIYcOiyGEmdvk/CE1HzlnSGGRZk7X2JKcRmgYocpCms3P7EM2Q5psFGCzXTlGLK1hdqKFtC1JhJ2uAZpI21IGMI3wqvTYlg4iW2HyIWQDlqlej3nOZWq2siPYceze4hc2DGQAAYSxP9QnlTTCpAovCPtaXIHafnD5Q0i3GmnKgWjUOdPpQwibMTJi+TcIje4ZIyA1FdM4k1g2GMfsL7KL5HC4kmDPuGIalQ06p0J1guczmeE0GJrW85MKsm5/Q8im9SAP/Zm4lHEq/EuHzowXI6s1KgdCK7hBaHRDBktdtIq2RJA+T25xlxcjJ7dJDoReu5lG2JWjVwNz9iP5IeM2adximVRyxKbZCM1r60iMMIz3XvEcf9fgYR+6z08Tcww9f4FshMA2kEIoX0fzsU5TZIKMQJ0mN/uQeoBFeodFE2kVvrcYpiXLljrtGx125Wv7moq1tpzvmZQtV63NQZ6o1fcNz1KojCPdLH8YNG8QynLiN5tWitVLjzz10sdcXxFf2/MHZcQ0bhyexAjlbpIBxELewpxvepUlV81bXSHV1z015OHcex6XWsENQpoHpx5HfdLLzy2YCj/vwYBKUTWDdO9pbkE86QbhLTEkO3viNKdLrrMnxpu4uutaCBZ6M1L9J/mh7tZuEMqydPNjFDg/tPnODyPaxPu2AvlLMzwWLtP79nBUl74hvP0pVVBihadoynkGzPhL+w8arCMO2udKhGV6V4lTmLFIIZTvsAo6lWqOFpXEG7Nz/Nw/CeOgfWh4GY/wc+5E50GtbcQAphA275gHF3sx8sYnZIl5Yu41aj7nEY7pvJ8r0QV79M2czqPaZwIhNTP3TBJdp/n7aQCgtsrf1L97rsKYz/t5SSraSqn/BvOVtVsdtu/DINgTldl1izKDi+P6+c/VxqjCZ+FPrMSnj4SfIQWROH6t9k2H7eaDn571tdVGme9Nwj7rUcn6w8sHDo0sTnbcZZVbDd2KC/ZoeHlDFe5c/4bwCfOlE2D5IuMGemKfoTeR587fdS+TVz+6G6G6eLqGWE1+OMc3VEcLdiN5GmG7/eTGtqi/1J8+xkjMpQH9pT2O/lIzuhvhuc6hrgiXdT394XR2H9TGofg20WW6twifmkuH9QjXvEc9tOY2xBOrzjI/QLJk91tkxXfRHSXPPZaF1cCW724qrUvNLIUwo6XPctkn6pv59z8k9jJkR3InnvvTbXZHSWZ8R1A/rYyCGqZ6NMRj17PdIGy2358vcyo6DRDwIzXfmyfVrdre7tzBZn3twHOeFt0zo2VvW3afVVbJSJ9XqOuuxKXrG4Q5xnqIPpHQxTSbOG/hrmHgYn8Iz90OXiGonR4PoN6TdQPvCsqTKLPbObOyfegvZX+YRig120HOi/CsRTNlm6DqHQ3NKFp3zdmHlv++J6hn5Luza+rjneQ3CAOOJF6dBJHWk7NdHcMIua/SU/DOrpy9ttG9azlOTKeboMqsIgNYC/JQDSRFH238AM65ZZlNY3bl8+fdwdrnMsN71/o5izmEXbKaiw9JHU02Cz8A8Rdpm5FbnLW33/u+H8Llll6hC2bHA747HtXo/sOc76s6UyqJ4aUiolpUio5ymacB1/2Hlzssxd6U+zpRDziO0+NgESHM71eF3SPwUiFLNjPGxVivsysCueoNvyZrBe+S5Wzts/yW6PuAXyV2dB8w79xJtBXFXY30KjGjO535BxbmLFwRd6Hsa0Q9snu5i7AQR3erc/Ig/rDouz42bRRiyobZNHD8oq+PFyn6boUtDVxdfVdR/zxEMutDMa44O6jDIGYOVvyWkCWbgS9x78d0iHfI18XdQC5SYoA8scw3GQ1ZDphRF/sVIUuFASzHBA6DoqDFv7cXYw0OytISIkSa4f41iOgmAGF5Ov5RwMqFGW0aPyxqBFATcd/AiE2X1zInuX5QrFCYBkEuEP9MGO6cBwhQEXVjRASxXs0+TfkJIcA+jADF3acw9WuoxboYfqNyoi6PGrafKiKZQZ1FBPH37Y26U5AvY3Dirjg+FYtBrNdyH1C/SOwvxsikCbmiLSlqDJFrml64bBUE2BsUzCaeiltlB4US54VqAkUP+5EG77WtlZdREKmx9oQ654VCkLEGAHZeRSBNsylmcKRNufJvITFn0QrtnV7HuGhNqjV2DBOsf3ip6utQ6wFE6uZfaez0kV9jbQm1TX6CEgFi7zoR3dSR4+C7iJD4CJ6q0fuxQNWcIfUXzF6GOQ8nS4g+r0anabXgZ8obZPmlRAB5WjNKfKGFdHmI0X992Z+sWdsC0rfl5uwvK6PrqWjw4mjcDiN4dIW+lDr6RtTLbpSawehl3lEfh1qMT+G8fLe0TKlvlC4Y1Rf8ukS1z5oSr1D+k/3Sos8XDKIEGN0HDIjFH+9sz70LvvPyV3Iay/WxJQa7YoDFUtyjzfHspCgxT9h5+Up2+qfiAMaotbRZ872REEXq42VoKB3WOPSr+EDMedCULs2ztcXDXry8QmzvgF1fDGDvtPwxD/HojdS4wxtBSkEZTerjPbDsAndEhG/7ncD1F4Q4i3YCZFOS/EmBspzphecujg3jMDB0tq3JX8CHom6kJEZo4+LRpT72wgibEQM0uDoTf0JGiwD1R1dqTNH9Li28kaOquk6+K4P+J11XVXPs+W0lgQ6nv09hxg0nvyOWuwhqFBtDGKGU39tSsPdc1zav4jim7breLpC6KWwM3vlQoLHth4Q47t6Xmu0rwmY89/wOEm1X+d0w3nGClkkCXjfceXx9pT8uxBl7+wCwJRBe+kfT0k0h7Cjnw3L9x+FFojo2XbBNYJJPI2w/QtgxqGUa23/CNeQUoppUmX7w/i5HnPnfEXajewKkcL+2zcKNib8p1FRajksXbcC24Xuks3fYh9SkQHjgOiY1tv8h3d0TgjKdTm03IvMa2dORjv/1B77+/+wHhcYIsDcXAAAAAElFTkSuQmCC" style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Antiinflamatorios</h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/proteccion contra el frío"><img src="data:image/png;base64,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" style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Antipiréticos</h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/protección corporal"><img src="https://image.winudf.com/v2/image/Y29tLmp1c3Rjb2RlLnJpY29yZGFmYXJtYWNvX2ljb25fMTUwNzM3NjgwNF8wMTA/icon.png?w=170&fakeurl=1" style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Antitusivos</h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/protección respiratoria"><img src="https://lh3.googleusercontent.com/kPQtgi2QSiBRmFKr9QovyrixeGkC3lHAc5f0vb4pPbYz0d6fgJrHZus4LxeMCPXlnxA  " style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Antivirales</h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/protección para soldadura"><img src="https://image.flaticon.com/icons/png/512/234/234735.png" style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Laxantes<h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/protección anticaidas"><img src="https://image.flaticon.com/icons/png/512/172/172011.png" style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Mucolíticos</h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <a href="/productos/tipos/Lock Out (Bloqueo)"><img src="https://www.emcdda.europa.eu/sites/default/files/Icon2-7_Medicines.gif" style="width: 40%" class="imgtp"></a>
                        <h4 class="mb-3 nivelacion">Otros<h4>
                        <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="bg-elementary prop" id="about">
        <div class="container">
            <div class="col-lg-8">
                <h1 class="text-uppercase marc">
                    <strong> MARCAS</strong>
                </h1>
            </div>
                <div class="slider">
                    <div class="slide-track">
                    <div class="slide">
                        <a href="/productos/marcas/north-safety"><img src="/img/marcas/1.png" height="100" width="250"/></a>
                    </div>
                    <div class="slide">
                        <img src="/img/marcas/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="/img/marcas/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="/img/marcas/6.png" height="100" width="250" alt="" />
                    </div>
                        <div class="slide">
                            <img src="/img/marcas/5.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/img/marcas/13.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/img/marcas/4.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/img/marcas/10.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/img/marcas/8.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/img/marcas/port.jpeg" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/img/marcas/14.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/img/marcas/why.png" height="100" width="250" alt="" />
                        </div>
                    </div>
                </div></div>
                </div>
                </div>
    </section> -->

    <section class="bg-secondary" style="color: rgb(0, 0, 0)" id="contact">
        <div class="container">
            <h2 class="section-heading text-center contac">Nuestros principales aliados</h2>
            <hr class="light my-4">
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                <img class="card-img-top" src="https://upagu.edu.pe/es/wp-content/uploads/2017/06/Logo_de_InkaFarma.png" 
                 alt="Mi Imagen">
                   <div class="card-body">
                        <p><strong class="card-title">INKAFARMA</strong><br>
                            Ca. Real 972
                            <br>
                            Huancayo, Junín
                        <br>
                        Tel:(511) 4319-1233
                        <br>
                        
                    </p>
                </div>
            </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
            <img class="card-img-top" src="https://upagu.edu.pe/es/wp-content/uploads/2018/07/mifarma.jpg"  alt="Mi Imagen">
               <div class="card-body">
                    <p><strong class="card-title">MIFARMA</strong><br>
                        Jirón Cajamarca 262
                        <br>
                        Huancayo, Junín
                    <br>
                    Tel:(511) 1412-2569
                    <br>
                  
                </p>
            </div>
        </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
        <img class="card-img-top" src="https://3.bp.blogspot.com/-UVz13hr4IUs/ViCpdqMUF6I/AAAAAAAAAIA/8PWyAfHea68/s1600/c5f0e38871053b820459dc8fff6e2b3a.png" alt="Mi Imagen">
           <div class="card-body">
                <p><strong class="card-title">BOTICAS ARCANGEL</strong><br>
                    Av. Daniel Alcides Carrion 1551
                <br>
                Huancayo, Junín
                <br>
                Tel:(511) 449-2569
                
            </p>
        </div>
    </div>
    </div>
            </div>
        </div>
        </div>
    </section>
    <section id="consulta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto"> 
                    <h3 class="text-center consulta">Realiza tu consulta:</h3>
                    <br>
                    <div class="form-control">
                        <form id="emailer_form" action="enviar-correo" method="post">
                            <p><label for="nombre_usuario">Nombre:</label>
                                <input name="nombre_usuario" data-validation="required length alphanumeric"
                                    data-validation-allowing=" " data-validation-length="max30" id="nombre_usuario"
                                    type="text" class="form-control" placeholder="Ingrese su nombre completo">
                            </p>
                            <label for="apellido_usuario">Apellidos:</label>
                            <p><input name="apellido_usuario" data-validation="required length alphanumeric"
                                    data-validation-allowing=" " data-validation-length="max30" id="apellido_usuario"
                                    type="text" class="form-control" placeholder="Ingrese sus apellidos">
                            </p>
                            <label for="empresa_usuario">Empresa:</label>
                            <p><input name="empresa_usuario" data-validation="required lenght alphanumeric"
                                    data-validation-allowing=" " data-validation-length="max30" id="empresa_usuario"
                                    type="text" class="form-control" placeholder="Ingrese el nombre de su empresa"></p>
                            <label for="email_usuario">Email:</label>
                            <p><input name="email_usuario" data-validation="required email" id="email_usuario"
                                    type="email" class="form-control" placeholder="Ingrese su correo electrónico">
                            </p>
                            <label for="telefono_usuario">Teléfono</label>
                            <p><input name="telefono_usuario" id="telefono_usuario" data-validation="required number"
                                    data-validation-allowing="range[1;9999999999]" type="tel" class="form-control"
                                    placeholder="Ingrese su numero de telefono o celular">
                            </p>
                            <label for="consulta_usuario">Consulta:</label>
                            <p><textarea name="consulta_usuario" data-validation="required length"
                                    data-validation-length="min20 max100" id="consulta_usuario" type="text"
                                    class="form-control"></textarea>
                            </p>
                            <button id="submit_consulta" type="submit" class="btn btn-info" style="margin-left: 38%;"><i class="fa fa-send"></i>
                                Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--modal de mrd-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            {{--<div class="modal-header">
--}}{{--
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
--}}{{--
            </div>--}}
            <div class="modal-body">
                Gracias por su consulta
            </div>
            {{--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>--}}
        </div>
    </div>
</div>

<a href="https://api.whatsapp.com/send?phone=51987246440&text=Me%20gustaría%20realizar%20una%20consulta" style="position:fixed;right: 40px;bottom:22px;width: 56px;z-index:1000;"><img src="https://i.pinimg.com/originals/79/dc/31/79dc31280371b8ffbe56ec656418e122.png"  class="holi" style="width:80px; height: auto;" title="Envianos un mensaje por WhatsApp"></a>

<!-- Bootstrap core JavaScript -->
<script src="/vendors/jquery/jquery.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="/js/creative.js"></script>
<script src="/js/mapsDIAJO.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<div class="bg-dark container-fluid pt-4 pb-4">
<h3 class="text-center mt-4 text-white">Zonas que Abarcamos</h3>
<div id="googleMap" style="width:100%;height: 10px;"></div>
<div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62430.840504682856!2d-75.23765870950542!3d-12.048507115252658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e964104fb82f1%3A0xf8e45b61c55982fa!2sHuancayo!5e0!3m2!1ses-419!2spe!4v1596119986451!5m2!1ses-419!2spe"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="1700" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</div>



<footer class="text-center center" STYLE="font-size: 20PX;"><h3 style="color:rgb(216, 213, 213);;  text-shadow:3px 3px  3px rgb(83, 134, 104) ;">PHARMACOUR- {{date('Y')}}</h3><h6><a HREF="
            /nosotros" class="foti">NOSOTROS  </a>|<a href="/normas" class="foti"> NORMATIVAS </a>|<a href="#contact" class="foti"> CONTACTO</a></h6><hr class="center" style="border:2px blueviolet;">
            <a href="{{url("/productos")}}"><img src="data:image/png;base64,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" width="30px" style="margin-right: 0.6%;">
            <img src="data:image/png;base64,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" width="30px" style="margin-right: 0.6%;">
            <img src="data:image/png;base64,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" width="30px" style="margin-right: 0.6%;">
            <img src="data:image/png;base64,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" width="30px" style="margin-right: 0.6%;">
            <img src="data:image/png;base64,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" width="30px" style="margin-right: 0.6%;">
            <img src="data:image/png;base64,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" width="30px" style="margin-right: 0.6%;">
            <img src="data:image/png;base64,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" width="30px" style="margin-right: 0.6%;">
            <img src="data:image/png;base64,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" width="30px" style="margin-right: 0.6%;"></a>
        </footer>

<script>

    var myLanguage = {
        errorTitle: 'Form submission failed!',
        requiredEmail:'Ingrese una dirección de correo',
        requiredField:'Este es un campo requerido',
        requiredFields: 'Tienes que llenar todos los campos',
        badTime: 'You have not given a correct time',
        badEmail: 'No has proporcionado una dirección de correo válida',
        badTelephone: 'No has proporcionado un numero de telefono correcto',
        badSecurityAnswer: 'You have not given a correct answer to the security question',
        badDate: 'No has dado una fecha correcta',
        lengthBadStart: 'The input value must be between ',
        lengthBadEnd: ' carácteres',
        lengthTooLongStart: 'El valor del texto es mas grande que ',
        lengthTooShortStart: 'El valor del texto es mas pequeño que ',
        notConfirmed: 'No ha sido confirmado el valor del texto',
        badDomain: 'Mal dominio',
        badUrl: 'No es una dirección URL válida',
        badCustomVal: 'El texto es incorrecto',
        andSpaces: ' y espacios ',
        badInt: 'el texto ingresado no fue un numero correcto',
        badSecurityNumber: 'Your social security number was incorrect',
        badUKVatAnswer: 'Incorrect UK VAT Number',
        badStrength: 'The password isn\'t strong enough',
        badNumberOfSelectedOptionsStart: 'You have to choose at least ',
        badNumberOfSelectedOptionsEnd: ' answers',
        badAlphaNumeric: 'The input value can only contain alphanumeric characters ',
        badAlphaNumericExtra: ' y ',
        wrongFileSize: 'The file you are trying to upload is too large (max %s)',
        wrongFileType: 'Only files of type %s is allowed',
        groupCheckedRangeStart: 'Please choose between ',
        groupCheckedTooFewStart: 'Please choose at least ',
        groupCheckedTooManyStart: 'Please choose a maximum of ',
        groupCheckedEnd: ' item(s)',
        badCreditCard: 'The credit card number is not correct',
        badCVV: 'The CVV number was not correct',
        wrongFileDim : 'Incorrect image dimensions,',
        imageTooTall : 'the image can not be taller than',
        imageTooWide : 'the image can not be wider than',
        imageTooSmall : 'the image was too small',
        min : 'minimo',
        max : 'maximo',
        imageRatioNotAccepted : 'Image ratio is not accepted'
    };

    $.validate({
        language:myLanguage
    });

    // Restrict presentation length
    $('#presentation').restrictLength( $('#pres-max-length') );

    var form=$('#emailer_form').validate();
    $("#submit_consulta").on('click',function () {
    if(form.valid()===false){
        $("#exampleModalCenter").modal('show');
    }
    })

    /*on('click',function () {
        errors=[];
        if($(this).isValid(lang,conf,false)){
        $("#exampleModalCenter").modal('show');
        }*/


</script>
</body>

</html>
