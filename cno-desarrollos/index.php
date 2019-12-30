<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CNO Desarrollos</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row header-wrap">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-6 d-none d-md-block">
                        <div class="company-info clearfix">
                            <div class="company-info-item">
                                <div class="icon">
                                    <img src="images/call.png" alt="">
                                </div>
                                <div class="info">
                                    <h6>11 5365-8398</h6>
                                    <p>de 10am-6pm</p>
                                </div>
                            </div>
                            <div class="company-info-item">
                                <div class="icon">
                                    <img src="images/email.png" alt="">
                                </div>
                                <div class="info">
                                    <h6>contacto@email.com</h6>
                                    <p>Escribinos tu consulta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="header-middle-area transparent-header hidden-xs">
            <div class="container">
                <div class="drop-menu">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sticky-logo">
                                <a href="index-php">
                                    <img src="images/logo.png" alt="">
                                </a>
                            </div>
                            <nav id="primary-menu">
                                <ul class="main-menu d-none d-md-block">
                                    <li>
                                        <a href="#">home</a>
                                    </li>
                                    <li>
                                        <a href="#amenities">amenities</a>
                                    </li>
                                    <li>
                                        <a href="#3d">vistas 3d</a>
                                    </li>
                                    <li class="m-0">
                                        <a href="#contact">contacto</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu-area d-md-none">
        <div class="container mean-container" style="display: flex; justify-content: center">
            <div class="mean-bar">
                <a href="#nav" class="meanmenu-reveal" data-toggle="collapse" data-target="nav" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <nav class="mean-nav" id="nav">
                    <ul>
                        <li><a href="#home">home</a></li>
                        <li><a href="#amenities">amenities</a></li>
                        <li><a href="#vistad3d">vistas 3d</a></li>
                        <li><a href="#contacto">contacto</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

    <div id="home" class="slider bg-3 bg-opacity-black-40">
       <div class="wow animated animeatedFadeInUp fadeInUp">
           <div class="find-home-box">
               <div class="section-title text-white">
                   <h3>
                       <b>CNO</b>
                       <span style="font-size: 14px">®</span>
                   </h3>
                    <h3>TU MEJOR LUGAR</h3>
                    <h2>PARA INVERTIR</h2>
                    <h5>Dejá tus datos y un asesor te contactará</h5>
               </div>
               <div class="find-home">
                <form action="contact.php" method="POST" id="form">
                    <div class="row">
                        <div class="col-12">
                            <div class="find-home-item">
                                <input type="text" name="name" placeholder="Nombre y Apellido" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="find-home-item">
                                <input type="email" name="email"  placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="find-home-item">
                                <input type="text"  name="phone" placeholder="Teléfono" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-5 col-xs-12">
                                    <div class="find-home-item">
                                        <button type="submit" class="button btn-block btn-hover-1">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

               </div>
           </div>
       </div> 
    </div>

    <section id="page-content">
        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="about-title">
                            <h3>Una diversión</h3>
                            <h2>para disfrutar la vida</h2>
                        </div>
                        <div class="about-info">
                            <p>
                                <span class="h6">La Zona:</span>
                                <br>
                                Una de las ultimas manzanas que combinan la cercanía, el confort  y calidad de vida  que Palermo puede ofrecer. Ubicada en el corazón de una de las áreas de mayor crecimiento gastronómico, habitacional y recreativo. Bares, restaurantes, ferias y locales comerciales que cuentan un nueva historia de un barrio que se redefine de manera constante.
                                Una de las últimas inversiones a la medida de lo que el público necesita hoy: modernidad, calidez, entretenimiento y confort.  Con una amplia propuesta de productos creados a la medida del inversor de hoy.   
                            </p>
                            <div class="author-quote">
                                <h3 class="mb-3">Una industria que se reactiva</h3>
                                <p>El precio de las propiedades sigue escalando, una economía que se reactiva y oportunidades inmobiliarias que son cada vez mas escasas, todo resuelto en una propuesta única.</p>
                                <p>Encontrá tu oportunidad con alguno de nuestros representantes.<br><strong>Escribinos a: info@cnodesarrollos.com.ar</strong><br><strong>o llamanos al: (11) 5365-8398 </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="about-image">
                            <a href="#">
                                <img src="images/header2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="amenities" class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Un espacio para invertir, vivir y soñar</h2>
                            <p>No se pierda la gran oportunidad de invertir en un espacio único en un lugar único.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="service-carousel">
                        <div class="slick-list">
                            <div class="slick-track">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="service-item">
                                            <div class="service-image">
                                                <img src="http://avalon3.com/a-invest/images/service/1.jpg" alt="">
                                            </div>
                                            <div class="service-info">
                                                <h5>Piscina cubierta</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="service-item">
                                            <div class="service-image">
                                                <img src="http://avalon3.com/a-invest/images/service/2.jpg" alt="">
                                            </div>
                                            <div class="service-info">
                                                <h5>Estacionamiento</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="service-item">
                                            <div class="service-image">
                                                <img src="http://avalon3.com/a-invest/images/service/3.jpg" alt="">
                                            </div>
                                            <div class="service-info">
                                                <h5>Hall de acceso</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="service-item">
                                            <div class="service-image">
                                                <img src="http://avalon3.com/a-invest/images/service/4.jpg" alt="">
                                            </div>
                                            <div class="service-info">
                                                <h5>Gimnasio</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="service-item">
                                            <div class="service-image">
                                                <img src="http://avalon3.com/a-invest/images/service/5.jpg" alt="">
                                            </div>
                                            <div class="service-info">
                                                <h5>Pista de atletismo</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="service-item">
                                            <div class="service-image">
                                                <img src="http://avalon3.com/a-invest/images/service/6.jpg" alt="">
                                            </div>
                                            <div class="service-info">
                                                <h5>Piscina de exterior</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="service-item">
                                            <div class="service-image">
                                                <img src="http://avalon3.com/a-invest/images/service/7.jpg" alt="">
                                            </div>
                                            <div class="service-info">
                                                <h5>Sum</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="service-item">
                                            <div class="service-image">
                                                <img src="http://avalon3.com/a-invest/images/service/8.jpg" alt="">
                                            </div>
                                            <div class="service-info">
                                                <h5>Exteriores</h5>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md 7 offset-md-5">
                            <div class="features-info">
                                <div class="section-title">
                                    <h3>CARACTERÍSTICAS ÚNICAS</h3>
                                    <h2 class="h1">DE ESTE EMPRENDIMIENTO</h2>
                                </div>
                                <div class="feauteres-desc">
                                    <p>
                                        <span style="font-weight: bold">COMPLEJO AREZZO®</span>
                                        lo va a sorprender
                                    </p>
                                </div>
                                <div class="features-include">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="features-include-list">
                                                <h6>
                                                    <img src="http://avalon3.com/a-invest/images/icons/7.png" alt="">
                                                    El complejo
                                                </h6>
                                                <p>- Unidades de 50 metros <br>- Hall de dobles alturas con espacios áereos increíbles</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="features-include-list">
                                                <h6>
                                                    <img src="http://avalon3.com/a-invest/images/icons/7.png" alt="">
                                                    Esparcimiento
                                                </h6>
                                                <p>- Piscinas Indoor y Outdoor <br>- Pista de atletismo <br>- Salones para uso privado <br>- Gimnasio</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="features-include-list">
                                                <h6>
                                                    <img src="http://avalon3.com/a-invest/images/icons/7.png" alt="">
                                                    Espacios
                                                </h6>
                                                <p>- 500 cocheras cubiertas <br>- Juegos para niños <br>- Espacio de playa natural <br>-  Patios internos para Yoga y relax <br>- 17 pisos con vistas al barrio de Palermo</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="features-include-list">
                                                <h6>
                                                    <img src="http://avalon3.com/a-invest/images/icons/7.png" alt="">
                                                    Financiamiento
                                                </h6>
                                                <p>- Adelanto en Dolares, y cuotas en pesos</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featured-flat-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>
                                    VISTAS COMPLEJO AREZZO
                                    <span style="font-size: 14px;">®</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="featured-flat">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-2">
                                <div class="properties">
                                    <img src="images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-2">
                                <div class="properties">
                                    <img src="images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-2">
                                <div class="properties">
                                    <img src="images/logo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-area bg-2 bg-opacity-black-90">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h6 class="footer-title">CONTACTANOS</h6>
                                <ul class="footer-address">
                                    <li>
                                        <div class="address-icon">
                                            <img src="http://avalon3.com/a-invest/images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Palermo</span>
                                            <span>Buenos Aires, Argentina</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="http://avalon3.com/a-invest/images/icons/phone-3.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Teléfono: (011) 6250 9351</span>
                                            <span>Celular: (011) 6250 9351</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <img src="http://avalon3.com/a-invest/images/icons/world.png" alt="">
                                        </div>
                                        <div class="address-info">
                                            <span>Email: info@cnodesarrollos.com.ar</span>
                                            <span>Web: www.cnodesarrollos.com.ar</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 d-none-sm col-xs-12">
                            <div class="footer-widget middle">
                                <h6 class="footer-title">Últimas Oportunidades</h6>
                                <ul class="footer-lastest-news">
                                    <li>
                                        <div class="lastest-news-image">
                                            <a href="#">
                                                <img src="" alt="IMG">
                                            </a>
                                        </div>
                                        <div class="lastest-news-info">
                                            <h6>PRÓXIMAMENTE</h6>
                                            <P>Las mejores propiedades abiertas.</P>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lastest-news-image">
                                            <a href="#">
                                                <img src="" alt="IMG">
                                            </a>
                                        </div>
                                        <div class="lastest-news-info">
                                            <h6>PRÓXIMAMENTE</h6>
                                            <P>Las mejores propiedades abiertas.</P>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lastest-news-image">
                                            <a href="#">
                                                <img src="" alt="IMG">
                                            </a>
                                        </div>
                                        <div class="lastest-news-info">
                                            <h6>PRÓXIMAMENTE</h6>
                                            <P>Las mejores propiedades abiertas.</P>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                    </div>
                </div>    
            </div>
        </footer>
    </section>

    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("sticky-header");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <?php require_once('js/scripts.js') ?>
</body>
</html>